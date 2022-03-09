<?php
//création de la classe Profil qui ne dépend d'aucunes classe
class Profil{

    private Int $id;
    private String $code;
    private String $libelle; //type de profil (cp mn dp drh dg)
    private static $compteur=0;

    public function __construct($code,$libelle)
    {
        self::$compteur = self::$compteur + 1;
        $this->id = self :: $compteur;
        $this->code = $code;
        $this->libelle = $libelle;  
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
     * Get the value of code
     */ 
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @return  self
     */ 
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

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

// Chef de projet (CP),
// oManager (MN),
// oDirecteur de projet (DP),
// oDirecteur des ressources humaines (DRH),
// oDirecteur général (DG),
// 4. Créer des utilisateurs avec les différents profils métiers.
// 5. Afficher la liste des utilisateurs.
// 6. Filtrer la liste et afficher la liste des managers.

?>