<?php

class Lunch
{
	private $day;
	private $food_list;
	private static $instance;
	
	private function __construct()
	{
		$connection = mysqli_connect('localhost','root','','kindersmart');
		$date = new DateTime("tomorrow");
		$day = strtolower($date->format("l"));
		$this->day = $day;
		$query = "SELECT {$day} FROM lunch ORDER BY week_no DESC LIMIT 1";
		$result = mysqli_query($connection,$query);
		$array = mysqli_fetch_assoc($result);
		$this->food_list = explode("|", $array["{$day}"]);
		mysqli_close($connection);
	}

	public function getFoodList(){
		return $this->food_list;
	}

	public function getDay(){
		return $this->day;
	}

	public static function getInstance(){
		if (Lunch::$instance==NULL){
			Lunch::$instance = new Lunch;
		}

		return Lunch::$instance;
	}
}

$lunch = Lunch::getInstance();
?>