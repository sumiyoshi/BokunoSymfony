<?php


namespace App\Domain\Operator\ArticleSearch;

use App\Domain\Entity\Article;

interface QueryInterface
{
    public function searchByKeyword(string $keyword): Article;
}