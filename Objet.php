<?php
include './myclass/Contenu.php';
include './myclass/Article.php';

use myclass\Article;

$article = new Article();
$article->setTitre("Mon Titre");
$article->setAuteur("Fabien");
//var_dump($article);

$article2 = new Article();
$article2->setTitre("Mon Titre2");
//var_dump($article2);

$article3 = $article2;
$article3->setTitre("Mon titre 3");
echo $article3->getTitre();
//var_dump($article2);
//var_dump($article3);

$article->setDescription("Ceci est une belle description pour voir comment ça se passe.");
var_dump($article->firstXwords(4));






