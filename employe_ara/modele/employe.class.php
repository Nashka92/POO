<?php
//création de ma class avec pour objet Employé et ses attributs
// getter et setters car c'est en private
class Employe
{

    private int $matricule;
    private string $nom;
    private string $prenom;
    private string $dateNaissance;
    private string $dateEmbauche;
    private float $salaire;


    //initialisation de mon constructeur, je met en paramètre les 6 attributs et je vais les 
    //initialisé
    public function __construct($matricule, $nom, $prenom, $dateNaissance, $dateEmbauche, $salaire)
    {

        $this->matricule = $matricule;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->dateEmbauche = $dateEmbauche;
        $this->salaire = $salaire;
    }
    //1 -- méthode qui renvoit age

    public function age(): int

    //ca permet de séparer les differentes valeurs de la date afin d'être le plus précis possible
    //lorsqu'on va executer le programme (exemple les mois et les jours seront pris en compte)


    {
        $date = DateTime::createFromFormat('d/m/Y', $this->dateNaissance);
        $naissance = date_parse($date->format("m/d/Y"));
        $actuel = date_parse(date("m/d/y"));
        $age = ($actuel['year'] - $naissance['year']);

        if ($actuel['month'] < $naissance['month']) {

            $age -= 1;
            return $age;
        }
        if ($actuel['month'] === $naissance['month']) {

            if ($actuel['day'] < $naissance['day']) {
                $age -= 1;
                return $age;
            } else {
                return $age;
            }
        } else {
            return $age;
        };;
    }


    //2 -- méthode qui renvoit anciennete
    public function anciennete(): int
    {

        //ca permet de séparer les differentes valeurs de la date afin d'être le plus précis possible
        //lorsqu'on va executer le programme (exemple les mois et les jours seront pris en compte)

        $date = DateTime::createFromFormat('d/m/Y', $this->dateEmbauche);
        $embauche = date_parse($date->format("m/d/Y"));
        $actuel = date_parse(date("m/d/y"));
        $anciennete = ($actuel['year'] - $embauche['year']);

        if ($actuel['month'] < $embauche['month']) {

            $anciennete -= 1;
            return $anciennete;
        }
        if ($actuel['month'] === $embauche['month']) {

            if ($actuel['day'] < $embauche['day']) {
                $anciennete -= 1;
                return $anciennete;
            } else {
                return $anciennete;
            }
        } else {
            return $anciennete;
        };
    }

    //3 -- méthode qui renvoit augmentationDuSalaire avec condition (swich)
    public function augmentationDusalaire(): void
    {

        switch ($this->salaire) {
            case $this->anciennete() < 5;
                $this->salaire = $this->salaire * 1.02;
                break;

            case $this->anciennete() < 10;
                $this->salaire = $this->salaire * 1.05;
                break;


            default:
                $this->salaire = $this->salaire * 1.10;
                break;
        }
    }

    //4 -- méthode afficherEmploye
    //affichage de l'employé avec concaténation, utiliser le ucfirst pour faire majuscule et touppercase 
    //pour afficher nom en capital
    public function afficherEmployer(): void
    {

        echo "matricule: " . $this->matricule . "\n";
        echo "Nom complet: " . strtoupper($this->nom) . " " . ucfirst($this->prenom) . "\n";
        echo "Age: " . $this->age() . "\n";
        echo "Ancienneté: " . $this->anciennete() . "\n";
        echo "Salaire: " . $this->salaire . "\n";
    }


    /**
     * Get the value of salaire
     */
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set the value of salaire
     *
     * @return  self
     */
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }

    /**
     * Get the value of dateEmbauche
     */
    public function getDateEmbauche()
    {
        return $this->dateEmbauche;
    }

    /**
     * Set the value of dateEmbauche
     *
     * @return  self
     */
    public function setDateEmbauche($dateEmbauche)
    {
        $this->dateEmbauche = $dateEmbauche;

        return $this;
    }

    /**
     * Get the value of dateNaissance
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set the value of dateNaissance
     *
     * @return  self
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get the value of prenom
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of matricule
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }
}