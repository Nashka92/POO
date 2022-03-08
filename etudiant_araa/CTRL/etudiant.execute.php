<?php

include "../MODELE/etudiant.class.php";

//création des fillières
$filiere1 = new Filiere ("1","Informatique ");
$filiere2 = new Filiere ("2","Techno de l'info et de communication ");
$filiere3 = new Filiere ("3","Génie civil ");
echo "La liste des filières de notre école :"."\n";

echo $filiere1."\n";
echo $filiere2."\n";
echo $filiere3."\n";

//création des 5 étudiants
echo "Liste des étudiants par filière :"."\n";

$etudiant1 = new Etudiant("Rashid","Mohamed","1995/01/02",$filiere1)."\n";
$etudiant2 = new Etudiant("Yves","Chakib","1992/04/02", $filiere1)."\n";
$etudiant3 = new Etudiant("Martin","Manal","2011/03/02",$filiere2)."\n";
$etudiant4 = new Etudiant("Jacques","Meriem","2000/11/02",$filiere3)."\n";
$etudiant5 = new Etudiant("Rami","Mouad","2013/01/02",$filiere3)."\n";

echo $etudiant1;
echo $etudiant2;
echo $etudiant3;
echo $etudiant4;
echo $etudiant5;























// et l'objet $filiere1 tu le mettra en paramètre lors de la création de l'étudiant1.
// pour étudiant j'ai pour paremetre $étudiant1 = new Etudiant($filiere(objet qui correspond), $nom,$prenom$dateNaissance);
// oui mais cette fois ci tu ne crées pas l'objet filiere dans le construct de l'étudiant
// au final tu crées 3 filieres. puis 5 étudiants dans lesquels tu mettras en paramètre la bonne filière




//création des 5 étudiants














?>