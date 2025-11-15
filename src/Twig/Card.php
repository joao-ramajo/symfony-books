<?php

namespace App\Book;

use App\Entity\Book;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
class Card
{
    public readonly Book $title;
}