<?php


namespace App\Domain\Entity;


final class Article
{
    private $id;

    private $title;

    public function __construct(
        int $id,
        string $title
    )
    {
        $this->id = $id;
        $this->title = $title;
    }
}