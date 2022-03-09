<?php

//je créer la class étudiant qui dépendra de son parent Personne (extends)
//car pour certains attribut (comme nom prenom) je vais avoir besoin
//de les récupérer dans la classe Personne (la class personne sera la class générique)
class Employe extends Personne{

    protected Float $salaire;

    public function __construct($salaire,$nom,$prenom)
    {
        //Je vais récuperer le construct de la Class Personne avec "parent :: __construct" 
        // on va uniquement initialisé l'attribut qu'il lui est prpore, donc ici $salaire
        parent :: __construct($nom,$prenom);
        $this->salaire = $salaire;
        
    }

    public function __toString(){
        //Je vais récupérer la méthode toString du parent class Personne grâce a "parent ::__toString"
        //grâce à cette synthaxe, il va comprendre que je veux récupérer la méthode du parent 
        return parent :: __toString()." "."mon salaire est: ".$this->salaire." €";

        
    }

    

    

    

    
}



?>