<?php
include ("config.php");
include ("_baseHTML1.php");
?>
<h1>Update Article</h1>
<?php
if(isset($_GET['id'])){
    if($_POST){
        $requete = $bdd->prepare("UPDATE articles set Titre=:Titre
            ,Description=:Description, DateAjout=:DateAjout, Auteur=:Auteur
            WHERE id=:IDARTICLE
                ");
        $requete->execute([
            "Titre"=> $_POST['titre']
            ,"Description" => $_POST['description']
            ,"DateAjout" => $_POST['dateAjout']
            ,"Auteur" => $_POST['auteur']
            ,"IDARTICLE" => $_GET['id']
        ]);
    }

    //Quand je vais sur www.git.local/articleUpdate.php?id=120
    $requete = $bdd->prepare('SELECT * FROM articles where id= :IDARTICLE');
    $requete->execute([
        'IDARTICLE' => $_GET['id']
    ]);
    $article = $requete->fetch();

    //var_dump($article);


}
?>
<form name="updateArticle" method="post">
    <input type="text" name="titre" value="<?php echo $article['Titre'] ?>" >
    <textarea name="description"><?php echo $article['Description'] ?></textarea>
    <input type="date" name="dateAjout" value="<?php echo $article['DateAjout'] ?>">
    <select name="auteur">
        <?php
        $auteurs = ["Fabien", "Brice", "Benoit", "Denis", "Sylvain", "Manu"];
        foreach ( $auteurs as $auteur) {
            $selected = ($auteur == $article['Auteur'])? "selected" : "";
            echo '<option value="'.$auteur.'" '.$selected.'>'.$auteur.'</option>';
            }
        ?>
    </select>

    <input type="submit">

</form>













<?php include ("_baseHTML2.php"); ?>