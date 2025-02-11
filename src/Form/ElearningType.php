<?php

namespace App\Form;

use App\Entity\Elearning;
use App\Entity\ContentTypeEnum;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\PositiveOrZero;

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
                'choices' => array_combine(
                    array_map(fn (ContentTypeEnum $enum) => ucfirst($enum->value), ContentTypeEnum::cases()), // Labels
                    ContentTypeEnum::cases() // Use the actual Enum cases here
                ),
                'choice_value' => fn (?ContentTypeEnum $enum) => $enum?->value, // Ensure value stored is a string
                'choice_label' => fn (ContentTypeEnum $enum) => ucfirst($enum->value), // Display label
                'constraints' => [
                    new NotBlank(['message' => 'Content type cannot be blank.']),
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
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Elearning::class,
        ]);
    }
}
