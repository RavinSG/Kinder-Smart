<?php
require_once('checklogin.admin.inc.php');
require_once ("../include/connection.inc.php");

    if(isset($_POST['submit'])){
        unset($_POST['submit']);
        $monday="";
        $tuesday="";
        $wednesday = "";
        $thursday = "";
        $friday="";

        for($i=0; $i<$_SESSION['mon_num'];$i++){
            $index = "mon-item-".strval($i+1);
            $monday.=$_POST[$index]."|";
        }
        echo $monday."<br>";
        $query = "UPDATE lunch SET monday='{$monday}' WHERE str_date='{$_POST['str_date']}'" ;
        $result = mysqli_query($connection,$query);

        for($i=0; $i<$_SESSION['tue_num'];$i++){
            $index = "tue-item-".strval($i+1);
            $tuesday.=$_POST[$index]."|";
        }
        echo $tuesday."<br>";
        $query = "UPDATE lunch SET tuesday='{$tuesday}' WHERE str_date='{$_POST['str_date']}'" ;
        $result = mysqli_query($connection,$query);
        for($i=0; $i<$_SESSION['wed_num'];$i++){
            $index = "wed-item-".strval($i+1);
            $wednesday.=$_POST[$index]."|";
        }
        echo $wednesday."<br>";
        $query = "UPDATE lunch SET wednesday='{$wednesday}' WHERE str_date='{$_POST['str_date']}'" ;
        $result = mysqli_query($connection,$query);
        for($i=0; $i<$_SESSION['thurs_num'];$i++){
            $index = "thurs-item-".strval($i+1);
            $thursday.=$_POST[$index]."|";
        }
        echo $thursday."<br>";
        $query = "UPDATE lunch SET thursday='{$thursday}' WHERE str_date='{$_POST['str_date']}'" ;
        $result = mysqli_query($connection,$query);
        for($i=0; $i<$_SESSION['fri_num'];$i++){
            $index = "fri-item-".strval($i+1);
            $friday.=$_POST[$index]."|";
        }
        echo $friday."<br>";
        $query = "UPDATE lunch SET friday='{$friday}' WHERE str_date='{$_POST['str_date']}'" ;
        $result = mysqli_query($connection,$query);
    }

?>
<?php
    function resetSession(){
        $uid = $_SESSION['uid'];
        $_SESSION = array();
        $_SESSION['uid'] = $uid;
        $_SESSION['type'] = 'admin';
    }
?>
<a href="../">Go to home</a>
