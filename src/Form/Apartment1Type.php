<?php

namespace App\Form;

use App\Entity\Apartment;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Apartment1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('floor')
            ->add('numberOfRoom')
            ->add('superficy')
            ->add('haveWorksToDoInside')
            ->add('openKitchen')
            ->add('nearRER')
            ->add('travelTimeToJob')
            ->add('adress')
            ->add('city')
            ->add('priority')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Apartment::class,
        ]);
    }
}
