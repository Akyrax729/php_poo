<?php 

class Voiture{

    // ATTRIBUTS
    private $couleur;
    private $nbPortes;

    // CONSTRUCTEUR
    // function __construct($color="blanche",$nbPortes=3) {
        // $this->couleur = $couleur;
        // $this->nbPortes = $nbPortes;
    // };

    function __construct(
        $color="blanche",
        $doornb=3,
        $light=0
    ){
        $this->setCouleur($color) ;
        $this->setNbPortes($doornb);
        $this->setCarburant();
        $this->setLumiere($light);
    }

    // COULEUR 

    public function getCouleur(){
        return $this->couleur;
    }

    public function setCouleur($color){
        $this->couleur = $color;
    }

    


    // CARBURANT

    public function getCarburant(){
        return $this->carburant;
    }

    public function setCarburant($fuel){
        $this->carburant = $fuel;
    }

    // NOMBRE DE PORTE 

    public function getNbPortes(){
        return $this->nbPortes;
    }

    public function setNbPortes($doornb){
        $this->nbPortes = $doornb;
    }

    // LUMIERE

    public function getLumiere(){
        return $this->lumiere;
    }

    public function setLumiere($light){
        $this->lumiere = $light;
    }


    // METHODES

    public function rouler ($dist){
        echo "La voiture roule sur ".$dist." km !";
    }

}