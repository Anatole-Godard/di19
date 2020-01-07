<?php
include ("config.php");
include ("_baseHTML1.php");
var_dump($_POST);
?>

<form name="recherche" method="POST">
    <input type="text" placeholder="ID SQL" name="search">
</form>

<h1>Liste des articles</h1>
<?php
/*
    $requete = $bdd->query('SELECT * FROM articles');
    $datas = $requete->fetchAll();
    var_dump($datas);
*/
if($_POST){
    //Requete non protégée
    //$requete = $bdd->query('SELECT * FROM articles where id='.$_POST['search']);
    $requete = $bdd->prepare('SELECT * FROM articles where id= :IDARTICLE');
    $requete->execute([
        'IDARTICLE' => $_POST['search']
        ]);
}else{
    $requete = $bdd->query('SELECT * FROM articles');
}
$datas = $requete->fetchAll();
var_dump($datas);

?>

<?php include ("_baseHTML2.php"); ?>


