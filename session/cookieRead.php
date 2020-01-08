<?php
if(isset($_COOKIE['panier'])){
    $panier = json_decode($_COOKIE['panier']);
    echo $panier[0];
}