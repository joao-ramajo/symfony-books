<?php

namespace App\Controller\Web;

use App\Entity\Book;
use App\Repository\BookRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PageController extends AbstractController
{
    #[Route('/', name: 'home', methods: ['GET', 'HEAD'])]
    public function home(EntityManagerInterface $entityManager): Response
    {
        $books = $entityManager->getRepository(Book::class)->all();

        return $this->render('web/home.html.twig', [
            'page_title' => 'Home Page',
            'books' => $books,
        ]);
    }

    #[Route('/books/search', name: 'books_search')]
    public function search(Request $request, BookRepository $bookRepository): JsonResponse
    {
        $query = $request->query->get('search', '');

        $books = $bookRepository->createQueryBuilder('b')
            ->where('b.title LIKE :query')
            ->setParameter('query', "%$query%")
            ->getQuery()
            ->getResult();

        return $this->json($books, 200, ['groups' => 'book:list']);
    }
}