<?php


/**
 * @property string deatails
 */
class Homework{
	private $date;
	private $details;
	private static $instance;

	private function __construct(){
		$connection = mysqli_connect('localhost','root','','kindersmart');
		$date = new DateTime('today');
		$day = strtolower($date->format("l"));
		$date = $date->format("Y-m-d");

		$this->date = $date;
        if($day == 'saturday'){
            $date =  date("Y-m-d",strtotime('- 1 day'));
        }
        else if($day == 'sunday'){
            $date =  date("Y-m-d",strtotime('- 2 day'));
        }

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