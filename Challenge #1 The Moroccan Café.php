<?php
$status =  "student" ;
$nombre_des_commande = 13 ;
$prix_du_the = 5;


$prix = ($prix_du_the * $nombre_des_commande);

$prix_promo =intdiv($nombre_des_commande,5);

$prix_final= $prix - $prix_promo;

if($status == "student"){
     $prix= $prix* 0.8;
}

    echo "Le statut est : ".$status."<br>";
    echo"-----------------------------"."<br>";

    echo"le nombre des commandes est : ".$nombre_des_commande."<br>";
    echo"-----------------------------"."<br>";

    echo"le prix du the : ".$prix_du_the."<br>";
     echo"-----------------------------"."<br>";

    echo"le prix final a payee ". $prix_final."<br>";

    echo $prix_promo;

?>