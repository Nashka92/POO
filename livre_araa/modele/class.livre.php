<?php
class Livre {
    private $titre;
    private $auteur;
    private $prix;

    //définit un constructeur et j'ai initialisé les attributs dans mes paramètres ()
    public function __construct($titre,$auteur,$prix)
    {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->prix = $prix;

        
    }

    //Méthode afficher() permettant d’afficher les informations du livre en cours
    public function afficher (){
        echo "\n"; echo "\n";
        echo "Voici les informations du livre en cours: "; 
        echo "\n";
        print "le titre est: ".$this->titre;
        echo "\n";
        print "l'auteur est: ".$this->auteur;
        echo "\n";
        print "le prix est: ".$this ->prix."€";


    }

    

    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of auteur
     */ 
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set the value of auteur
     *
     * @return  self
     */ 
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }
}
