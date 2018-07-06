<?php require_once('../inc/checklogin.admin.inc.php');
    if(isset($_POST['submit'])){
        unset($_POST['submit']);
        $monday="";
        $tuesday="";
        $wednesday = "";
        $thursday = "";
        $friday="";

        for($i=0; $i<$_SESSION['mon_num'];$i++){
            $index = "mon-item- ".strval($i);
            
        }
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
