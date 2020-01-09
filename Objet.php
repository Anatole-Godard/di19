<?php
include './myclass/Contenu.php';
include './myclass/Article.php';

use myclass\Article;

$article = new Article();
$article->setTitre("Mon Titre");
$article->setDescription("Ma petite Description qui est très belle");
$article->setAuteur("Fabien");
$article->setDateAjout("2020-01-09");
var_dump($article);
$article->SqlAdd();







