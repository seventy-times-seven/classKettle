<?php
class Kettle {
    private $power=0;
    private $volume=0;
    private $isOpenLid=false;
    private $currentVolume=0;
    private $startTemperature=0;

    public function __construct ($p,$v)
    {
        $this->power=$p;
        $this->volume=$v;
    }
    public function openLid()
    {
        $this->isOpenLid=true;
    }
    public function closeLid()
    {
        $this->isOpenLid=false;
    }
    public function pourWater($n,$temperature)
    {
        if ($n>$this->volume)
        return false;
        else $this->currentVolume+=$n;
        
        $this->startTemperature=$temperature;
    }
    public function boilWater()
    {
        if ($this->isOpenLid==true)
        {
            echo "The lid is open";
            return;
        }
        for ($i=$this->startTemperature; $i<101; $i+=10)
        echo "Water temperature"." ".$i." degrees"."<br>";
    }
}
$k1 = new Kettle(1000,1500);
$k2 = new Kettle(1100,1600);
$k1->openLid();
$k1->pourWater(1000, 20);
$k1->closeLid();
$k1->boilWater();