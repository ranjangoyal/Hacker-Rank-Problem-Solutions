<?php

class Person{

	public $age;

	public function __construct($initialAge){
		
		if($initialAge < 0){
			echo "Age is not valid, setting age to 0.\n";
			$this->age = 0;

		}else{
			$this->age = $initialAge;

		}

	}//constructor

	public function yearPasses(){
	
		$this->age = $this->age+1;

	}//yearPasses

	public function amIOld(){
	

		if($this->age < 13){
			echo "You are young.";

		}elseif($this->age >= 13 && $this->age < 18){
			echo "You are a teenager.";

		}else{
			echo "You are old.";

		}
		
		echo "\n";

	}//amIOld


}//End of class Person