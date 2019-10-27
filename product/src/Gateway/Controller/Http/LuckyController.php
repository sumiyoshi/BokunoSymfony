<?php

namespace App\Gateway\Controller\Http;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class LuckyController
{
    private $logger;

    private $twig;

    public function __construct(
        LoggerInterface $logger,
        Environment $twig
    )
    {
        $this->logger = $logger;
        $this->twig = $twig;
    }

    /**
     * @return Response
     * @throws \Exception
     */
    public function number(): Response
    {
        $this->logger->info(__CLASS__);

        $number = random_int(0, 100);

        return new Response($this->twig->render('lucky/number.html.twig', [
            'number' => $number,
        ]));
    }
}