<?php
include("../modele/class.article.php");
//article 1
$article1 = new Article ($designation,$reference, $prixHt);
$article1->afficherArticle();

//article 2
$reference = readline("donnez la référence de l'article 2: ");
$prixHt = (int) readline("donnez le prix HT: ");
$designation = readline("donnez la désignation: ");
$article2 = new Article ($designation,$reference ,$prixHt);
$article2->afficherArticle();

//article 3
$reference = readline("donnez la référence de l'article 3: ");
$prixHt = (int) readline("donnez le prix HT: ");
$designation = readline("donnez la désignation : ");
$article3 = new Article ($designation,$reference ,$prixHt);
$article3->afficherArticle();

//article 4
$reference = 111;
$designation = "caca";
$article4 = new Article ($designation,$reference, $prixHt);
$article4->afficherArticle();



            

?>