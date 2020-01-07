<?php
include "config.php";
//Vider la table
$requete = $bdd->prepare("TRUNCATE TABLE articles");
$requete->execute();

//Insertion des datas

$auteurs = ["Fabien", "Brice", "Benoit", "Denis", "Sylvain", "Manu"];
$titres = ["Php en Force", "Java se casse la figure", "C# c'est top", "Flutter ça perce", "Python je comprends pas comment ça en est là", "JS à fond"];

for($i=0;$i<=200;$i++){
    shuffle($auteurs);
    shuffle($titres);
    $dateAjout = new DateTime();
    $dateAjout->modify('+'.$i.' day');


    $requete = $bdd->prepare('INSERT INTO articles (titre,description,dateajout,auteur)
            VALUES(:titre,:description,:dateajout,:auteur)');
    $requete->execute([
        'titre' => $titres[0]
        ,'description' => 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L\'avantage du Lorem Ipsum sur un texte générique comme \'Du texte. Du texte. Du texte.\' est qu\'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour \'Lorem Ipsum\' vous conduira vers de nombreux sites qui n\'en sont encore qu\'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d\'y rajouter de petits clins d\'oeil, voire des phrases embarassantes).'
        ,'dateajout' => $dateAjout->format('Y-m-d')
        ,'auteur' => $auteurs[0]
    ]);
}

echo 'Terminé';

