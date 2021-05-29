<?php 
session_start();
include_once("../model/m_sinhvien.php");
class C_SinhVien {
    public function invoke() {
        // echo $_REQUEST['username'];
        if (isset($_SESSION['loginID'])) {
            $modelSinhVien = new M_SinhVien();
            $sinhvien_all_list = $modelSinhVien->getAllSinhVien();
            if (isset($_REQUEST['search_khoa']) && $_REQUEST['search_khoa'] != 'none') {
                $sinhvien_list = $modelSinhVien->searchKhoaSinhVien($_REQUEST['search_khoa']);
                
            } else {
                $sinhvien_list = $sinhvien_all_list;
            }
            include_once("../view/listAllSinhvien.php");
        }
        else {
            header("Location:c_login.php");
        }
    }
}
$c_sinhvien = new C_SinhVien();
$c_sinhvien->invoke();
?>