<?php

namespace App\Domain\Operator\ArticleSearch\Port;


final class Input
{
    private $keyword;

    public function __construct(string $keyword)
    {
        $this->keyword = $keyword;
    }

    public function keyword(): string
    {
        return $this->keyword;
    }
}