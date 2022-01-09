<?php

namespace App\Form;

use App\Entity\Note;
use App\Entity\CategoryNote;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NoteFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', null, [
                'label' => ' ',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Titre',
                    'autocomplete' => 'off'
                ]
            ])
            
            ->add('description', null, [
                'label' => ' ',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Description'
                ]
                ])

            ->add('categoryNote', EntityType::class, [
                'label' => ' ',
                'attr' => [
                    'class' => 'form-control'
                ],
                'placeholder' => '-- Choisir une catégorie --',
                'class' => CategoryNote::class,
                'choice_label' => 'name'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Note::class,
        ]);
    }
}
