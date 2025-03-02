<?php

namespace App\Controller;

use App\Repository\UserRepository;
use App\Repository\ReservationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


final class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard', methods: ['GET'])]
    public function dashboard(UserRepository $userRepository, ReservationRepository $reservationRepository): Response
    {
        // Fetch all users
        $users = $userRepository->findAll();

        // Count professionals and amateurs
        $professionnelsCount = 0;
        $amateursCount = 0;

        foreach ($users as $user) {
            if (in_array('ROLE_PROFESSIONNEL', $user->getRoles())) {
                $professionnelsCount++;
            }
            if (in_array('ROLE_AMATEUR', $user->getRoles())) {
                $amateursCount++;
            }
        }

        // Prepare user distribution data for the chart
        $chartData = [
            ['Type', 'Nombre'],
            ['Professionnels', $professionnelsCount],
            ['Amateurs', $amateursCount],
        ];

        // Fetch reservation statistics
        $reservationsPerWorkshop = $reservationRepository->getReservationsPerWorkshop();
        $reservationsByPaymentStatus = $reservationRepository->getReservationsByPaymentStatus();

        // Render the dashboard template with all data
        return $this->render('user/dashboard.html.twig', [
            'chartData' => $chartData, // User distribution data
            'reservationsPerWorkshop' => $reservationsPerWorkshop, // Reservations per workshop
            'reservationsByPaymentStatus' => $reservationsByPaymentStatus, // Reservations by payment status
        ]);
    }
}