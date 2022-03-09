<?php

class Filiere {

    private int $id;
    private string $code;
    private string $libelle;
    private static $compteur = 0;
    
    public function __construct($code,$libelle) 
    {
        
        self::$compteur = self::$compteur + 1;
        $this->id = self :: $compteur;
        //l’identifiant est auto incrément.
        //faire en sorte que l'id soit un compteur
        $this->libelle = $libelle;
        $this->code = $code;
    }

    public function __toString()  {

        //__toString va ici afficher les filières
        //La méthode magique __toString() va être appelée dès que l’on va traiter un objet comme une chaine de caractères
        //(par exemple lorsqu’on tente d’echo un objet).Attention, cette méthode doit obligatoirement retourner une chaine
        //ou une erreur sera levée par le PHP.
        return "Filière : ".$this->libelle;
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

    /**
     * Get the value of etudiant
     */ 
    public function getEtudiant()
    {
        return $this->etudiant;
    }

    /**
     * Set the value of etudiant
     *
     * @return  self
     */ 
    public function setEtudiant($etudiant)
    {
        $this->etudiant = $etudiant;

        return $this;
    }
}

?>