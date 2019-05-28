<?php
class Customer extends Gamer
{
    private $customerName;
    public function __construct($spelNamn, $spelKategoriId, $customerName)
    {
        $this->customername = $customerName;
        parent::__construct($spelNamn, $spelKategoriId);
    }

    // Overrides Parent Class
    public function move(){
        echo "Game adds by customername";
    }


    public function setcustomername($customerName)
    {
        $this->customername = $customerName;
    }
    public function getcustomername()
    {
        return $this->customername;
    }
}
?>
