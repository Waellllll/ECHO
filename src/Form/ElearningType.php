<?php

namespace App\Form;

use App\Entity\Elearning;
use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\PositiveOrZero;
use Symfony\Component\Validator\Constraints\File;

class ElearningType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'The title cannot be blank.']),
                ],
            ])
            ->add('description', TextareaType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'The description cannot be blank.']),
                ],
            ])
            ->add('content_type', ChoiceType::class, [
                'choices' => [
                    'Pdf' => 'pdf',
                    'Video' => 'video',
                    'Image' => 'image',
                    'Quiz' => 'quiz',
                ],
            ])
            ->add('content_url', TextType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Content URL cannot be blank.']),
                ],
            ])
            ->add('duration', IntegerType::class, [
                'constraints' => [
                    new PositiveOrZero(['message' => 'Duration cannot be negative.']),
                ],
            ])
            ->add('difficulty_level', ChoiceType::class, [
                'choices' => [
                    'Easy' => 'easy',
                    'Medium' => 'medium',
                    'Hard' => 'hard',
                ],
            ])
            ->add('categories', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'name',
                'multiple' => true,
                'expanded' => true,
                'required' => false,
            ])
            ->add('file_path', FileType::class, [
                'label' => 'Upload File',
                'mapped' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '100M',
                        'mimeTypes' => [
                            'application/pdf',
                            'image/png',
                            'image/jpeg',
                            'video/mp4',
                            'application/msword',
                            'text/plain',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid file (PDF, PNG, JPEG, MP4, DOC, TXT)',
                    ]),
                ],
                'required' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Elearning::class,
        ]);
    }
}
