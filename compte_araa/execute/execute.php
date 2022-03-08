<?php 
include "../modele/compte.class.php";

//Informations utilisateurs à demander
echo "Compte 1 :".PHP_EOL;
$cin = readline("Donner le CIN : ");
$nom = readline ("Donner le Nom : ");
$pre = readline ("Donner le prénom : ");
$tel = readline ("Donner le numéro de téléphone :");

// instanciation de la classe client : je dois créer un nouveau compte
$compte1 = new Compte ($cin, $nom, $pre, $tel);

// Je vais maintenant appeler la fonction afficherCompte et l'afficher
echo $compte1 -> afficherCompte().PHP_EOL;

// Je crédite le compte 1 
echo ("*************************").PHP_EOL;
$somme = readline("Donner le montant à déposer : ");
$compte1 -> crediter($somme);
echo ("*************************").PHP_EOL;


//J'affiche la mise à jour du compte 1
echo $compte1 -> afficherCompte().PHP_EOL;
echo ("*************************").PHP_EOL;

// Je débite le compte 1
$somme = readline("Donner le montant à retirer : ");
$compte1 -> debiter($somme);
echo ("*************************").PHP_EOL;

//J'affiche de nouveau la mise à jour du compte 1
echo $compte1 -> afficherCompte().PHP_EOL;
echo ("*************************").PHP_EOL;


//Informations utilisateurs à demander
echo "Compte 2 :".PHP_EOL;
$cin = readline("Donner le CIN : ");
$nom = readline ("Donner le Nom : ");
$pre = readline ("Donner le prénom : ");
$tel = readline ("Donner le numéro de téléphone : ");

$compte2 = new Compte ($cin, $nom, $pre, $tel);

echo ("Crediter le compte 2 à partir du compte 1").PHP_EOL;
$somme = readline ("Donner le montant à déposer : ");
$compte2 -> debiterCpt($somme, $compte1);

echo("Débiter le compte 1 et créditer le compte 2").PHP_EOL;
$somme = readline ("Donner le montant à retirer : ");
$compte1 -> crediterCpt($somme, $compte2);
echo ("*************************").PHP_EOL;

echo $compte1 -> afficherCompte().PHP_EOL;
echo ("*************************").PHP_EOL;

echo $compte2 -> afficherCompte().PHP_EOL;
echo ("*************************").PHP_EOL;

//J'affiche le nombre de compte
echo $compte1 -> afficherNbrCompte().PHP_EOL;








?>