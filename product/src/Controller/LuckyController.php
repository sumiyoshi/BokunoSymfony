<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class LuckyController
{
    /**
     * @param LoggerInterface $logger
     * @return JsonResponse
     * @throws \Exception
     */
    public function number(LoggerInterface $logger): JsonResponse
    {
        $logger->info('We are logging!');

        $number = random_int(0, 100);

        return new JsonResponse(
            [$number, 'json']
        );
    }
}