<?php
    $sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
    $query_lietke_danhmucsp = mysqli_query($mysqli, $sql_lietke_danhmucsp);
//    connect to db
?>
<p>Liệt kê danh mục sản phẩm</p>
<table style="width:100%" border="1" style="border-collapse: collapse">
    <tr>
        <th>Id</th>
        <th>Tên danh mục</th>
        <th>Quản lý</th>
    </tr>
    <?php
    $i = 0;
    while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
        $i++;
//   Lay ra mang
    ?>
    <tr>
<!--        Tạo ra các cột trong bảng danh sách sp-->
        <td><?php echo $i ?></td>
        <td><?php echo $row['tendanhmuc'] ?></td>
        <td>
            <a href="?action=quanlydanhmucsanpham&query=xoa">Xóa</a> | <a href="?action=quanlydanhmucsanpham&query=sua">Sửa</a>
        </td>
    </tr>
    <?php
    }
    ?>
</table>