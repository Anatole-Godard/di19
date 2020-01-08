<?php
include ("config.php");
include ("_baseHTML1.php");
?>
    <h1>ADD Article</h1>
<?php

if($_POST){
    //Upload FILE
    if(!empty($_FILES['image']['name'])){
        $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $nomImage = md5(uniqid()).'.'.$extension;

        $dateNow = new DateTime();
        $repository = './uploads/images/'.$dateNow->format('Y/m');

        if(!is_dir($repository)){
            mkdir($repository,0777,true);
        }
        move_uploaded_file(
                $_FILES['image']['tmp_name']
                , $repository.'/'.$nomImage
        );
    }

    //Ajout article
    $requete = $bdd->prepare('INSERT INTO articles (titre,description,dateajout,auteur, ImageRepository,ImageFileName)
        VALUES(:titre,:description,:dateajout,:auteur,:ImageRepository,:ImageFilename)');
    $requete->execute([
        'titre' =>  $_POST['titre']
        ,'description' => $_POST['description']
        ,'dateajout' => $_POST['dateAjout']
        ,'auteur' => $_POST['auteur']
        ,'ImageRepository' => $repository
        ,'ImageFilename' => $nomImage
    ]);

    $id = $bdd->lastInsertId();
    //header("location:/articleUpdate.php?id=".$id);
}

?>
    <form name="updateArticle" method="post" enctype="multipart/form-data">
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
        <input type="file" name="image">

        <input type="submit">

    </form>













<?php include ("_baseHTML2.php"); ?>