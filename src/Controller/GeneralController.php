<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GeneralController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('general/index.html.twig');
    }

    /**
     * @Route("/account", name="account")
     */
    public function account()
    {
        return $this->render('general/account.html.twig');
    }

    /**
     * @Route("/main", name="main")
     */
    public function main()
    {
        return $this->render('general/main.html.twig');
    }
}
