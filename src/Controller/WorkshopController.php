<?php

namespace App\Controller;

use App\Entity\Workshop;
use App\Form\WorkshopType;
use App\Repository\WorkshopRepository;
use App\Chart\WorkshopReservationChart;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Dompdf\Dompdf;
use Dompdf\Options;

#[Route('/workshop')]
final class WorkshopController extends AbstractController
{
    private string $weatherApiKey;

    public function __construct(string $weatherApiKey)
    {
        $this->weatherApiKey = $weatherApiKey;
    }

    #[Route(name: 'app_workshop_index', methods: ['GET'])]
    public function index(WorkshopRepository $workshopRepository, WorkshopReservationChart $workshopReservationChart): Response
    {
        $workshops = $workshopRepository->findAll();

        // Prepare data for the chart
        $workshopTitles = [];
        $reservationCounts = [];
        foreach ($workshops as $workshop) {
            $workshopTitles[] = $workshop->getTitle();
            $reservationCounts[] = $workshop->getReservations()->count(); // Use getReservations()->count()
        }

        // Create the chart
        $chart = $workshopReservationChart->createChart($workshopTitles, $reservationCounts);

        return $this->render('workshop/index.html.twig', [
            'workshops' => $workshops,
            'chart' => $chart,
        ]);
    }

    #[Route('/f', name: 'app_workshop_indexf', methods: ['GET'])]
    public function indexf(Request $request, WorkshopRepository $workshopRepository): Response
    {
        $search = $request->query->get('search');

        // Fetch workshops based on the search query
        $workshops = $workshopRepository->findBySearchQuery($search);

        // Fetch weather forecast for each workshop
        $workshopsWithWeather = [];
        foreach ($workshops as $workshop) {
            $weatherForecast = $this->getWeatherForecast($workshop->getLocation());
            $workshopsWithWeather[] = [
                'workshop' => $workshop,
                'weatherForecast' => $weatherForecast,
            ];
        }
        return $this->render('workshop/indexf.html.twig', [
            'workshopsWithWeather' => $workshopsWithWeather,
        ]);
    }

    #[Route('/new', name: 'app_workshop_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, Security $security): Response
    {
        $workshop = new Workshop();
        $form = $this->createForm(WorkshopType::class, $workshop);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Set the creator to the currently logged-in user
            $user = $security->getUser();
            $workshop->setCreatorName($user);

            $entityManager->persist($workshop);
            $entityManager->flush();

            return $this->redirectToRoute('app_workshop_indexf', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('workshop/new.html.twig', [
            'workshop' => $workshop,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_workshop_show', methods: ['GET'])]
    public function show(Workshop $workshop): Response
    {
        return $this->render('workshop/show.html.twig', [
            'workshop' => $workshop,
        ]);
    }

    #[Route('/f/{id}', name: 'app_workshop_showf', methods: ['GET'])]
    public function showf(Workshop $workshop = null): Response
    {
        if (!$workshop) {
            throw $this->createNotFoundException('Workshop not found.');
        }

        // Fetch weather forecast for the workshop's location and date
        $weatherForecast = $this->getWeatherForecast($workshop);

        return $this->render('workshop/showf.html.twig', [
            'workshop' => $workshop,
            'weatherForecast' => $weatherForecast,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_workshop_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Workshop $workshop, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(WorkshopType::class, $workshop);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_workshop_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('workshop/edit.html.twig', [
            'workshop' => $workshop,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_workshop_delete', methods: ['POST'])]
    public function delete(Request $request, Workshop $workshop, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $workshop->getId(), $request->request->get('_token'))) {
            $entityManager->remove($workshop);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_workshop_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/pdf/{id}', name: 'app_workshop_pdf', methods: ['GET'])]
    public function generatePdf(Workshop $workshop): Response
    {
        // Render the HTML for the PDF
        $html = $this->renderView('workshop/pdf.html.twig', [
            'workshops' => [$workshop], // Pass the specific workshop as an array
        ]);

        // Initialize Dompdf
        $options = new Options();
        $options->set('defaultFont', 'Arial'); // Set default font if needed
        $dompdf = new Dompdf($options);

        // Load HTML content
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        // Return the generated PDF as a response
        return new Response(
            $dompdf->output(),
            200,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="workshop_' . $workshop->getId() . '.pdf"',
            ]
        );
    }

    /**
     * Fetch weather forecast for a given workshop.
     */
    private function getWeatherForecast(string $location): array
    {
        $apiKey = $this->weatherApiKey;
        $location = urlencode($location);
    
        // Log the location for debugging
        error_log("Location: " . $location);
    
        // Build the Weather API URL for current weather
        $url = "https://api.weatherapi.com/v1/current.json?key={$apiKey}&q={$location}";
    
        // Log the URL for debugging
        error_log("Weather API URL: " . $url);
    
        // Initialize cURL
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10); // Set a timeout
    
        // Execute the cURL request
        $response = curl_exec($ch);
    
        // Check for cURL errors
        if (curl_errno($ch)) {
            $errorMessage = 'Curl error: ' . curl_error($ch);
            error_log($errorMessage);
            curl_close($ch);
            return ['error' => $errorMessage];
        }
    
        // Close the cURL session
        curl_close($ch);
    
        // Decode the JSON response
        $data = json_decode($response, true);
    
        // Check for errors in the API response
        if (isset($data['error'])) {
            $apiErrorMessage = $data['error']['message'];
            error_log("Weather API Error: " . $apiErrorMessage);
            return ['error' => $apiErrorMessage];
        }
    
        // Return the weather data
        return $data;
    }
}
