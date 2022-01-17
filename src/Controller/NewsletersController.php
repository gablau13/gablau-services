<?php

namespace App\Controller;

use App\Entity\Newslaters\users;
use App\Form\NewsletersUsersType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewsletersController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {

        
        return $this->render('newsleters/contact.html.twig', [
            'controller_name' => 'NewsletersController',
        ]);
    }
}
