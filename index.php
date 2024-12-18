<?php include "Voiture.php" ?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="PumpkinSpiceNyan.gif" type="image/x-icon">
    <title>POO</title>
</head>
<body>

    <p>
        <?php 

        // CREATION DE VOITURE
        
            // $zx = new Voiture;
            // $kart = new Voiture;
            $mustang = new Voiture();

            if($mustang->getLumiere()==1){
                $lum = "allumées";
            }else {
                $lum = "éteintes";
            }

            if($mustang->getCarburant() >= 64){
                $carbu = 64;
            }else{
                $carbu = $mustang->getCarburant();
            }

            $dist = 250;
            $consum = 16/100;
            $used = $dist*$consum;

            // $mustang->setCouleur("jaune");

            // $mustang->setNbPortes("3");

            // echo "La mustang ".$mustang->getCouleur()." possède ".$mustang->getNbPortes()." portes.";
            echo "La mustang est de couleur ".$mustang->getCouleur()." et est une ".$mustang->getNbPortes()." portes.<br>";
            echo "Le tableau de bord affiche que les lumières sont ". $lum .".<br> Qu'il y a ". $carbu. " litres dans le réservoir. <br>";



            // $zx->couleur = "blanc";

            // echo "Il y a ". $mustang->nbPortes . " portes sur une mustang " . $mustang->couleur ."<br>";
            echo $mustang->rouler($dist)."<br>";
            echo "La voiture a consommé ". $used. " litres et il reste donc ". $carbu-$used. ".";


        ?>
    </p>
    
<!-- 
░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
░░░░░░░░░░▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄░░░░░░░░░
░░░░░░░░▄▀░░░░░░░░░░░░▄░░░░░░░▀▄░░░░░░░
░░░░░░░░█░░▄░░░░▄░░░░░░░░░░░░░░█░░░░░░░
░░░░░░░░█░░░░░░░░░░░░▄█▄▄░░▄░░░█░▄▄▄░░░
░▄▄▄▄▄░░█░░░░░░▀░░░░▀█░░▀▄░░░░░█▀▀░██░░
░██▄▀██▄█░░░▄░░░░░░░██░░░░▀▀▀▀▀░░░░██░░
░░▀██▄▀██░░░░░░░░▀░██▀░░░░░░░░░░░░░▀██░
░░░░▀████░▀░░░░▄░░░██░░░▄█░░░░▄░▄█░░██░
░░░░░░░▀█░░░░▄░░░░░██░░░░▄░░░▄░░▄░░░██░
░░░░░░░▄█▄░░░░░░░░░░░▀▄░░▀▀▀▀▀▀▀▀░░▄▀░░
░░░░░░█▀▀█████████▀▀▀▀████████████▀░░░░
░░░░░░████▀░░███▀░░░░░░▀███░░▀██▀░░░░░░
░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
 -->
</body>
</html>