<?php
include_once("e_sinhvien.php");
include_once("DbContext.php");
class M_SinhVien{
    public function __construct() {
        $this->db = new DbContext();
    }
    public function getAllSinhVien() {
        $sql = "Select * from sinhviens";
        $result = $this ->db ->executeQuery($sql);
        $res_arr = array();
        //In tiêu đề của bảng
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {
            $i++;
            $res_arr[$i] = new E_SinhVien($row['mssv'], $row['hoten'], $row['gioitinh'], $row['khoa']);
            // array_push($res_arr, $i => new E_User($row['id'], $row['firstname'], $row['lastname'], $row['username'], $row['password'], $row['role']));
        }
        return $res_arr;
    }
    public function searchKhoaSinhVien($search) {
        $sql = "Select * from sinhviens WHERE khoa='".$search."'";
        $result = $this -> db -> executeQuery($sql);
        $res_arr = array();
        //In tiêu đề của bảng
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {
            $i++;
            $res_arr[$i] = new E_SinhVien($row['mssv'], $row['hoten'], $row['gioitinh'], $row['khoa']);
            // array_push($res_arr, $i => new E_User($row['id'], $row['firstname'], $row['lastname'], $row['username'], $row['password'], $row['role']));
        }
        return $res_arr;
    }
    public function themSinhVien($mssv, $hoten, $gioitinh, $khoa) {
        $sql = "INSERT INTO sinhviens(mssv, hoten, gioitinh, khoa) VALUES('{$mssv}', '{$hoten}', '{$gioitinh}', '{$khoa}')";
        // echo $sql;
        $result = $this -> db -> executeQuery($sql);
    }
    public function getSinhVien($mssv) {
        $sql = "Select * from sinhviens WHERE mssv='".$mssv."'";
        // echo $sql;
        $result = $this -> db -> executeQuery($sql);
        //Giải phóng tập các bản ghi trong $result
        // mysqli_free_result($result);
        while ($row = mysqli_fetch_array($result)) {
            $res = new E_SinhVien($row['mssv'], $row['hoten'], $row['gioitinh'], $row['khoa']);
            // array_push($res_arr, $i => new E_User($row['id'], $row['firstname'], $row['lastname'], $row['username'], $row['password'], $row['role']));
        }
        return $res;
    }
    public function xoaSinhVien($mssv) {
        $sql = "DELETE FROM sinhviens WHERE mssv='".$mssv."'";
        // echo $sql;
        $result = $this -> db -> executeQuery($sql);
    }
    public function capnhatSinhVien($mssv, $hoten, $gioitinh, $khoa) {
        $sql = "UPDATE sinhviens SET hoten='{$hoten}', gioitinh='{$gioitinh}', khoa='{$khoa}' WHERE mssv='{$mssv}'";
        // echo $sql;
        $result = $this -> db -> executeQuery($sql);
    }
}
?>