<?php

include "../MODELE/filiere.class.php";

class Etudiant {
    private int $id;
    private string $nom;
    private string $prenom;
    private $dateNaissance;
    private static $compteur = 0;
    private Filiere $filiere;
   
    
    //constructeur d'initialisation
    public function __construct($nom,$prenom,$dateNaissance, $filiere)
    {
        self::$compteur = self::$compteur + 1;
        $this->id = self :: $compteur;
        //id est auto incrément
        // c'est pour passer d'un étudiant a un autre
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->filiere = $filiere;
        
    }

    public function __toString() {

        //afficher info de l'étudiant
        //Je suis l'étudiant Rami Mouad ma date de naissance est : 2013/01/02
        return $this->filiere->__toString()."Je suis l'étudiant"." ".$this->nom." ".$this->prenom." "."ma date de naissance est: ".$this->dateNaissance;

         
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of dateNaissance
     */ 
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set the value of dateNaissance
     *
     * @return  self
     */ 
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get the value of filiere
     */ 
    public function getFiliere()
    {
        return $this->filiere;
    }

    /**
     * Set the value of filiere
     *
     * @return  self
     */ 
    public function setFiliere($filiere)
    {
        $this->filiere = $filiere;

        return $this;
    }

    /**
     * Get the value of compteur
     */ 
    public function getCompteur()
    {
        return $this->compteur;
    }

    /**
     * Set the value of compteur
     *
     * @return  self
     */ 
    public function setCompteur($compteur)
    {
        $this->compteur = $compteur;

        return $this;
    }
}