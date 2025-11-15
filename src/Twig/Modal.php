<?php

namespace App\Twig;

use App\Entity\Book;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('Modal')]
class Modal
{
    public Book $book;
}