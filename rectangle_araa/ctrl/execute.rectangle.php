<?php

include("../modele/class.rectangle.php");

$rectangle1 = new Rectangle(3 , 4);
echo " ".$rectangle1->afficherRectangle();

$rectangle2 = new Rectangle(5 , 5);
echo " ".$rectangle2->afficherRectangle();
?>