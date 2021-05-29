<?php 
include_once("../model/m_user.php");
class C_Login {
    public function invoke() {
        // echo $_REQUEST['username'];
        if (isset($_REQUEST['username'])) {
            $modelUser = new M_User();
            $isLogin = $modelUser->login($_REQUEST['username'], $_REQUEST['password']);
            if ($isLogin) {
                session_start();
                $_SESSION["loginID"] = $isLogin;
                // $_SESSION["loginID_firstname"] = $_REQUEST['firstname'];
                header("Location:c_sinhvien.php");
            } else {
                include_once("../view/login.php");
                
                echo "<h3 style='text-align: center;'>Invalid username and password</h3>";
            }
        }
        else {
            if (isset($_SESSION["loginID"]))
                header("Location:c_sinhvien.php");
            else
                include_once("../view/login.php");
        }
    }
}
$c_login = new C_Login();
$c_login->invoke();
?>