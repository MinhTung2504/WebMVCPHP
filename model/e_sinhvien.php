<?php
class E_SinhVien
{
    public $mssv;
    public $hoten;
    public $gioitinh;
    public $khoa;
        public function __construct($_mssv, $_hoten, $_gioitinh, $khoa)
        {
            $this->mssv = $_mssv;
            $this->hoten = $_hoten;
            $this->gioitinh = $_gioitinh;
            $this->khoa = $khoa;
        }
}
?>