<?php

class motor{

    public $pemilik_this1="Andi";
    public $pemilik_this2="Budi";
    public $warna_motor_andi="Warna Merah";
    public $warna_motor_budi="Warna Hitam";

    public function hidupkan_motor_this(){
        return "$this->pemilik_this1 Menghidupkan Motor";
    }
    public function matikan_motor_this(){
        return " dan $this->pemilik_this2 Mematikan Motor";
    }
    public function warna_andi_this(){
        return "$this->pemilik_this1 $this->warna_motor_andi";
    }
    public function warna_budi_this(){
        return "$this->pemilik_this2 $this->warna_motor_budi";
    }

}
$tes_motor_Andi = new motor();
$tes_motor_Budi = new motor();
// mencetak warna motor this
echo "Motor ", $tes_motor_Andi->warna_andi_this();
echo " dan Motor ", $tes_motor_Budi->warna_budi_this();
echo "<br>";
// mencetak hidup/matikan motor
echo $tes_motor_Andi->hidupkan_motor_this();
echo $tes_motor_Budi->matikan_motor_this();







?>