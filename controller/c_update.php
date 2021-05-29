<?php 
session_start();
include_once("../model/m_user.php");
class C_Update {
    public function invoke() {
        // echo $_REQUEST['username'];
        if (isset($_SESSION['loginID'])) {
            $modelUser = new M_User();
            if (isset($_REQUEST['search'])) {
                $user_list = $modelUser->searchUser($_REQUEST['search']);
                
            } else {
                $user_list = $modelUser->getAllUser();
            }
            include_once("../view/listAllUser.php");
        }
        else {
            header("Location:c_login.php");
        }
    }
}
$c_up = new C_Update();
$c_up->invoke();
?>