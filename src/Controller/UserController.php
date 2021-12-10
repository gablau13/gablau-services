<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/user', name: 'user')]
    public function index(UserRepository  $usersRepository): Response
    {
        $user = $this->getUser();
        // dd($user);
        $user = $usersRepository->find($user);
        return $this->render('user/user.html.twig', [
            'user' => ' $user',
        ]);
    }
}
