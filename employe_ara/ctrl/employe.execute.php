<?php
include "../modele/employe.class.php";

// attribue valeur aux objets
$matricule = readline("Matricule: ");
$nom = readline("Nom: ");
$prenom = readline("Prénom: ");
$dateNaissance = readline("Date de naissance: ");
$dateEmbauche = readline("Date embauche: ");
$salaire = readline("Salaire: ");

// ce qui permet d'instancie l'objet avec les paramètres (parametre = les attribut)
$employe1 = new Employe($matricule, $nom, $prenom, $dateNaissance, $dateEmbauche, $salaire);



//affichage du résultat des 2 méthodes : augementation du salaire et afficher employe
echo "Après application de l'augmentation de salaire ";
$employe1->augmentationDusalaire();
$employe1->afficherEmployer();

?>