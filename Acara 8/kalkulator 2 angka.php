<?php 
class nggitung{
    public $hasiltambah;
    private $hasilkurang;
    var $hasilbagi;
    var $hasilkalih;
    public $angka1;
    public $angka2;
    function setangka($poll,$plis){
        $this->angka1 = $poll;
        $this->angka2 = $plis;
    }
    function getangka(){
        return $this->hasiltambah;
    }
    
    function tambah(){
       $this->hasiltambah = $this->angka1 + $this->angka2;
    //    echo $hasil;
       return $this->hasiltambah;
    }
    function kurang(){
       $this->hasilkurang = $this->angka1 - $this->angka2;
        return $this->hasilkurang;
    }
    function bagi(){
        $this->hasilbagi = $this->angka1 / $this->angka2;
        return $this->hasilbagi;
    }
    function kalih(){
        $this->hasilkalih = $this->angka1 * $this->angka2;
        return $this->hasilkalih;
    }
}