<?php

namespace App\Form;

use App\Entity\Workshop;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;


class WorkshopType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('date', DateType::class, [
                'widget' => 'choice', // Use 'choice' to create dropdowns for day, month, and year
                'years' => range(date('Y'), date('Y') + 10), // Specify the range of years
                'months' => range(1, 12), // Specify the months (1-12)
                'days' => range(1, 31), // Specify the days (1-31)
                'html5' => false, // Set to true if you want to use the HTML5 date input
                'format' => 'dd MM yyyy', // Specify the format for display
                'attr' => [
                    'class' => 'form-control', // Add any additional attributes you want
                ],
                'empty_data' => false,
            ])
            ->add('duration')
            ->add('location')
            ->add('instractor')
            ->add('targetAudience')
            ->add('topicsCovered')
            ->add('materialsProvided')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Workshop::class,
        ]);
    }
}
