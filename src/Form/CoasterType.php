<?php

namespace App\Form;

use App\Entity\Coaster;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CoasterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', options:['label' => 'nom'])
            ->add('maxSpeed', options:['label' => 'vitesse max'])
            ->add('length', options:['label' => 'longueur'])
            ->add('maxHeight', options:['label' => 'poid maximal'])
            ->add('operating', options:['label' => 'en fonction'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Coaster::class,
        ]);
    }
}
