<?php

namespace App\Form;

use App\Entity\User;
use App\Enum\UserType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;


class UserFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class)
            ->add('password', PasswordType::class, [
                'label' => 'Mot de passe',
                'required' => true,
                'attr' => ['autocomplete' => 'new-password'],
            ])
            ->add('roles', ChoiceType::class, [
                'choices'  => [
                    'Admin' => 'ROLE_ADMIN',
                    'Agriculteur Professionnel' => 'ROLE_PROFESSIONNEL',
                    'Agriculteur Amateur' => 'ROLE_AMATEUR',
                ],
                'expanded' => true,
                'multiple' => true,
            ])
            ->add('typeUtilisateur', ChoiceType::class, [
                'choices'  => array_combine(
                    array_map(fn(UserType $type) => $type->label(), UserType::cases()),
                    UserType::cases()
                ),
                'choice_value' => fn (?UserType $type) => $type?->value,
                'expanded' => false,
                'multiple' => false,
                'required' => true,
                'placeholder' => 'Sélectionnez un type d utilisateur',
            ]); 

    } 

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
