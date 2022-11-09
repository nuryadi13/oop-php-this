<?php
    // membuat class oop
    class motor{
        // deklarasi variable
        public $pemilik;
        public $warna;
        // membuat method
        public function hidupkan_motor(){
            return "Menghidupkan Motor ";
        }
        public function matikan_motor(){
            return "Mematikan Motor ";
        }
    }
    // membuat objek
    $motor_Andi = new motor();
    $motor_Budi = new motor();
    // set objek
    $motor_Andi->pemilik="Andi ";
    $motor_Andi->warna=" Warna merah ";
    $motor_Budi->pemilik="Budi ";
    $motor_Budi->warna=" Warna hitam ";

    // mencetak warna motor
    echo"Motor ", $motor_Andi->pemilik;
    echo $motor_Andi->warna;
    echo " dan Motor ", $motor_Budi->pemilik;
    echo $motor_Budi->warna;
    echo "<br>";
    // mencetak hidup/matikan motor
    echo $motor_Andi->pemilik;
    echo $motor_Andi->hidupkan_motor();
    echo "dan ", $motor_Budi->pemilik;
    echo $motor_Budi->matikan_motor();

 
?>