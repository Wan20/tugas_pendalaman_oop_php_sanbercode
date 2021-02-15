<?php 

class Elang {
    // memanggil trait
    use Hewan;
    use Fight;

    // konstruktor
    public function __construct($nama){
        $this->nama = $nama;
        $this->jumlahKaki = 2;
        $this->keahlian = 'terbang tinggi';
        $this->attackPower = 10;
        $this->defencePower = 5;
    }

    // method
    public function getInfoHewan(){
        echo 'Jenis Hewan : Elang <br>';
        echo 'Nama : ' . $this->nama . '<br>';
        echo 'Darah : ' . $this->darah . '<br>';
        echo 'Jumlah Kaki : ' . $this->jumlahKaki . '<br>';
        echo 'Keahlian : ' . $this->keahlian . '<br>';
        echo 'Attack Power : ' . $this->attackPower . '<br>';
        echo 'Defence Power : ' . $this->defencePower . '<br>';
    }

    // Contoh yg darahnya dinamis
    // public function impactSerangan($hewan2, $hewan1, $darahSekarang, $attackPowerPenyerang, $defencePower){
    //     $this->impactBattle($darahSekarang, $attackPowerPenyerang, $defencePower);
    //     $this->diserang($hewan2, $hewan1, $this->darah);
    // }
}

?>