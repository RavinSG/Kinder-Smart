<?php 
/**
* 
*/
class Homework{
	private $date;
	private $details;
	private static $instance;

	private function __construct(){
		$connection = mysqli_connect('localhost','root','','kinder_smart');
		$date = new DateTime("tomorrow");
		$date = $date->format("Y-m-d");
		$this->date = $date;
		$query = "SELECT homework FROM daily_notes WHERE date='{$date}'";
		$result = mysqli_query($connection,$query);
		$array = mysqli_fetch_assoc($result);
		$this->details = $array['homework'];
	}

	public function getDetails(){
		return $this->details;
	}

	public static function getInstance(){
		if (Homework::$instance==NULL){
			Homework::$instance = new Homework;
		}

		return Homework::$instance;
	}
	
}

$homework = Homework::getInstance();

 ?>