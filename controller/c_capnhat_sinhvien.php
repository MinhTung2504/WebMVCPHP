<?php 
session_start();
include_once("../model/m_sinhvien.php");
class C_SinhVien {
    public function invoke() {
        // echo $_REQUEST['username'];
        if (isset($_SESSION['loginID'])) {
            if (isset($_REQUEST['xacnhan'])) {
                $modelSinhVien = new M_SinhVien();
                $modelSinhVien->capnhatSinhVien($_REQUEST['mssv'], $_REQUEST['hoten'], $_REQUEST['gioitinh'], $_REQUEST['khoa']);
                header("Location:c_sinhvien.php");
            }
            else {
                $modelSinhVien = new M_SinhVien();
                $sinhvien = $modelSinhVien->getSinhVien($_REQUEST['mssv']);
                include_once("../view/capnhatSinhVien.php");
            }
        }
        else {
            header("Location:c_login.php");
        }
    }
}
$c_sinhvien = new C_SinhVien();
$c_sinhvien->invoke();
?>