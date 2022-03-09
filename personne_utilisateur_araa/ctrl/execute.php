<?php
include "../modele/personne.class.php";
include "../modele/profil.class.php";
include "../modele/utilisateur.class.php";

//création des 5 profils
$chefProjet = new Profil ("CP","Chef de projet");
$manager = new Profil ("MN","Manager");
$directeurDeProjet = new Profil ("DP","Directeur de projet");
$drh = new Profil ("DRH","Directeur des ressources humaines");
$directeurGeneral = new Profil ("DG","Directeur général");

//Creation des utilisateur (je vais en faire 5)
echo "LA LISTE DES UTILISATEURS :"."\n";
$user1 = new Utilisateur ("RAACH","Anna","anna@gmail.com","0102030405",15000,"anna_r","12345","informatique",$manager);
$user2 = new Utilisateur ("MICHEL","Jacquie","jacquie@gmail.com","0102030405",17580,"jacquie_m","12345","communication",$chefProjet);
$user3 = new Utilisateur ("PLANCKE","Kyllian","kikidu59@hotmail.com","0102030405",101,"kiki_p","48568","commerce",$directeurDeProjet);
$user4 = new Utilisateur ("WOGNIN","Gery","blackdiamond59@hotmail.com","0102030405",155000,"gery_w","00000","culturelle",$drh);
$user5 = new Utilisateur ("CADARD","Valentin","allezlensois62@hotmail.com","0102030405",70000,"val_c","kekelens62","informatique",$directeurGeneral);



//faire un tableau pour parcourir chaque users
$listUser = [$user1,$user2,$user3,$user4,$user5];

foreach ($listUser as $element) {
    $element->affiche();
}

echo "**************************"."\n";

// Filtrer la liste et afficher la liste des manager
echo "LA LISTE DES MANAGERS"."\n";

//création d'un tableau pour parcourir chaque user et faire une condition
//si le libelle et "manager" alors afficher le user qui contient le libelle "Manager"
foreach ($listUser as $element) {
    if ($element->getProfil()->getLibelle() === "Manager") {
        $element->affiche();
    }
}

?>