<?php
abstract class Autobus
{
    public function driver(){
        return 'Lupescu Vasile';
    }
    public function MaximumNumberOfPassengers(){
        return 'Numarul Maxim de pasageri este';
    }
    public function move(){
        return 'Autobuzul Porneste';
    }
    public function rotateLeft(){
        return 'Face La Stinga';
    }
    public function rotateRight(){
        return 'Face La Dreapta';
    }
    public function stop(){
        return 'Oprire Autobus';
    }
    public function fuel(){
        return 'Combustibil';
    }
    public function distance(){
        return 'parcurge distanta de';
    }
}


class Car extends Autobus {

    public $name = 'Autobuzul';

    public function driver()
    {
        return 'Va deserveste'. ' ' .parent::driver();
    }
    public function distance($z)
    {
        return $this->name . ' ' . parent::distance() .' '.$z;
    }

    public function fuel($y)
    {
        return parent::fuel().' '. 'in rezervor %'.''.$y;
    }
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
echo $car->driver();
?><hr><?
echo $car->fuel(100);
?><hr><?
echo $car->move('merge spre oporirea nr 1');
?><hr><?
echo $car->rotateRight();
?><hr><?
echo $car->rotateRight();
?><hr><?
echo $car->distance(50);
?><hr><?
echo $car->rotateLeft();
?><hr><?
echo $car->distance(15);
?><hr><?
echo $car->move('stopeaza la oporirea nr 1');
?><hr><?
echo $car->move('porneste la oporirea nr 2');
?><hr><?
echo $car->fuel(90);
?><hr><?
echo $car->distance(100);
?><hr><?
echo $car->move('stopeaza la oporirea nr 2');
?><hr><?
echo $car->move('porneste la oporirea nr 3');
?><hr><?
echo $car->fuel(77);
?><hr><?
echo $car->distance(30);
?><hr><?
echo $car->rotateLeft();
?><hr><?
echo $car->distance(25);
?><hr><?
echo $car->move('stopeaza la oporirea nr 3');
?><hr><?
echo $car->move('porneste la oporirea nr 4');
?><hr><?
echo $car->fuel(60);
?><hr><?
echo $car->distance(10);
?><hr><?
echo $car->rotateLeft();
?><hr><?
echo $car->distance(15);
?><hr><?
echo $car->rotateRight();
?><hr><?
echo $car->distance(10);
?><hr><?
echo $car->rotateLeft();
?><hr><?
echo $car->distance(13);
?><hr><?
echo $car->move('Stopeaza la oporirea nr 4');
?><hr><?
echo $car->move('porneste la oporirea nr 5');
?><hr><?
echo $car->fuel(40);
?><hr><?
echo $car->distance(100);
?><hr><?
echo $car->move('Stopeaza la oporirea nr 5');
?><hr><?
echo $car->fuel(30);
?><hr><?
echo $car->distance(50);
?><hr><?
echo $car->stop();
?><hr><?
echo $car->fuel(20);
?><hr><?