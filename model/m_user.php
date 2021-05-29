<?php
include_once("e_user.php");
include_once("DbContext.php");
class M_User {
    public function __construct() {
        $this->db = new DbContext();
    }
    public function getAllUser() {
        $sql = "Select * from admins";
        $result = $this ->db ->executeQuery($sql);
        $res_arr = array();
        //In tiêu đề của bảng
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {
            $i++;
            $res_arr[$i] = new E_User($row['id'], $row['username'], $row['password'], $row['name']);
            // array_push($res_arr, $i => new E_User($row['id'], $row['firstname'], $row['lastname'], $row['username'], $row['password'], $row['role']));
        }
        return $res_arr;
    }
    public function searchUser($search) {
        $sql = "Select * from users WHERE firstname LIKE '%".$search."%'";
        $result = $this ->db ->executeQuery($sql);
        $res_arr = array();
        //In tiêu đề của bảng
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {
            $i++;
            $res_arr[$i] = new E_User($row['id'], $row['firstname'], $row['lastname'], $row['username'], $row['password'], $row['role']);
            // array_push($res_arr, $i => new E_User($row['id'], $row['firstname'], $row['lastname'], $row['username'], $row['password'], $row['role']));
        }
        return $res_arr;
    }
    public function login($user, $pass) {
        session_start();
        if ($user=="" || $pass =="") {
            return false;
        }
        else {
            //Khai báo chuỗi SQL dạng Select
            $sql = "SELECT * FROM admins WHERE username='$user' AND password='$pass'";
            //Thực hiện truy vấn
            //Lưu kết quả vào biến result
            $rs = $this ->db ->executeQuery($sql);

            // Kiem tra
            if (mysqli_num_rows($rs) == 0) {
                return false;
            } else {
                // $_SESSION["loginID"] = $rs;
                $row = mysqli_fetch_array($rs);
                return $row;
                // return true;
            }
        }
    }
}
?>