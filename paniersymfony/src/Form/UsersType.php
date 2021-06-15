<?php

namespace App\Form;

use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UsersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('lastname')
            ->add('username')
            ->add('email')
            ->add('password')
            ->add('verifyToken')
            ->add('active')
            ->add('roles')
            ->add('createdAt')
            ->add('phone')
            ->add('address')
            ->add('city')
            ->add('state')
            ->add('country')
            ->add('postalCode')
            ->add('discount')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}
