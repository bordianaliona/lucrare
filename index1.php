<?php
abstract class Transport
{
    public function move(){
        return 'Merge Inainte';
    }
    public function rotateLeft(){
        return 'vireaza  La Stinga';
    }
    public function rotateRight(){
        return 'vireaza La Dreapta';
    }
    public function distance($x){
        return $x ;
    }

}


class Automobil extends Transport {

    public $name = 'Dacia Logan';
    public function start()
    {
        return $this->name.' '. 'Starteaza';
    }
    public function stop()
    {
        return $this->name.' '. 'Stop';
    }
    public function move()
    {
        return $this->name . ' ' . parent::move() .' '.parent::distance(45);
    }
    public function moveOan()
    {
        return $this->name . ' ' . parent::move() .' '.parent::distance(25);
    }
    public function moveTwo()
    {
        return $this->name . ' ' . parent::move() .' '.parent::distance(35);
    }
    public function moveThree()
    {
        return $this->name . ' ' . parent::move() .' '.parent::distance(39);
    }
    public function moveFour()
    {
        return $this->name . ' ' . parent::move() .' '.parent::distance(70);
    }
    public function moveFive()
    {
        return $this->name . ' ' . parent::move() .' '.parent::distance(20);
    }
    public function moveSix()
    {
        return $this->name . ' ' . parent::move() .' '.parent::distance(50);
    }
    public function rotateRight()
    {
        return $this->name . ' ' . parent::rotateRight();
    }
    public function rotateLeft()
    {
        return $this->name . ' ' . parent::rotateLeft();
    }

}


$Automobil = new Automobil();
echo $Automobil->start();
?><hr><?
echo $Automobil->moveFive();
?><hr><?
echo $Automobil->rotateRight();
?><hr><?
echo $Automobil->move();
?><hr><?
echo $Automobil->rotateLeft();
?><hr><?
echo $Automobil->moveOan();
?><hr><?
echo $Automobil->rotateRight();
?><hr><?
echo $Automobil->moveTwo();
?><hr><?
echo $Automobil->rotateRight();
?><hr><?
echo $Automobil->moveThree();
?><hr><?
echo $Automobil->rotateRight();
?><hr><?
echo $Automobil->rotateLeft();
?><hr><?
echo $Automobil->moveThree();
?><hr><?
echo $Automobil->rotateLeft();
?><hr><?
echo $Automobil->moveFour();
?><hr><?
echo $Automobil->rotateLeft();
?><hr><?
echo $Automobil->moveFour();
?><hr><?
echo $Automobil->rotateLeft();
?><hr><?
echo $Automobil->moveTwo();
?><hr><?
echo $Automobil->rotateLeft();
?><hr><?
echo $Automobil->moveOan();
?><hr><?
echo $Automobil->rotateRight();
?><hr><?
echo $Automobil->moveFive();
?><hr><?
echo $Automobil->rotateLeft();
?><hr><?
echo $Automobil->moveSix();
?><hr><?
echo $Automobil->stop();