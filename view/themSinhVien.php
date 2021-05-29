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
    <h1>Thêm mới sinh viên</h1>
    <form action="../controller/c_them_sinhvien.php">
        <span>Mã SV</span>
        <input name='mssv'/>
        <br></br>
        <span>Họ tên</span>
        <input name='hoten'/>
        <br></br>
        <span>Giới tính</span>
        <input type="radio" id="male" name="gioitinh" value="1" checked>
        <label for="male">Nam</label>
        <input type="radio" id="female" name="gioitinh" value="0">
        <label for="female">Nữ</label>
        <br></br>
        <span>Khoa</span>
        <input name='khoa'/>
        <br></br>
        <button type='submit'>Thêm mới</button>
        <button type='button' onclick="goBack()">Quay lại</button>
    </form>


</body>
</html>