<?php

include ("../modele/point.class.php");

//Donner l'abscisse: 1

//Donner l'ordonne: 2

//La norme du point (1,2) est: 2,23606797749979


//instanciation / création de l'objet en mémoire
//c'est dans l'execute qu'on va alimenter les attributs
$point1 = new Point(1,2);

echo "la norme est : ".$point1->norme();



?>