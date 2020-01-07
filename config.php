<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "cesiblog";

try{
    $bdd = new PDO('mysql:host='.$hostname.
    ';dbname='.$dbname.';charset=utf8',$username,$password);
    $bdd->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );
}
catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}


function firstXwords($nb,$string){
    $arrayString = str_word_count($string,1,'éèà');

    $result ='';
    for($i=0;$i<=$nb -1;$i++){
        $result = $result.$arrayString[$i].' ';
    }

    return $result;
}
