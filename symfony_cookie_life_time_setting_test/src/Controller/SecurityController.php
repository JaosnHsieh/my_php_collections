<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function login(Request $request, AuthenticationUtils $authenticationUtils): Response
    {
        $username = $request->request->get('_username');
        $password = $request->request->get('_password');



        // // You can add your logic to check the credentials here
        // // ...

        // // For demonstration purposes, let's print the username and password
        
        
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        
        echo 'Username: ' . $username . ' Password: ' . $password . 'error' . $error;
        

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error
        ]);
    }
}
