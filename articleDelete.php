<?php
include 'config.php';
if(isset($_GET['id'])){
    $requete = $bdd->prepare('DELETE FROM articles where id=:IDARTICLE');
    $requete->execute([
        'IDARTICLE' => $_GET['id']
    ]);
}
header("location:/articleList.php");