<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        span {
            display: inline-block;
            width: 150px;
        }
    </style>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</head>
<body>
    <h1>Cap Nhat Sinh Vien</h1>
    <form action="../controller/c_capnhat_sinhvien.php">
        <span>Mã SV</span>
        <input disabled value='<?php echo $sinhvien->mssv; ?>'/>
        <input hidden name='mssv' value='<?php echo $sinhvien->mssv; ?>'/>
        <br></br>
        <span>Họ tên</span>
        <input name='hoten'  value='<?php echo $sinhvien->hoten; ?>'/>
        <br></br>
        <span>Giới tính</span>
        <input type="radio" id="male" name="gioitinh" value="Nam" <?php echo ($sinhvien->gioitinh==1?'checked':'') ?>/>
        <label for="male">Nam</label>
        <input type="radio" id="female" name="gioitinh" value="Nữ" <?php echo ($sinhvien->gioitinh==0?'checked':'') ?>>
        <label for="female">Nữ</label>
        <br></br>
        <span>Khoa</span>
        <input name='khoa' value='<?php echo $sinhvien->khoa; ?>'/>
        <br></br>
        <button type='submit'>Lưu lại</button>
        <button type='button' onclick="goBack()">Quay lại</button>
        <input hidden name='xacnhan' value='1'/>
    </form>


</body>
</html>