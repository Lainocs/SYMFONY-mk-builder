<?php

namespace App\Form;

use App\Entity\Kart;
use App\Entity\Build;
use App\Entity\Wheel;
use App\Entity\Character;
use App\Entity\Hanglider;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BuildType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', null, [
                'label' => 'Name',
                'attr' => [
                    'placeholder' => 'Name',
                    'class' => 'form-control',
                ],
            ])
            ->add('chara', EntityType::class, [
                'class' => Character::class,
                'choice_label' => 'name',
                'label' => 'Character',
                'multiple' => false,
                'attr' => [
                    'class' => 'form-select',
                ],
            ])
            ->add('kart', EntityType::class, [
                'class' => Kart::class,
                'choice_label' => 'name',
                'label' => 'Kart',
                'multiple' => false,
                'attr' => [
                    'class' => 'form-select',
                ],
            ])
            ->add('wheel', EntityType::class, [
                'class' => Wheel::class,
                'choice_label' => 'name',
                'multiple' => false,
                'attr' => [
                    'class' => 'form-select',
                ],
            ])
            ->add('hanglider', EntityType::class, [
                'class' => Hanglider::class,
                'choice_label' => 'name',
                'multiple' => false,
                'attr' => [
                    'class' => 'form-select',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Build::class,
        ]);
    }
}
