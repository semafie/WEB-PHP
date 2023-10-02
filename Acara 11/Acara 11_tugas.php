<?php
interface luastigabangun{
    public function HitungLuasPersegi();
    public function HitungLuasSegitiga();
    public function HitungLuasLingkaran();
}

class Hitungluaspersegi implements luastigabangun{
    public $Hasilluas;
    public $sisi;
    function setbesarsisi($sisi){
        $this->sisi = $sisi;
    }
    public function HitungLuasPersegi(){
        $this->Hasilluas = $this->sisi*$this->sisi;
        return $this-> Hasilluas;
    }
    
    public function HitungLuasSegitiga(){
        
    }
    public function HitungLuasLingkaran(){
        
    }
}
class HitungluasSegitiga implements luastigabangun{
    public $Hasilluas;
    public $alas;
    public $tinggi;
    function setpanjangat($alas,$tinggi){
        $this->alas =$alas;
        $this->tinggi =$tinggi;
    }
    public function HitungLuasPersegi(){
        
    }
    public function HitungLuasSegitiga(){
        $this->Hasilluas = 0.5*$this->alas*$this->tinggi;
        return $this->Hasilluas;
    }
    public function HitungLuasLingkaran(){
        
    }
}
class HitungluasLingkaran implements luastigabangun{
    public $Hasilluas;
    public $ruas;
    function setpanjangruas($ruas){
        $this->ruas =$ruas;
    }
    public function HitungLuasPersegi(){
        
    }
    public function HitungLuasSegitiga(){
        
    }
    public function HitungLuasLingkaran(){
        $this->Hasilluas=3.14*$this->ruas*$this->ruas;
        return $this->Hasilluas;
    }
}
$debby = new HitungluasPersegi();
$debby->setbesarsisi(20);
echo $debby->HitungLuasPersegi()."<br>";
$debby1 = new HitungluasSegitiga();
$debby1->setpanjangat(20,40);
echo $debby1->HitungLuasSegitiga()."<br>";
$debby2 = new HitungluasLingkaran();
$debby2->setpanjangruas(100);
echo $debby2->HitungLuasLingkaran();