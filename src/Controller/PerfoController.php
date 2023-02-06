<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PerfoController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('perfo/index.html.twig');
    }

    #[Route('/perfo', name: 'long_script')]
    public function script(): Response
    {
        sleep(100);

        /*Ce que je voudrais
        $sleep1 = sleep(50);
        $sleep2 = sleep(50);
        $letout = await all([$sleep2, $sleep1]) */
        /* idées : 
        Symfony Messenger : https://symfony.com/doc/current/the-fast-track/fr/18-async.html 
        serveur RabbitMQ : https://medium.com/@404sd/how-to-send-notification-asynchronously-using-symfony-rabbitmq-43e3077e9b36
         */

        return $this->render('perfo/index.html.twig');
    }
}
