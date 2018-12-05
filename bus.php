<?php
abstract class Autobus
{
public function move(){
return 'Autobuzul Porneste';
    }
public function rotateLeft(){
return 'Viram La Stinga';
    }
public function rotateRight(){
return 'viram La Dreapta';
    }
public function stop(){
return 'Oprire Autobus';
    }

}


class Car extends Autobus {

public $name = 'Autobuzul';

public function start()
    {
return $this->name.' '. 'Start Ruta';
    }
public function stop()
    {
return $this->name.' '. 'Stop Ruta';
    }
public function move($x)
    {
return $this->name .' '.$x;
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


$car = new Car();
echo $car->start();
?><hr><?
echo $car->move('merge spre oprirea nr 1');
?><hr><?
echo $car->move('stopeaza la oprirea nr 1');
?><hr><?
echo $car->move('porneste la oprirea nr 2');
?><hr><?
echo $car->move('stopeaza la oprirea nr 2');
?><hr><?
echo $car->move('porneste la oprirea nr 3');
?><hr><?
echo $car->move('stopeaza la oprirea nr 3');
?><hr><?
echo $car->move('porneste la oprirea nr 4');
?><hr><?
echo $car->move('Stopeaza la oprirea nr 4');
?><hr><?
echo $car->move('porneste la oprirea nr 5');
?><hr><?
echo $car->move('Stopeaza la oprirea nr 5');
?><hr><?
echo $car->stop();
