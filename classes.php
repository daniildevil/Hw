<?php
class Direction{
	public $price, $variation;
	function get_info(){
		return $this->variation .PHP_EOL. $this->price . "\n";
	}
}
class Courses extends Direction{
	public $name ,$duration;
	function set_cours(){
		 $this->name;
		 $this->duration;
	}
	function get_cours(){
		return $this->name ? $this->name . "\n" :  " unknown cours" . "\n";
	}
	function get_duration(){
		return $this->duration ? $this->duration . "\n" :  " eror :(" . "\n";
	}
	function get_info(){
		return parent::get_info(). "name: ". $this->get_cours() ."duration:".$this->get_duration() . "\n";
	}
}
$direction = new Direction();
$direction->variation ="back_end";
$direction->price = "150$";
echo $direction->get_info();
$cours = new Courses();
$cours->name ="PHP Advsnced";
$cours->duration ="6 month";
echo $cours->get_info();
