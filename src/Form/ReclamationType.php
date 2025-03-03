<?php

namespace App\Form;

use App\Entity\Reclamation;
use App\Entity\Elearning;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('article', EntityType::class, [
                'class' => Elearning::class,
                'choice_label' => 'title',
            ])
            ->add('evidenceFile', VichFileType::class, [
                'required' => false,
                'allow_delete' => true, // Allow deleting the file
                'download_uri' => true,  // Provide a link to download the file
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Submit Reclamation',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
