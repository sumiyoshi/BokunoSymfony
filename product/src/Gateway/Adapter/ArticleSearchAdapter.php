<?php


namespace App\Gateway\Adapter;


use App\Domain\Entity\Article;
use App\Domain\Operator\ArticleSearch\QueryInterface;

final class ArticleSearchAdapter implements QueryInterface
{

    public function searchByKeyword(string $keyword): Article
    {
        return new Article(1, 'test');
    }
}