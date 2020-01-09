<?php
namespace src\Controller;

use src\Model\Article;
use src\Model\Bdd;

class ArticleController extends AbstractController {

    public function Index(){
        return 'bonjour';
    }

    public function ListAll(){
        $article = new Article();
        $listArticle = $article->SqlGetAll(Bdd::GetInstance());

        //Lancer la vue TWIG
        return $this->twig->render(
            'Article/list.html.twig',[
                'articleList' => $listArticle
            ]
        );
    }

}
