<?php
//je créer la class étudiant qui dépendra de son parent Personne (extends)
//car pour certains attribut (comme nom prenom) je vais avoir besoin
//de les récupérer dans la classe Personne (la class personne sera la class "générique")
class Etudiant extends Personne{

    private String $cne;

    public function __construct($cne,$nom,$prenom){
        
        //Je vais récuperer le construct de la Class Personne avec "parent :: __construct" 
        parent :: __construct($nom,$prenom);
        $this->cne = $cne;
      
    }

    public function __toString(){

        //Je vais récupérer la méthode toString du parent class Personne grâce a "parent ::__toString"
        //grâce à cette synthaxe, il va comprendre que je veux récupérer la méthode du parent Personne 
        return parent :: __toString()." mon CNE: ".$this->cne;
    }

      
    

    /**
     * Get the value of cne
     */ 
    public function getCne()
    {
        return $this->cne;
    }

    /**
     * Set the value of cne
     *
     * @return  self
     */ 
    public function setCne($cne)
    {
        $this->cne = $cne;

        return $this;
    }
}

?>