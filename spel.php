<?php
/*
1. Lägg till en instansvariabel (egenskap) till konstruktorn
2. Skapa get och set-metoder
 */
class Spel
{

    private $spelNamn;
    public function __construct($spelNamn)
    {

        $this->spelNamn   = $spelNamn;
    }

    public function showSpel(){
        echo "Spel moves (in Parent Class)";
    }

    public function getspelnamn()
    {
        return $this->spelNamn;
    }
    public function setspelNamn($spelNamn)
    {
        $this->spelNamn = $spelNamn;
    }
}
?>
