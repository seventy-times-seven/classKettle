<?php
class People {
    private $name='';
    private $age=0;
    private $dept='';

    public function getName()
    {
        return $this->name;
    }
    public function setName($n)
    {
        $this->name=$n;
    }
}
$p1 = new People;
$p1->SetName("John");
// $p1->name = "John";
// $p2 = new People;
// $p2->age = 25;
// $p1->dept = "HR";
// var_dump($p1);
echo $p1->getName();