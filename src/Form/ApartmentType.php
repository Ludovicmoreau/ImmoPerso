<?php

namespace App\Form;

use App\Entity\Apartment;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ApartmentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('floor', IntegerType::class, ['required' => true ])
            ->add('numberOfRoom', IntegerType::class, ['required' => true ])
            ->add('superficy', IntegerType::class, ['required' => true ])
            ->add('haveWorksToDoInside', ChoiceType::class,
                  ['choices' =>
                       [
                           'Oui' => 0,
                           'Non' => 1
                       ],
                   'required' => true])
            ->add('openKitchen', ChoiceType::class,
                  ['choices' =>
                       [
                           'Oui' => 0,
                           'Non' => 1
                       ],
                   'required' => true])
            ->add('nearRER', ChoiceType::class,
                  ['choices' =>
                       [
                           'Oui' => 0,
                           'Non' => 1
                       ],
                   'required' => true])
            ->add('travelTimeToJob', IntegerType::class, ['required' => true])
            ->add('adress',null, ['required' => true])
            ->add('city',null, ['required' => true])
            ->add('submit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => null,
        ]);
    }
}
