
<?php 

class Person {
	public $name;
	public $address;
	public $phoneNumber;
	public $emailAddress;

	function setName($newName){

		$this->name = $newName;
 
	}

	public function getName() {

		return $this->name;
	}

}


class Student extends Person {

	function getName() {

		echo $this->name . get_class($this);
	}

}

class Employee extends Person {

	public $office;
	public $salary;
	public $dateHired;

	public function getName() {

		echo $this->name . get_class($this);
	}
}

class Staff extends Employee {

	public $title;
}

class Faculty extends Employee {

	public $officeHours;
	public $rank;
}

class MyDate {

	public $year;
	public $month;
	public $day;
}
?>