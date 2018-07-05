<?php 
/**
* 
*/
class SpecialNote{
	private $date;
	private $details;
	private static $instance;

	private function __construct(){
		$connection = mysqli_connect('localhost','root','','kinder_smart');
		$date = new DateTime("tomorrow");
		$date = $date->format("Y-m-d");
		$this->date = $date;
		$query = "SELECT spec_note FROM daily_notes WHERE date='{$date}'";
		$result = mysqli_query($connection,$query);
		$array = mysqli_fetch_assoc($result);
		$this->details = $array['spec_note'];
	}

	public function getDetails(){
		return $this->details;
	}

	public static function getInstance(){
		if (SpecialNote::$instance==NULL){
			SpecialNote::$instance = new SpecialNote;
		}

		return SpecialNote::$instance;
	}
	
}

$spec_note = SpecialNote::getInstance();

 ?>