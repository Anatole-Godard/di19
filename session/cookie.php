<?php
$arrayPanier = ["Fraise", "Framboise", "Abricot", "Lunettes"];
setcookie(
        'panier'
    ,json_encode($arrayPanier)
    ,time() + (86400 * 30)
    ,"/"
);

