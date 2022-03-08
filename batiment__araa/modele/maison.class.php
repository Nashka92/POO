<?php

class Maison extends Batiment{
    
    private Int $nbPieces;

    
    public function __construct($adresse,$superficie,$nbPieces)
    {  
        parent:: __construct($adresse,$superficie);
        $this->nbPieces = $nbPieces;
        
    }

    public function __toString()
    {

        return parent::__toString()." son nombre de pièce est ".$this->nbPieces;
  
    }
    
    /**
     * Get the value of nbPieces
     */ 
    public function getNbPieces()
    {
        return $this->nbPieces;
    }

    /**
     * Set the value of nbPieces
     *
     * @return  self
     */ 
    public function setNbPieces($nbPieces)
    {
        $this->nbPieces = $nbPieces;

        return $this;
    }
   
}
?>