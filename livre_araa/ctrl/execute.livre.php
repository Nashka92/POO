<?php
//écrire un programme testant la classe Livre
include("../modele/class.livre.php");


$titre = "Programmer en C";
$auteur = "Claude Delanoy";
$prix = "350";
$livre1 = new Livre ($titre,$auteur,$prix);

echo "".$livre1->afficher();


$titre = "Programmer en Java";
$auteur = "Claude Delanoy";
$prix = "450";
$livre2 = new Livre ($titre,$auteur,$prix);

echo "".$livre2->afficher(); echo "\n";