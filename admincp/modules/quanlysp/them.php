<p>Thêm sản phẩm</p>
<table border="1px" width="100%" style="border-collapse: collapse">
    <form method="POST" action="modules/quanlysp/xuly.php">
        <tr>
            <td>Tên sản phẩm</td>
            <td><input type="text" name="tensanpham"></td>
        </tr>
        <tr>
            <td>Mã sản phẩm</td>
            <td><input type="text" name="masp"></td>
        </tr>
        <tr>
            <td>Giá sản phẩm</td>
            <td><input type="text" name="giasp"></td>
        </tr>
        <tr>
            <td>Số lượng</td>
            <td><input type="text" name="soluong"></td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td><input type="file" name="hinhanh"></td>
        </tr>
        <tr>
            <td>Tóm tắt</td>
            <td><textarea name="tomtat" rows="10" style="resize: none"></textarea></td>
        </tr>
        <tr>
            <td>Nội dung</td>
            <td><textarea name="noidung" rows="10" style="resize: none"></textarea></td>
        </tr>
        <tr>
            <td>Tình trạng</td>
            <td>
                <select name="" id="">
                    <option value="">Kích hoạt</option>
                    <option value="">Ẩn</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="themsanpham" value="Thêm sản phẩm"></td>
        </tr>
    </form>

</table>