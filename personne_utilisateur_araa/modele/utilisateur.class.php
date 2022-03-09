<?php

//création de la classe Utilisateur qui dépend de la classe personne
//(héritage, il hérite de son parent)
class Utilisateur extends Personne{

    private String $login;
    private String $password;
    private String $service;
    private Profil $profil;//faire une composition (ne pas faire d'extends pour la partie profil)


    //instanciation du construct,mettre en paramètre les attributs de la classe parent Personne
    //ainsi que les parametre qui lui sont propre (et aussi du profil)
    public function __construct($nom,$prenom,$mail,$telephone,$salaire,$login,$password,$service,$profil)
    {
        //récupérer le __construct de son parent Personne
        //ça nous évite de l'initialisé étant donnée que ca déjà été
        parent :: __construct($nom,$prenom,$mail,$telephone,$salaire);

        //initialisation
        $this -> profil = $profil;
        $this->login = $login;
        $this->password = $password;
        $this->service = $service;
        
    }

    //création de ma ma méthode calculSalaire avec condition
    //en rapport avec le libelle (manager/directeur général)
    public function calculSalaire(){

      

        switch ($this->salaire) {
            case $this->profil->getLibelle() === "Manager";
            return $this->salaire +($this->salaire* (10/100));
                break;

            case $this->profil->getLibelle() === "Directeur général";
            return $this->salaire +($this->salaire* (40/100));
                break;

                default:
            return 0;
            break;

        }
    }

    // on va récupérer le libelle qui correspond au profil dans
    //la class profil avec le get, comme il est en private 
    public function affiche(){

        echo parent ::affiche()."\n"; //affichage des méthode et attribut du parent
        echo "Service: ".$this->service;
        echo "\n"."Poste: ".$this->profil->getLibelle()."\n";
        echo "Salaire après augmentation: ".$this->calculSalaire()."€"."\n"."\n";
        
    }


    
    /**
     * Get the value of service
     */ 
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set the value of service
     *
     * @return  self
     */ 
    public function setService($service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of login
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */ 
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of profil
     */ 
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * Set the value of profil
     *
     * @return  self
     */ 
    public function setProfil($profil)
    {
        $this->profil = $profil;

        return $this;
    }
}
