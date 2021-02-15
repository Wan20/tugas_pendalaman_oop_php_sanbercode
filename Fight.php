<?php

trait Fight {
    // properti
    public $attackPower;
    public $defencePower;
    
    // method
    public function serang($hewan1, $hewan2){
        echo $hewan1 . ' sedang menyerang ' . $hewan2;
    }
    
    public function diserang($hewan2, $hewan1, $darahSekarang, $attackPowerPenyerang, $defencePower){
        echo $hewan2 . ' sedang diserang ' . $hewan1 .
            ', kemudian hewan yang diserang akan berkurang darahnya ' .
            ($darahSekarang - $attackPowerPenyerang / $defencePower);
    }

    // Darah Hewan berkurang seperti game - additional
    // public function diserang($hewan2, $hewan1, $darah){
    //     echo $hewan2 . ' sedang diserang ' . $hewan1 .
    //         ', kemudian hewan yang diserang akan berkurang darahnya ' . $darah;
    // }
}

?>