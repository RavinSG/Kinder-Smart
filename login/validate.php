<?php
    include_once '../classes/KinderParent.php';
    include_once '../classes/KinderAdmin.php';
    include_once '../classes/KinderTeacher.php';
	session_start();

	if(isset($_POST['email']) && isset($_POST['password'])) {
        $email = trim($_POST['email']);
        $password = $_POST['password'];

        require_once("../include/connection.inc.php");
        if ((!(empty($email) || empty($password)) && filter_var($email, FILTER_VALIDATE_EMAIL))) {
            $hashed_password = sha1($password);
            $query = "SELECT * FROM super_table WHERE email = '" . mysqli_real_escape_string($connection, $email) . "' and password = '" . mysqli_real_escape_string($connection, $hashed_password) . "'";
            $result = mysqli_query($connection, $query);
            if (mysqli_num_rows($result)) {
                $array = mysqli_fetch_assoc($result);
                $_SESSION['uid'] = $array['uid'];
                $_SESSION['type'] = $array['acc_type'];
                $_SESSION['email']= $array['email'];
                if (isset($_POST['remember'])) {
                    setcookie('uid', $array['uid'], time() + 60 * 60 * 24 * 30, "/");
                    setcookie('type', $array['acc_type'], time() + 60 * 60 * 24 * 30, "/");
                }
                if (!$array['pass_changed']) {
                    header("Location: changepassword-front.php");
                    exit;
                }
                switch ($array['acc_type']) {
                    CASE 'parent':
                        $_SESSION['parent'] = new KinderParent($_SESSION['uid']);
                        header("Location: ../parent");
                        break;

                    CASE 'admin':
                        $_SESSION['admin'] = new KinderAdmin($_SESSION['uid']);
                        header("Location: ../admin");
                        break;

                    CASE 'teacher':
                        $_SESSION['teacher'] = new KinderTeacher($_SESSION['uid']);
                        header("Location: ../teacher");
                        break;
                }
            } else {
                echo "Wrong credentials";
            }
        }
    }
		else {
			echo ('<h1>Enter valid email and password</h1><h2><a href = "../">Click here</a> to go to login page</h2>');
		}

	
 ?>