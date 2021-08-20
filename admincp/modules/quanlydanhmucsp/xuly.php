<?php
include('../../config/config.php');
$tenloaisp = $_POST['tendanhmuc'];
$thutu = $_POST['thutu'];
// Nếu route 'themdanhmuc' có dữ liệu trả về thì sẽ thực hiện thêm dữ liệu vào db tbl_danhmuc
if(isset($_POST['themdanhmuc'])){
    $sql_them = "INSERT INTO tbl_danhmuc(tendanhmuc,thutu) VALUE('".$tenloaisp."','".$thutu."')";
    mysqli_query($mysqli,$sql_them);
    header('Location:../../index.php?action=quanlydanhmucsanpham');
//    sau khi thực hiện truy ván dữ liệu thì điều hướng trang về route 'action=quanlydanhmucsanpham'
}

?>