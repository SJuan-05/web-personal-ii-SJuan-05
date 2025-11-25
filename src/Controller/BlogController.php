<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BlogController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
	    return $this->render('blog/contact.html.twig', []);
    }

     #[Route('/concerts', name: 'concerts')]
    public function concerts(): Response
    {
	    return $this->render('blog/concerts.html.twig', []);
    }

     #[Route('/gallery', name: 'gallery')]
    public function index(): Response
    {
	    return $this->render('blog/gallery.html.twig', []);
    }
}
