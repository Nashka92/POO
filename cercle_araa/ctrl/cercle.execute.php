<?php
//dans le constructeur du centre je vais créer un point
//dans l'obejt cercle j'ai imoporter l'objet point, un centre c'est un point pour donner.le point c'est pour donner le cercle
//l'inclusion de point c'est dans cercle, la class cercle
//un cercle esr composé d'un point et d'un rayon

include ("../modele/cercle.class.php");

$x = readline("donnez l'abscisse du centre: ");

$y = readline("donnez l'ordonné du centre: ");

$rayon = readline("donnez le rayon: ");



$c1 = new Cercle($x,$y,$rayon);

$c1->Afficher();
echo "le périmètre est :".$c1->getPerimetre();
echo "la surface est :".$c1->getSurface();

$x = readline("donnez un point x: ");
$y = readline("donnez un point y: ");


$point1 = new Point ($x1,$y1);
// $x1 = $point1->getAbscisse();
// $y1 = $point1->getOrdonne();

//affichage de ma méthode "Appartient"
echo $c1->Appartient($x1,$y1);


?>