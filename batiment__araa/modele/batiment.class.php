<?php
class Batiment {

    protected String $adresse;
    protected Float $superficie;

    //initialitation du construct , on instancie
    public function __construct($adresse,$superficie)
    {
        $this->adresse = $adresse;
        $this->superficie = $superficie;
        
    }

    public function __toString(){

        return "l'adresse est ".$this->adresse." "."sa superficie est ".$this->superficie."km²";
       
    }

}
?>