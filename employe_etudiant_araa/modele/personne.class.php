<?php
//Je vais créer la class Personne
 class Personne {
     
    protected Int $id;
    protected String $nom;
    protected String $prenom;
    protected static $compteur;
    
    //instanciation 
    public function __construct($nom,$prenom)
    {
        self::$compteur = self::$compteur + 1;
        $this->id = self :: $compteur;
        $this->nom = $nom;
        $this->prenom = $prenom;
        
    }
    
    public function __toString()
    {
        return "Je suis"." ".$this->nom." ".$this->prenom;
  
    }
    
    
 }

?>