<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class LuckyController
{
    private $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * @return Response
     * @throws \Exception
     */
    public function number(): Response
    {
        $number = random_int(0, 100);

        return new Response($this->twig->render('lucky/number.html.twig', [
            'number' => $number,
        ]));
    }
}