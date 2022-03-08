<?php
include ("../modele/point.class.php");

//création de ma class Cercle
class Cercle {
    private $centre;
    private $rayon;
    


    //mon constructeur
    public function __construct($x,$y,$rayon)
    
    {
        
        $this->centre = new Point ($x,$y);
        $this->rayon = $rayon;
        
    }
    
    // retourne le périmètre du cercle
    public function getPerimetre()
    {
        return round(2 * pi() * $this->rayon,2); 
    }

    
    //retourne la surface du cercle, on arrondit le résultat a deux chiffres après la virgule
    public function getSurface() 
    {
        return round(pi() * $this->rayon **2,2);
    }

    //retourne si le point P  appartient ou non au cercle
    public function Appartient($pa,$po)
    {   //affichage 
        echo "POINT (".$pa.",".$po.")".PHP_EOL;
        return ($this->centre->getAbscisse() - $pa)**2 + ($this->centre->getOrdonne() - $po)**2 < $this->rayon **2 ? "le point appartient au cercle" : "le point n'appartient pas au cercle";
        
    }


    // affiche une chaîne de caractère de type CERCLE (x y R)
    public function Afficher()
    {

       echo ("cercle(".$this->centre->getAbscisse().",".$this->centre->getOrdonne().",".$this->rayon.")");

        
    }
    

    /**
     * Get the value of centre
     */ 
    public function getCentre()
    {
        return $this->centre;
    }

    /**
     * Set the value of centre
     *
     * @return  self
     */ 
    public function setCentre($centre)
    {
        $this->centre = $centre;

        return $this;
    }

    /**
     * Get the value of rayon
     */ 
    public function getRayon()
    {
        return $this->rayon;
    }

    /**
     * Set the value of rayon
     *
     * @return  self
     */ 
    public function setRayon($rayon)
    {
        $this->rayon = $rayon;

        return $this;
    }
};
?>