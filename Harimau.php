<?php 

class Harimau {
    // memanggil trait
    use Hewan;
    use Fight;

    // konstruktor
    public function __construct($nama){
        $this->nama = $nama;
        $this->jumlahKaki = 4;
        $this->keahlian = 'lari cepat';
        $this->attackPower = 7;
        $this->defencePower = 8;
    }
    
    // method
    public function getInfoHewan(){
        echo 'Jenis Hewan : Harimau <br>';
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