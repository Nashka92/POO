<?php
// Créer Une classe Compte caractérisée par son solde et un code qui est incrémenté lors de sa création 
//ainsi que son propriétaire qui représente un client.

// Définir à l’aide des propriétés les méthodes d’accès aux différents attributs de la classe 
//(le numéro de compte et le solde sont en lecture seule) (set&get)

// Définir un constructeur permettant de créer un compte en indiquant son propriétaire.

// Ajouter à la classe Compte les méthodes suivantes :
// Une méthode permettant de crediter() le compte, prenant une somme en paramètre.

// Une méthode permettant de crediterCpt() le compte, prenant une somme et un compte en paramètres, 
//      créditant le compte et débitant le compte passé en paramètres.

// Une méthode permettant de debiter() le compte, prenant une somme en paramètre

// Une méthode permettant de débiterCpt() le compte, prenant une somme et un compte bancaire en paramètres, 
//      débitant le compte et créditant le compte passé en paramètres

// Une méthode qui permet d’afficher le résumé d’un compte.

// Une méthode qui permet d’afficher le nombre des comptes crées.

// Créer un programme de test pour la classe Compte.

include "../modele/client.class.php";

class Compte {
//Attributs
    private $solde = 0;
    private $code;
    private Client $proprietaire;
    //J'ajoute la classe Client pour que le lien soit fait
    private static $compteur = 0;
    // variable statique, elle est présente à la racine et accessible pour tout les clients


//construct
    public function __construct($cin, $nom, $pre, $tel){
        // Je met entre parenthèses les nouvelles valeurs

        $this -> proprietaire = new Client($cin, $nom, $pre, $tel);
        // Permet de créer un client en faisant une instanciation
        
        self::$compteur = self::$compteur + 1;
        // OU self::$compteur++
        $this -> code = self::$compteur;
    }
//Méthodes
    public function crediter($somme){
        $this -> solde = $this -> solde +  $somme;
        // OU $this -> solde +=  $somme;
        echo "Opération effectuée";
    }

    public function crediterCpt($somme, $compte){
        $this -> solde = $this -> solde - $somme;
        $compte -> solde = $compte -> solde + $somme;
        echo "opération effectuée";
    }

    public function debiter ($somme){
        $this -> solde = $this -> solde -  $somme;
        // OU $this -> solde -=  $somme;
        echo "Opération effectuée";
    }

    public function debiterCpt($somme, $compte){
        $compte -> solde = $compte -> solde - $somme;
        $this -> solde = $this -> solde + $somme;
        echo "opération effectuée";
    }

    public function afficherCompte (){
        echo "Détails du compte : ".PHP_EOL;
        echo "************************".PHP_EOL;
        echo "Numéro du compte : ".$this -> code.PHP_EOL;
        echo "Solde de compte: ".$this -> solde.PHP_EOL;
        echo "Propriétaire du compte : ".PHP_EOL;
        echo $this -> proprietaire -> afficher().PHP_EOL;
        // J'appelle mon objet Client à travers proprietaire, et j'appelle ensuite la fonction afficher
    }

    public function afficherNbrCompte (){
        echo "Nombre de comptes crées : " .self::$compteur;
    }
}
// Les fonctions statiques et les variables dans les classes ne sont associées à aucun objet, mais à la définition de la classe elle-même. 
// Vous pouvez dire que toutes les instances d’une classe partagent la même variable statique et les mêmes fonctions.

// Dans la définition d’une classe, « $this » se réfère à l’objet actuel, tandis que « self » se réfère à la classe actuelle.
// « self » n’est pas précédé par « $ » car « self » ne représente pas une variable mais la classe elle-même. 
// « $this » fait référence à une variable spécifique de sorte qu’elle ait un préfixe "$"
?>