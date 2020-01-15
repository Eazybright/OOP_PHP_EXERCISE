<?php

// class Article {
    
//     public function all()
//     {
//         return 'Returning all articles from local database';
//     }
// }


// class Display {
    
//     protected $article;
    
//     public function __construct(Article $article)
//     {
//         $this->article = $article;
//     }
    
//     public function articles()
//     {
//         return $this->article->all();
//     }
// }

interface ArticleInterface
{
    public function all();
}

class MysqlArticle implements ArticleInterface {
    
    public function all()
    {
        return 'Returning all articles from local database';
    }
}

class ApiArticle extends ArticleInterface {
    
    public function all()
    {
        return 'Returning all articles from local database';
    }
}

class Display {
    
    protected $article;
    
    public function __construct(ArticleInterface $article)
    {
        $this->article = $article;
    }
    
    public function articles()
    {
        return $this->article->all();
    }
}