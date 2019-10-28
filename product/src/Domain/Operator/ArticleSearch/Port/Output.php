<?php

namespace App\Domain\Operator\ArticleSearch\Port;


use App\Domain\Entity\Article;

final class Output
{
    private $article;

    public function __construct(Article $article)
    {
        $this->article = $article;
    }

}