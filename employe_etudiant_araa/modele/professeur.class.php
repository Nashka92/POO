<?php
//ici la class Professeur dépend de la classe employe qui lui même dépend de la classe Personne
class Professeur extends Employe{

    private String $specialite;

    public function __construct($specialite,$salaire,$nom,$prenom){
        //récuperer le __construct de la classe Employe qui lui même a récuperer le construct 
        //On a ici les paramètre de l'employer (salaire) ET de personne (nom prenom)
        //inutile des les instiancier puisque ca déjà été fait dans la classe Personne et Employe
        parent :: __construct($salaire,$nom,$prenom);
        //puis initialisé spécialité
        $this->specialite = $specialite;  
    }

    public function __toString(){
        
        //On récupère la méthode __toString() avec parent ::
        return parent :: __toString()." ma spécialité est: ".$this->specialite;  
    }
    

    /**
     * Get the value of specialite
     */ 
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Set the value of specialite
     *
     * @return  self
     */ 
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;

        return $this;
    }
}

?>