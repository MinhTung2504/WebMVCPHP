
<?php
echo "Welcome ". $_SESSION["loginID"]['name'].",";
?>

<button >
    <a href="../controller/c_logout.php">Logout</a>
</button>
<br></br>
<h1 style="text-align: center;">Danh sách sinh viên</h1>

<form style="text-align: center;" action="../controller/c_sinhvien.php">
    <select name="search_khoa">
        <option value="none" selected>-- Chọn khoa --</option>
        <?php 
        for ($i = 1; $i <= sizeof($sinhvien_all_list); $i++) {
            $row = $sinhvien_all_list[$i];
            if (isset($check[$row->khoa])) continue;
            $check[$row->khoa] = "checked";
            echo '<option>'.$row->khoa.'</option>';
        }
        ?>
    </select>
    <button type="submit">Xem</button>
</form>

<form style="text-align: center;" action="../view/themSinhVien.php">
    <button type="submit">Thêm mới</button>
</form>

<?php

if (sizeof($sinhvien_list) == 0) {
    echo "No result!";
}
else {
    echo '<table border = "1" width = "100%">';
    //In tiêu đề của bảng
    echo "
            <tr>
                <td> MSSV </td>
                <td> Họ và tên </td>
                <td> Giới tính </td>
                <td> Khoa </td>
                <td> Action </td>
            </tr>
        ";
    for ($i = 1; $i <= sizeof($sinhvien_list); $i++) {
        $row = $sinhvien_list[$i];
        // echo $row->username;
        //CÁCH 1
        // $maso = $row["maso"];
        // $hoten = $row["hoten"];
        // $ngaysinh = $row["ngaysinh"];
        // $nghenghiep = $row["nghenghiep"];
        // echo "
        //     <tr>
        //         <td>$maso</td>
        //         <td>$hoten</td>
        //         <td>$ngaysinh</td>
        //         <td>$nghenghiep</td>
        //     </tr>
        // ";

        //CÁCH 2
        echo '<tr><td>' . $row->mssv . '</td><td>' . $row->hoten . '</td><td>' .  $row->gioitinh . '</td><td>' . $row->khoa . '</td><td><a style="margin-right:15px;" href="../controller/c_capnhat_sinhvien.php?mssv='.$row->mssv.'"><img style="width:20px; height:20px;" src="../img/update.svg" ></a><a href="../controller/c_xoa_sinhvien.php?mssv='.$row->mssv.'"><img style="width:20px; height:20px;" src="../img/delete.svg" ></a></td></tr>';
    }
    echo "</TABLE>";
}
?>