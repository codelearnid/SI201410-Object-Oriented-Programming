<?php

class kendaraan{
    public $jenis = "Motor";
    public $merek = "Honda";

    public function info(){
        return "Jenis kendaraan yang diambil...";
    }
}

$mobil = new kendaraan();
echo $mobil->jenis = "mobil";
echo $mobil->merek = "toyota";


?>