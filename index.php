<?php

require_once 'Hewan.php';
require_once 'Fight.php';
require_once 'Elang.php';
require_once 'Harimau.php';

$instance_elang1 = new Elang('elang_1');
echo $instance_elang1->atraksi(). '<br><br>';

$instance_harimau1 = new Harimau('harimau_1');
echo $instance_harimau1->atraksi(). '<br><br>';

echo $instance_elang1->serang($instance_elang1->nama, 
    $instance_harimau1->nama) . '<br><br>';
    
echo $instance_harimau1->diserang($instance_harimau1->nama, 
    $instance_elang1->nama, $instance_harimau1->darah, 
    $instance_elang1->attackPower, $instance_harimau1->defencePower) . '<br><br>';
  
echo $instance_harimau1->serang($instance_harimau1->nama, 
    $instance_elang1->nama) . '<br><br>';

echo $instance_elang1->diserang($instance_elang1->nama, 
    $instance_harimau1->nama, $instance_elang1->darah, 
    $instance_harimau1->attackPower, $instance_elang1->defencePower) . '<br><br>';

// Contoh yg darahnya dinamis
// echo $instance_harimau1->impactSerangan($instance_harimau1->nama, 
//     $instance_elang1->nama, $instance_harimau1->darah, 
//     $instance_elang1->attackPower, $instance_harimau1->defencePower) . '<br><br>';
  
// echo $instance_harimau1->serang($instance_harimau1->nama, 
//     $instance_elang1->nama) . '<br><br>';

// echo $instance_elang1->impactSerangan($instance_elang1->nama, 
//     $instance_harimau1->nama, $instance_elang1->darah, 
//     $instance_harimau1->attackPower, $instance_elang1->defencePower) . '<br><br>';

// echo $instance_harimau1->serang($instance_harimau1->nama, 
//     $instance_elang1->nama) . '<br><br>';

// echo $instance_elang1->impactSerangan($instance_elang1->nama, 
//     $instance_harimau1->nama, $instance_elang1->darah, 
//     $instance_harimau1->attackPower, $instance_elang1->defencePower) . '<br><br>';

// echo $instance_harimau1->serang($instance_harimau1->nama, 
//     $instance_elang1->nama) . '<br><br>';

// echo $instance_elang1->impactSerangan($instance_elang1->nama, 
//     $instance_harimau1->nama, $instance_elang1->darah, 
//     $instance_harimau1->attackPower, $instance_elang1->defencePower) . '<br><br>';

echo $instance_elang1->getInfoHewan() . '<br><br>';

echo $instance_harimau1->getInfoHewan() . '<br><br>';
?>