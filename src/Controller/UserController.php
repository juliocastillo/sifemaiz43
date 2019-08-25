<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    /** 
     * @Route("/index", name="app_homepage")
     */
    public function login()
    {
        $number = random_int(0, 100);

        return $this->render('user/login.html.twig', [
            'number' => $number,
        ]);
    }
}
?>