<?php
class Gamer extends Spel
{

    private $spelKategoriId;
    public function __construct($spelNamn, $spelKategoriId)
    {

        $this->spelkategoriId = $spelKategoriId;
        parent::__construct($spelNamn);
    }

    // Overrides Parent Class
    public function showSpel(){
        echo "Game belongs to spelKategoriid";
    }

    public function setspelKategori($spelKategoriId)
    {
        $this->spelKategoriid = $spelKategoriId;
    }
    public function getspelKategoriId()
    {
        return $this->spelKategoriId;
    }
}
?>
