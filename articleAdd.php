<?php
include ("config.php");
include ("_baseHTML1.php");
?>
    <h1>Update Article</h1>
<?php

    if($_POST){

        $requete = $bdd->prepare('INSERT INTO articles (titre,description,dateajout,auteur)
            VALUES(:titre,:description,:dateajout,:auteur)');
        $requete->execute([
            'titre' =>  $_POST['titre']
            ,'description' => $_POST['description']
            ,'dateajout' => $_POST['dateAjout']
            ,'auteur' => $_POST['auteur']
        ]);

        $id = $bdd->lastInsertId();
        header("location:/articleUpdate.php?id=".$id);
    }

?>
    <form name="updateArticle" method="post">
        <input type="text" name="titre" value="" >
        <textarea name="description"></textarea>
        <input type="date" name="dateAjout" value="">
        <select name="auteur">
            <?php
            $auteurs = ["Fabien", "Brice", "Benoit", "Denis", "Sylvain", "Manu"];
            foreach ( $auteurs as $auteur) {
                echo '<option value="'.$auteur.'" >'.$auteur.'</option>';
            }
            ?>
        </select>

        <input type="submit">

    </form>













<?php include ("_baseHTML2.php"); ?>