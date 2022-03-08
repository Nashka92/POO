<?php
//Inutile d'inclure la classe Personne étant donnée qu'elle est déjà appelé dans les classes enfants(et le petit enfant)
include "../modele/personne.class.php";
 include "../modele/etudiant.class.php";
 include "../modele/employe.class.php";
 include "../modele/professeur.class.php";

 //affichage des deux employés dans le terminal
 //note : l'écho se fait ici car avec la méthode magique __toString 
 //on va faire l'écho de l'objet et il retournera une chaine de caractère
 echo "La liste des employes :"."\n";
 $employe1 = new Employe (10000.0,"DOUK", "Rachid");
 $employe2 = new Employe (10000.0,"NGOYE", "Roland");
 echo $employe1."\n";
 echo $employe2."\n";
 echo "\n";
 
 //affichage des deux étudiants dans le terminal
 echo "La liste des étudiants :"."\n";
 $etudiant1 = new Etudiant ("65678754","OBAKA","Med");
 $etudiant2 = new Etudiant ("87543543","ALSENY","Thomas");
 echo $etudiant1."\n";
 echo $etudiant2."\n";
 echo "\n";

 //affichage des deux professeurs dans le terminal
 echo "La liste des professeurs :"."\n";
 $prof1 = new Professeur("JAVA/JEE",5700.0,"OBA","Kevin");
 $prof2 = new Professeur("PHP",5000.0,"MAGASSOUBA","Cheick");
 echo $prof1."\n";
 echo $prof2."\n";