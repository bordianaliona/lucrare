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
    
    }




class Autobus extends Transport {

    public $name = 'BUS';
    public function start()
    {
        return $this->name.' '. 'Starteaza';
    }
    public function stop()
    {
        return $this->name.' '. 'Stop';
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


$Autobus = new Autobus();
echo $Autobus->start();
?><hr><?
echo $Autobus->stop();
?><hr><?
echo $Autobus->opendoor();
?><hr><?
echo $Autobus->stop();