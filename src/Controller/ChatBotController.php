<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ChatBotController extends AbstractController
{
    #[Route('/chatbot/send', name: 'chatbot_send', methods: ['POST'])]
    public function handleMessage(Request $request): JsonResponse
    {
        $userMessage = $request->request->get('message', '');
        $botReply = $this->generateReply($userMessage);
        return new JsonResponse(['reply' => $botReply]);
    }

    private function generateReply(string $userMessage): string
    {
        $lowerMsg = strtolower(trim($userMessage));
        if ($lowerMsg === 'hello') {
            return 'Bonjour! Comment puis-je vous aider concernant nos matériels ou conseils?';
        } elseif ($lowerMsg === 'help') {
            return 'Je peux vous renseigner sur nos matériels (description, prix, etc.) ou sur nos conseils (contenu, date de publication...). Posez-moi votre question!';
        } elseif (strpos($lowerMsg, 'bye') !== false) {
            return 'Au revoir! Merci d’avoir discuté avec moi.';
        }
        if (strpos($lowerMsg, 'matériel') !== false || strpos($lowerMsg, 'materiel') !== false) {
            return 'Nous proposons divers matériels (outils, équipements...). Vous pouvez demander plus de détails sur le type, la marque, ou le prix.';
        }
        if (strpos($lowerMsg, 'marque') !== false) {
            return 'Chaque matériel est associé à une marque spécifique. Vous pouvez consulter la liste de matériels pour plus de détails.';
        }
        if (strpos($lowerMsg, 'prix') !== false) {
            return 'Nos prix varient selon le type de matériel. Visitez la page “Matériels” pour voir les tarifs ou préciser un nom pour connaître le prix exact.';
        }
        if (strpos($lowerMsg, 'type') !== false) {
            return 'Les matériels sont classés par type (électronique, outillage, etc.). De quel type de matériel avez-vous besoin?';
        }
        if (strpos($lowerMsg, 'conseil') !== false) {
            return 'Nous proposons des conseils (astuces, recommandations, etc.) pour l’utilisation de nos matériels. Vous pouvez demander un conseil précis.';
        }
        if (strpos($lowerMsg, 'publication') !== false || strpos($lowerMsg, 'date') !== false) {
            return 'Chaque conseil a une date de publication. Rendez-vous sur la page “Conseils” pour voir les plus récents.';
        }
        if (strpos($lowerMsg, 'contenu') !== false || strpos($lowerMsg, 'détail') !== false) {
            return 'Le contenu d’un conseil fournit des astuces ou instructions spécifiques. Demandez un titre ou visitez la page “Conseils” pour en savoir plus.';
        }
        if (strpos($lowerMsg, 'note') !== false) {
            return 'Chaque conseil possède une note indicative (évaluation). Vous pouvez noter un conseil pour partager votre avis.';
        }
        if (strpos($lowerMsg, 'bonjour') !== false) {
            return 'Bonjour!';
        }
        if (strpos($lowerMsg, 'agriculture') !== false) {
            return 'L’agriculture durable repose sur des techniques respectueuses de l’environnement. De quel aspect souhaitez-vous parler (techniques, irrigation, types de cultures, etc.)?';
        }
        if (strpos($lowerMsg, 'sol') !== false) {
            return 'Le choix du sol est essentiel pour la culture. Certains sols sont plus adaptés aux légumes, d’autres aux céréales. Voulez-vous des conseils sur un type de culture en particulier?';
        }
        if (strpos($lowerMsg, 'engrais') !== false) {
            return 'Les engrais peuvent être organiques ou chimiques. L’engrais biologique est recommandé pour une agriculture durable. Souhaitez-vous en savoir plus sur un type d’engrais?';
        }
        if (strpos($lowerMsg, 'irrigation') !== false) {
            return 'Les systèmes d’irrigation varient entre l’irrigation goutte-à-goutte, l’aspersion, et d’autres méthodes. Quel système vous intéresse?';
        }
        if (strpos($lowerMsg, 'culture') !== false) {
            return 'Les cultures peuvent être saisonnières ou permanentes. Vous souhaitez des conseils sur quelle culture en particulier?';
        }
        if (strpos($lowerMsg, 'maladie') !== false || strpos($lowerMsg, 'parasite') !== false) {
            return 'Les cultures sont sujettes à différentes maladies et parasites. Vous pouvez me demander des solutions pour un problème spécifique.';
        }
        if (strpos($lowerMsg, 'plante') !== false) {
            return 'Les plantes nécessitent des soins spécifiques selon leur type. Cherchez-vous des conseils sur une espèce en particulier ou sur les méthodes de plantation ?';
        }
        if (strpos($lowerMsg, 'fleure') !== false) {
            return 'Les fleurs embellissent les jardins et nécessitent un entretien particulier. Vous voulez des conseils sur une variété spécifique ou sur leur entretien ?';
        }
        if (strpos($lowerMsg, 'serfouette') !== false) {
            return 'La serfouette est un outil essentiel pour ameublir le sol et désherber. Voulez-vous des conseils sur son utilisation ou sur le choix du bon modèle ?';
        }
        if (strpos($lowerMsg, 'tracteur') !== false) {
            return 'Les tracteurs facilitent les travaux agricoles. Souhaitez-vous en savoir plus sur les différents modèles, leur puissance ou leur entretien ?';
        }
       
        return 'Désolé, je ne suis pas sûr de comprendre. Pouvez-vous reformuler votre question sur les matériels ou les conseils?';
    }
}