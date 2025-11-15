<?php

namespace App\Form;

use App\Entity\Book;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', null, [
                'label' => 'Title',
                'attr' => [
                    'class' => 'border rounded w-full px-3 py-2 mt-1 focus:ring-2 focus:ring-blue-400',
                    'placeholder' => 'Book title'
                ]
            ])
            ->add('description', null, [
                'label' => 'Description',
                'attr' => [
                    'class' => 'border rounded w-full px-3 py-2 mt-1',
                    'rows' => 4,
                    'placeholder' => 'Short description...'
                ]
            ])
            ->add('pageNumber', null, [
                'label' => 'Pages',
                'attr' => [
                    'class' => 'border rounded w-full px-3 py-2 mt-1',
                    'min' => 1
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Book::class,
        ]);
    }
}
