<?php
// Définir une classe Client avec les attributs suivants : CIN, Nom, Prénom, Tél.
// Définir à l’aide des propriétés les méthodes d’accès aux différents attributs de la classe.
// Définir un constructeur permettant d’initialiser tous les attributs.
// Définir la méthode Afficher ( ) permettant d’afficher les informations du Client en cours.

class Client {

    //attributs
    private $cin;
    private $nom;
    private $prenom;
    private $tel;

    //Constructeur
    public function __construct($cin, $nom, $pre, $tel){   
        $this-> cin = $cin;
        $this -> nom = $nom;
        $this -> prenom = $pre;
        $this -> tel = $tel;  
    }

    //Méthodes
    public function afficher (){
        echo 'CIN : '.$this -> cin.PHP_EOL;
        echo 'Nom : '.$this -> nom.PHP_EOL;
        echo 'Prénom : '.$this -> prenom.PHP_EOL;
        echo 'Téléphone : '.$this -> tel.PHP_EOL;
    }
}


?>