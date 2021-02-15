<?php

trait Hewan {
    // properti
    public $nama;
    public $darah = 50;
    protected $jumlahKaki;
    protected $keahlian;

    // method
    public function atraksi(){
        echo $this->nama . ' sedang ' . $this->keahlian;
    }

    // perhitungan impact battle - additional
    // public function impactBattle($darahSekarang, $attackPowerPenyerang, $defencePower){
    //     $this->darah = ($darahSekarang - $attackPowerPenyerang / $defencePower);
    // }
}

?>