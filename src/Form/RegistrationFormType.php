<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prenom', TextType::class,[
                "label" => 'Prénom',
                'attr' => [
                    'placeholder' => "Entrez votre prénom", 'class' => 'form-control'
                ]
            ])
            ->add('nom', TextType::class,[
                "label" => 'Nom',
                'attr' => [
                    'placeholder' => "Entrez votre nom", 'class' => 'form-control'
                ]
            ])

            ->add('adresse', TextType::class,[
                "label" => 'Adresse',
                'attr' => [
                    'placeholder' => "Entrez votre adresse", 'class' => 'form-control'
                ]
            ])

            ->add('telephone', TextType::class,[
                "label" => 'Téléphone',
                'attr' => [
                    'placeholder' => "0000000000", 'class' => 'form-control'
                ]
            ])
            ->add('email', TextType::class,[
                "label" => 'Email',
                'attr' => [
                    'placeholder' => "Saisissez une adresse Email valide", 'class' => 'form-control'
                ]
            ])
            ->add('agreeTerms', CheckboxType::class, [
                "label" => 'J\'accepte les conditions d\'utilisation',
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'j\'accepte les conditions d\'utilisation',
                    ]),
                ],
               
            ])
            ->add('plainPassword', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 8,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
                'attr' => [
                    'placeholder' => "Saisissez un mot de passe valide", 'class' => 'form-control'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
