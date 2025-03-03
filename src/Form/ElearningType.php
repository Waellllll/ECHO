<?php

namespace App\Form;

use App\Entity\Elearning;
<<<<<<< Updated upstream
use App\Entity\ContentTypeEnum;
=======
use App\Entity\Category;
>>>>>>> Stashed changes
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
<<<<<<< Updated upstream
=======
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
>>>>>>> Stashed changes
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\PositiveOrZero;
<<<<<<< Updated upstream
=======
use Symfony\Component\Validator\Constraints\File;
>>>>>>> Stashed changes

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
<<<<<<< Updated upstream
                'choices' => array_combine(
                    array_map(fn (ContentTypeEnum $enum) => ucfirst($enum->value), ContentTypeEnum::cases()), // Labels
                    ContentTypeEnum::cases() // Use the actual Enum cases here
                ),
                'choice_value' => fn (?ContentTypeEnum $enum) => $enum?->value, // Ensure value stored is a string
                'choice_label' => fn (ContentTypeEnum $enum) => ucfirst($enum->value), // Display label
                'constraints' => [
                    new NotBlank(['message' => 'Content type cannot be blank.']),
=======
                'choices' => [
                    'Pdf' => 'pdf',
                    'Video' => 'video',
                    'Image' => 'image',
                    'Quiz' => 'quiz',
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
            ->add('difficulty_level', TextType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Difficulty level cannot be blank.']),
                ],
            ])
            ->add('created_at', null, [
                'widget' => 'single_text',
            ])
            ->add('updated_at', null, [
                'widget' => 'single_text',
=======
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
>>>>>>> Stashed changes
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Elearning::class,
        ]);
    }
}
