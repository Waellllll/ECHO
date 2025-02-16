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
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Symfony\Component\Validator\Constraints\EqualTo;


class UserFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {   $isProfilePage = $options['is_profile_page'] ?? false;

        $builder
            ->add('nom', null, [
                'label' => 'Nom',
                'required' => true,
                'attr' => ['placeholder' => 'Nom'],
            ])
            ->add('prenom', null, [
                'label' => 'Prénom',
                'required' => true,
                'attr' => ['placeholder' => 'Prénom'],
            ])
            ->add('email', EmailType::class)
            ->add('password', PasswordType::class, [
                'label' => 'Mot de passe',
                'required' => true,
                'attr' => ['autocomplete' => 'new-password'],
            ]);
        if (!$isProfilePage) {
            $builder
            ->add('roles', ChoiceType::class, [
                'choices'  => [
                    'Admin' => 'ROLE_ADMIN',
                    ' Professionnel' => 'ROLE_PROFESSIONNEL',
                    ' Amateur' => 'ROLE_AMATEUR',
                ],
                'expanded' => true,
                'multiple' => true,
            ]);
            
        }
    } 

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'is_profile_page' => false,
        ]);
    }
}
