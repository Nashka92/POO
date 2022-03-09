<?php

//création d'une classe Personne, cette classe sera la classe générique
class Personne {

    protected Int $id;
    protected String $nom;
    protected String $prenom;
    protected String $mail;
    protected String $telephone;
    protected Float $salaire;
    protected static $compteur = 0;

    public function __construct($nom,$prenom,$mail,$telephone,$salaire)
    {
        self::$compteur = self::$compteur + 1;
        $this->id = self :: $compteur;

        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->telephone = $telephone;
        $this->salaire = $salaire;    
    }

    public function calculSalaire(){

        return $this->salaire;


    }

    //affichage des attributs de la classe Personne
    public function affiche(){

        echo "ID: ".$this->id."\n"."Nom: ".$this->nom."\n".
        "Prénom: ".$this->prenom."\n"."Email: ".$this->mail."\n"."Tél: "
        .$this->telephone."\n"."Salaire: ".$this->salaire."€";
        
        
    }

    

   

}
?>