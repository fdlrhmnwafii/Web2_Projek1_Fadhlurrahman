<?php
class PersegiPanjang{
    public $panjang;
    public $lebar;

    function __construct($panjang, $lebar){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    function keliling(){
        return 2*$this->panjang + 2*$this->lebar;
    }

    function luas(){
        return $this->panjang * $this->lebar;
    }
}

?>
