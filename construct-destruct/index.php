<?php

class Car{
	//public private protected
	private $owner = 'default';

	// public function __construct(){
	// 	echo 'construct vacio';
	// }

	public function __construct($owner){
		$this->owner = $owner;
	}

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

$car = new Car("dani");
// $car->move();

// $car->setOwner("doni");

echo "el duenio es " . $car->getOwner();

?>