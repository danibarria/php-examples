<?php

class Car{
	//public private protected
	private $owner = 'default';

	public function move(){
		echo 'moving<br>'; 
	}

	public function getOwner(){
		return $this->owner;
	}

	public function setOwner($owner){
		$this->owner = $owner;
	}

}

$car = new Car();
$car->move();

$car->setOwner("doni");

echo "el duenio es" . $car->getOwner();

?>