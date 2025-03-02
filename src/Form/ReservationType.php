<?php

namespace App\Form;

use App\Entity\Reservation;
use App\Entity\Workshop;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $workshop = $options['workshop'];

        $builder
            ->add('contactEmail')
            ->add('contactphone')
            
            ->add('reservationDate', DateType::class, [
                'widget' => 'single_text',
                'data' => new \DateTime('today'),
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Select a date',
                    'autocomplete' => 'off',
                ],
                'html5' => true,
            ])
            ->add('numberOfAttends')
            ->add('paymentStatus', ChoiceType::class, [
                'choices' => [
                    'Pending' => 'pending',
                    'Completed' => 'completed',
                    'Cancelled' => 'cancelled',
                ],
                'expanded' => true,
                'multiple' => false,
            ]);

        // Listen to form event to set workshop title
        $builder->addEventListener(FormEvents::POST_SET_DATA, function (FormEvent $event) use ($workshop) {
            $reservation = $event->getData();
            $form = $event->getForm();

            // Ensure the workshop is set before rendering the form
            if ($workshop) {
                $reservation->setWorkshopTitle($workshop);
            }

            $form->add('workshopTitle', EntityType::class, [
                'class' => Workshop::class,
                'choice_label' => 'title',
                'data' => $workshop,
                'attr' => ['readonly' => true], // Make the field readonly
            ]);
        });
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
            'workshop' => null, // Default value
        ]);
    }
}
