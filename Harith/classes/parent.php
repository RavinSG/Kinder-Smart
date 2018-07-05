<?php 
/**
* 
*/
class Parent_
{
	private $id;
	private $full_name;
	private $ini_name;
	private $nic;
	private $email;
	private $address;
	private $tele_no;
	private $mobile_no;
	private $children_id;

	private function __construct($id,$full_name,$ini_name,$nic,$email,$address,$tele_no,$mobile_no,$children_id)
	{
		$this->id = $id;
		$this->full_name = $full_name;
		$this->ini_name = $ini_name;
		$this->nic = $nic;
		$this->email = $email;
		$this->address = $address;
		$this->tele_no = $tele_no;
		$this->mobile_no = $mobile_no;
		$this->children_id = $children_id;
	}

	public function getID(){
		return $this->id;
	}

	public function getFullName(){
		return $this->full_name;
	}
	public function getIniName(){
		return $this->ini_name;
	}
	public function getNIC(){
		return $this->nic;
	}
	public function getEmail(){
		return $this->email;
	}
	public function getAddress(){
		return $this->address;
	}
	public function getTeleNo(){
		return $this->tele_no;
	}
	public function getMobileNo(){
		return $this->mobile_no;
	}
	public function getChildrensIDS(){
		return $this->children_id;
	}

	public static function getInstance($connection){
		if(isset($_SESSION['uid'])){
			$uid = $_SESSION['uid'];
			$query = "SELECT * FROM parent_db WHERE id = {$uid}";
			$result = mysqli_query($connection,$query);
			$array = mysqli_fetch_assoc($result);
			return new Parent_($array['id'],$array['full_name'],$array['ini_name'],$array['nic'],$array['email'],$array['address'],$array['tele_no'],$array['mobile_no'],$array['children_id']);
		}
	}

}

 ?>