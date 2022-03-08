<?php

class Rectangle{
    private $longueur;
    private $largeur;

    //constructeur par défaut et initialisation dans les paramètres
    //le this sert à pointer la variable
    public function __construct($long, $larg ) {
        $this->longueur = $long;
        $this->largeur = $larg;
    }

    //1 - méthode périmètre
    public function perimetre(){
    
        return 2 * ($this->longueur + $this->largeur);
        
    }

    //2 - méthode aire
    public function aire(){
        return ($this->longueur * $this->largeur);
    }

    //3 - méthode estCarre, condition si c'est un carrée
    public function estCarre(){
       return  $this->longueur == $this->largeur ? "est un carré":" n'est pas un carré";
    }

    

    //4 - méthode afficherRectangle
    public function afficherRectangle() {
        $this->largeur;
        $this->longueur;
        echo "les caractéristique du rectangle sont";
        echo "\n";
        print $this->perimetre();
        echo "\n";
        print $this->aire();
        echo "\n";
        print $this->estCarre();
        echo "\n";
         }

        










/**
     * Get the value of largeur
     */ 
    public function getLargeur()
    {
        return $this->largeur;
    }

    /**
     * Set the value of largeur
     *
     * @return  self
     */ 
    public function setLargeur($largeur)
    {
        $this->largeur = $largeur;

        return $this;
    }

    /**
     * Get the value of longueur
     */ 
    public function getLongueur()
    {
        return $this->longueur;
    }

    /**
     * Set the value of longueur
     *
     * @return  self
     */ 
    public function setLongueur($longueur)
    {
        $this->longueur = $longueur;

        return $this;
    }

};

?>