<?php

namespace App\Form;

use App\Entity\Voitures;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VoituresType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('prixV')
            ->add('stock')
            ->add('description')
            ->add('vitesse')
            ->add('acceleration')
            ->add('image')
            ->add('annee')
            ->add('chevaux')
            ->add('moteur')
            ->add('carburant')
            ->add('boiteAuto')
            ->add('conso')
            ->add('Co2')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Voitures::class,
        ]);
    }
}
