<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>BLOG CESI</title>
</head>
<body>
    <h1>Accueil</h1>
    <p>Bienvenu sur le blog du CESI</p>
    <?php
        //Commentaire sur une seule ligne
        /* commentaire
        sur plusieurs
        ligne
        */
        /*
        echo "<p>Hello World</p>";
        $a = false;
        $b = 12;
        $c = 12.5;
        $chaine = "Ceci est une chaine de caractère";

        //echo $b;
        var_dump($c);

        $arrayHomme = array("Jean-Pierre","Philippe",12.5,false);
        $arrayFemme = ["Martine", "Julie", "Geneviève"];

        $arrayHomme[] = "Xavier";
        $arrayFemme[] = "Laurianne";

        var_dump($arrayHomme);
        var_dump($arrayFemme);

        echo $arrayHomme[1]; //Affiche l'index 1 du tableau = Philippe
        //echo $arrayFemme[4];

        $var = "<br/>Ma prhrase \"\" d'actualité";
        $var2 = 'Ma phrase d\'actualité';
        echo "$var<br/>";
        echo '$var<br/>';

        echo '<p>Il faut contacter : '.$arrayFemme[0].'</p>';

        for($i=0;$i<=3;$i++){
            echo '<p>Je vais afficher l\'index '.$i.' du tableau des femmes : ';
            echo $arrayFemme[$i].'</p>';
        }

        for($i=0;$i<=count($arrayFemme) - 1;$i++){
            echo '<p>Je vais afficher l\'index '.$i.' du tableau des femmes : ';
            echo $arrayFemme[$i].'</p>';
        }

        $arrayFruits = ["F"=>"Fraise","A"=>"Abricot","P"=>"Pomme"];
        //echo '<p>'.$arrayFruits[1].'</p>';
        echo '<p>'.$arrayFruits["A"].'</p>';
        $arrayFruits["G"] = "Grenade";
        $arrayFruits["F"] = "Framboise";

        foreach ($arrayFruits as $key => $value){
            echo '<p>L\'index '.$key.' correspond à : '.$value.'</p>';
        }
        */
        $achats = array(
            "A" => array("Prenom" => "Amandine", "Prix" => 85,
                    "Panier" => array(
                        "Fruit" => array("Framboise", "Fraise", "Pomme")
                        ,"Legume"=> array("Salade", "Endive")
                    )
            ),
            "B" => array("Prenom" => "Brice", "Prix" => 680,
                "Panier" => array(
                    "Fruit" => array("Lichi", "Kiwi", "Pomme")
                    ,"Legume"=> array("Avocat", "Pomme de terre")
                )
            ),
            "E" => array("Prenom" => "Emmanuel", "Prix" => 156,
                "Panier" => array(
                    "Fruit" => array("Peche", "Banane", "Pomme")
                    ,"Legume"=> array("Tomate", "Carotte", "Endive")
                )
            )
        );
        /*
    //var_dump($achats);
    $json = json_encode($achats);
    echo $json;
    $jsonToArray = json_decode($json);
    var_dump($jsonToArray);
    */
    $prix = 0;
    echo('<ul>');
        foreach ($achats as $key => $value){
            $prix = $prix + $value["Prix"];
            echo('<li>');
                echo('Voici le panier de : '.$value["Prenom"]);
                echo '<ul>';
                    echo '<li> FRUITS = ';
                        foreach ($value["Panier"]["Fruit"] as $keyFruit => $valueFruit){
                            echo $valueFruit.', ';
                        }
                    echo '</li>';
                echo '<li> LEGUMES = ';
                foreach ($value["Panier"]["Legume"] as $keyLegume => $valueLegume){
                    echo $valueLegume.', ';
                }
                echo '</li>';
                echo '</ul>';
            echo('</li>');
        }
    echo('</ul>');

        echo '<p>Le chiffre d\'affaire est de : '.$prix.'€</p>';

        $bool = true;
        $age = 15;
        $ville = "Paris";

        if($bool){
            echo '<p>$bool est à false</p>';
        }elseif($age >=13 AND ($ville == 'Paris' OR $ville == 'Lille') ){
            echo '<p>Plus de 13 ans sur Paris ou Lille</p>';
        }else{
            echo '<p>Rien de tout ça</p>';
        }

        $age = 17;
        /*
        if($age >= 18){
            $majeur = true;
        }else{
            $majeur = false;
        }
        */
        $majeur = ($age >=18) ? true : false;
        // SWITCH CASE
        $note = 15;
        switch ($note){
            case 0:
                echo 'Tu es vraiment nul';
                break;
            case ($note >= 5 AND $note <= 10):
                echo 'Pas terrible';
                break;
            case $note >= 18:
                echo 'Bravo';
                break;
            default:
                echo 'Désolé je n\'ai pas de message';
        }


        // BOUCLES
        $nombreDeLigne = 1;
        while ($nombreDeLigne <=100){
            echo '<p>Ceci est la ligne N° : '.$nombreDeLigne.'</p>';

            if($nombreDeLigne == 65){
                break;
            }
            $nombreDeLigne ++;
        }

        //Fonctions
    function addition($a,$b){
            $result = $a + $b;
            return $result;
    }
    $addition = addition(5,2);
        var_dump($addition);
    echo 'L\'addition est de :'.addition(12.4,13);












    ?>











    <!-- Commentaire -->
</body>

</html>