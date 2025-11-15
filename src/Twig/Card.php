<?php

namespace App\Book;

use App\Entity\Book;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('Card')]
class Card
{
    public Book $book;
}