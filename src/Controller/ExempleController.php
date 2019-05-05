<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ExempleController extends AbstractController
{
    /**
     * @Route("/", name="Welcome_page")
     */
    public function index()
    {
        return $this->render('welcome.html.twig');
    }
}
