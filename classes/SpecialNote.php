<?php 


class SpecialNote{
	private $date;
	private $details;
	private static $instance;

	private function __construct(){
		$connection = mysqli_connect('localhost','root','','kindersmart');
		$date = new DateTime("tomorrow");
		$day = $date->format("l");
		$date = $date->format("Y-m-d");
		$this->date = $date;
        if($day == 'sunday'){
            $date =  date("Y-m-d",strtotime('- 1 day'));
        }
        else if($day == 'monday'){
            $date =  date("Y-m-d",strtotime('- 2 day'));
        }
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