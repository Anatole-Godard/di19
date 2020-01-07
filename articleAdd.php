<?php
include ("config.php");
include ("_baseHTML1.php");
?>
<h1>Ajout Article</h1>

<?php
    $requete = $bdd->prepare('INSERT INTO articles (titre,description,dateajout,auteur)
            VALUES(:titre,:description,:dateajout,:auteur)');
    $requete->execute([
        'titre' => 'Un troisième article'
        ,'description' => 'Ceci est la description de mon 3ème article'
        ,'dateajout' => '2020-10-10'
        ,'auteur' => 'Fabien'
    ]);
?>




<?php include ("_baseHTML2.php"); ?>