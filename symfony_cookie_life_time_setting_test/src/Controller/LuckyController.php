<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Security;


class LuckyController extends AbstractController
{
    #[Route('/lucky/number')]
    public function number(Request $request, Security $security): Response
    {
        $number = random_int(0, 100);
        // $username = $this->getUser()->getUsername();
        // $user = $security->getUser();

        $username = 'null';
        if($this->getUser()){
            $username = $this->getUser()->getUserIdentifier();
        }

        // var_dump($username);
        return new Response(
            "<html><body>Lucky number: ${number} username ${username}</body></html>"
        );
    }
}
