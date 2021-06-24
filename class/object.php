<?php
/*
class Car
{
    function demarr()
    {
        echo "la voiture demare\n";
    }
}
$car = new Car();
$car->demarr();
*/

class Car
{
    public $vitess;
    public function __construct()
    {
        $this->vitess = 0;
    }
    public function demarr()
    {
        echo "la voiture demare<br>\n";
        return $this;
    }
    public function getVitesse()
    {
        echo "Vitesse de la voiture : $this->vitess\n";
        return $this;
    }
    public function accelere($vitess)
    {
        $this->vitess = $vitess;
        return $this;
    }
}
$car = new Car();
$car
    ->demarr()
    ->getVitesse()
    ->accelere(50);