<?php


namespace App\Domain\Operator\ArticleSearch;


use App\Domain\Operator\ArticleSearch\Port\Input;
use App\Domain\Operator\ArticleSearch\Port\Output;

final class ArticleSearch
{
    private $query;

    public function __construct(QueryInterface $query)
    {
        $this->query = $query;
    }

    public function search(Input $input) : Output
    {
        $article = $this->query->searchByKeyword($input->keyword());
        return  new Output($article);
    }

}