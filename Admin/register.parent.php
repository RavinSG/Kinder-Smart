<?php require_once('../include/connection.inc.php');
		require_once('checklogin.admin.inc.php');
 ?>
<?php
	if (isset($_POST['submit'])) {
		$salutation = $_POST['salutation'];
		$full_name = $_POST['full_name'];
		$ini_name = $_POST['ini_name'];
		$nic = $_POST['nic'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$tele_no = $_POST['tele_no'];
		$mobile_no = $_POST['mobile_no'];
		$occupation = $_POST['occupation'];
        $password = sha1($nic);

		if (empty($full_name) or empty($ini_name) or empty($nic) or empty($email) or empty($address) or empty($tele_no) or empty($mobile_no) or empty($occupation)) {
			autofill($salutation,$full_name,$ini_name,$nic,$email,$address,$tele_no,$mobile_no,$occupation);
			echo '<h1>Fill all the input fields</h1><br>';
			echo "<a href='registration.parent.php'>Please Enter Details Again</a>";
		}

		else if(!(filter_var($email,FILTER_VALIDATE_EMAIL))){
			autofill($salutation,$full_name,$ini_name,$nic,$email,$address,$tele_no,$mobile_no,$occupation);
			echo '<h1>Please Enter a valid e - mail</h1>';
			echo "<a href='registration.parent.php'>Please Enter Details Again</a>";
			
		}
		else{
		    $query = "SELECT * FROM parent_db WHERE email='{$email}'";
            $result = mysqli_query($connection,$query);
            if(!mysqli_num_rows($result)){
                $query = "SELECT * FROM super_table WHERE email='{$email}' and password='{$password}'";
                $result_set = mysqli_query($connection,$query);

                if(!(mysqli_num_rows($result_set))){

                    $query = "INSERT INTO parent_db (salutation,full_name,ini_name,nic,email,address,tele_no,mobile_no,occupation,password) VALUES('{$salutation}','{$full_name}','{$ini_name}','{$nic}','{$email}','{$address}','{$tele_no}','{$mobile_no}','{$occupation}','{$password}')";

                    $result = mysqli_query($connection,$query);

                    if (!($result)) {
                        echo "<h1>Registration Failed!</h1>";
                    }
                    else{
                        $query = "SELECT id FROM parent_db where email = '{$email}'";
                        $result = mysqli_query($connection,$query);
                        $row = mysqli_fetch_assoc($result);

                        $query = "INSERT INTO super_table (email,password,uid,acc_type) VALUES ('{$email}','{$password}','{$row["id"]}','parent')";
                        $result = mysqli_query($connection,$query);
                        header("Location: ../");
                    }
                }
                else{
                    echo "<h1>Error!</h1> <a href='registration.parent.php'>Try Again</a>";
                }
            }
            else{
                echo "This Email Already Exist!<br> <a href='registration.parent.php'>Try Again</a>";
            }

		}
	}

	function autofill($salutation,$full_name,$ini_name,$nic,$email,$address,$tele_no,$mobile_no,$occupation){
		$_SESSION['salutation'] = $salutation;
		$_SESSION['parent_full_name'] = $full_name;
		$_SESSION['parent_ini_name'] = $ini_name;
		$_SESSION['nic'] = $nic;
		$_SESSION['email'] = $email;
		$_SESSION['parent_address'] = $address;
		$_SESSION['tele_no'] = $tele_no;
		$_SESSION['mobile_no'] = $mobile_no;
		$_SESSION['occupation'] = $occupation;
	}
 ?>