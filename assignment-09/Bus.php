<?php

class Bus {
	public $armBus = false;
	public $explodeBus = false;
	// wanted to keep track of Bus's speed:
	public $curBusSpeed = 0;


	function setBusSpeed($speed){		
		$this->curBusSpeed = $speed;

		if($speed>50){
			$this->armBus = true;
			echo "	Bus is now armed as...</br>";
		}
		
		if($speed>75){
			echo "	What do you mean there is no bridge?</br>";
		}
		
		if($speed<50 && $this->armBus == true){
			$this->explodeBus = true;
			echo "	KABOOM, but wait...</br>";
		}
	}
	
	function getBusSpeed() {
		return $this->curBusSpeed;
	}

	function triggerExplosive() {
		$this->explodeBus = true;
		echo "</br></br>	KABOOM";
	}
}

?>