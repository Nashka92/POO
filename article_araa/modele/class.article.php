<?php
class Article {private $reference;
    const TVA = 20;
    private $designation;
    private $prixHt;
    

    public function __construct($reference=0 ,$designation="",$prixHt=0){
        $this-> reference = $reference;
        $this-> designation = $designation;
        $this-> prixHt = $prixHt;
        
    }

    public function calculerPrixTtc(){
        return $this ->prixHt + ($this->prixHt * Article::TVA/100);
            
    }

    public function afficherArticle(){
        print "la référence est".$this->reference;
        echo "\n";
        print "la designation est".$this->designation;
        echo "\n";
        print "le prix hors taxe est".$this->prixHt;
        echo "\n";
        print "le prix TTC est: ".$this->calculerPrixTtc();
    }



/**
 * Get the value of prixHt
 */ 
public function getPrixHt()
{
return $this->prixHt;
}

/**
 * Set the value of prixHt
 *
 * @return  self
 */ 
public function setPrixHt($prixHt)
{
$this->prixHt = $prixHt;

return $this;
}

/**
 * Get the value of designation
 */ 
public function getDesignation()
{
return $this->designation;
}

/**
 * Set the value of designation
 *
 * @return  self
 */ 
public function setDesignation($designation)
{
$this->designation = $designation;

return $this;
}

/**
 * Get the value of reference
 */ 
public function getReference()
{
return $this->reference;
}

/**
 * Set the value of reference
 *
 * @return  self
 */ 
public function setReference($reference)
{
$this->reference = $reference;

return $this;
}
}


?>