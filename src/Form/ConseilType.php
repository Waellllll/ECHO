<?php

namespace App\Form;

use App\Entity\Conseil;
use App\Entity\Materiel;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ConseilType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('contenu')
            ->add('materiels', EntityType::class, [
                'class' => Materiel::class,
                'choice_label' => 'nom',
                'multiple' => true,
                'by_reference'=>false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Conseil::class,
        ]);
    }
}
