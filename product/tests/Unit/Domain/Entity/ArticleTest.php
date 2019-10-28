<?php

use App\Domain\Entity\Article;
use PHPUnit\Framework\TestCase;

class ArticleTest extends TestCase
{

    public function testインスタンスの生成()
    {
        $this->assertEquals(
            new Article(1, 'title'),
            new Article(1, 'title')
        );

        $this->assertNotEquals(
            new Article(1, 'title'),
            new Article(2, 'title')
        );

        $this->assertNotEquals(
            new Article(1, 'title'),
            new Article(1, 'title2')
        );
    }
}
