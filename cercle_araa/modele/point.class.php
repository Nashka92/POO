<?php

//création de la class avec pour objet point
class Point{
    private $abscisse;
    private $ordonne;

//constructeur par défaut et initialisation dans les paramètres
    public function __construct($x, $y ) {
    $this->abscisse = $x;
    $this->ordonne = $y;
}

//méthode norme (on créer une fonction appelé norme , return float)
    public function norme(){
    
    return sqrt(($this->abscisse * $this->abscisse) + ($this->ordonne * $this->ordonne));
    
}

 

    /**
     * Get the value of abscisse
     */ 
    public function getAbscisse()
    {
        return $this->abscisse;
    }

    /**
     * Set the value of abscisse
     *
     * @return  self
     */ 
    public function setAbscisse($abscisse)
    {
        $this->abscisse = $abscisse;

        return $this;
    }

    /**
     * Get the value of ordonne
     */ 
    public function getOrdonne()
    {
        return $this->ordonne;
    }

    /**
     * Set the value of ordonne
     *
     * @return  self
     */ 
    public function setOrdonne($ordonne)
    {
        $this->ordonne = $ordonne;

        return $this;
    }
}



?>



