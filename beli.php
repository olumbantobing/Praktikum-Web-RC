<?php

include "index.html";

class buah{
    var $totalMangga, $totalJambu, $totalSalak;
   
    public function __construct($mangga, $jambu, $salak){
        $this->mangga = $mangga;
        $this->jambu = $jambu;
        $this->salak = $salak;
    }

    public function getMangga(){
        $this->totalMangga = $this->mangga * 15000;
        echo "<br>Mangga    @".$this->mangga; echo " x Rp 15000";
        echo "<br>Rp ".$this->totalMangga;
    }

    public function getJambu(){
        $this->totalJambu = $this->jambu * 13000;
        echo "<br>Jambu    @".$this->jambu; echo " x Rp 13000";
        echo "<br>Rp ".$this->totalJambu;
    }

    public function getSalak(){
        $this->totalSalak = $this->salak * 10000;
        echo "<br>Salak    @".$this->salak; echo " x Rp 10000";
        echo "<br>Rp ".$this->totalSalak;
    }

    public function total(){
        $total = $this->totalMangga + $this->totalJambu + $this->totalSalak;
        echo "<hr> Total berat: ";
        echo $this->mangga + $this->jambu + $this->salak; echo " kg";
        echo "<br><b>Total<b> = Rp ". $total;
    }
}

$mangga = $_POST["mangga"];
$jambu = $_POST["jambu"];
$salak = $_POST["salak"];
echo "<hr><b>INVOICE</b>";
$transaksi = new buah($mangga, $jambu, $salak);
$transaksi->getMangga();
$transaksi->getJambu();
$transaksi->getSalak();
$transaksi->total();
?>