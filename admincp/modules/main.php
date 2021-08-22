<div class="clear"></div>
<div class="main">
    <?php
        if(isset($_GET['action']) && $_GET['query']){
            $tam = $_GET['action'];
            $query = $_GET['query'];
        } else {
            $tam = '';
            $query = '';
        }
        // Neu tren route dung voi cac dieu kien thi dieu huong toi cac trang component phu hop voi route
        if($tam == 'quanlydanhmucsanpham' && $query == 'them'){
            include ("modules/quanlydanhmucsp/them.php");
            include ("modules/quanlydanhmucsp/lietke.php");
        } elseif ($tam == 'quanlydanhmucsanpham' && $query == 'sua') {
            include ("modules/quanlydanhmucsp/sua.php");
        } elseif ($tam == 'quanlysanpham' && $query == 'them') {
            include ("modules/quanlysp/them.php");
            include ("modules/quanlysp/lietke.php");
        } elseif ($tam == 'quanlysanpham' && $query == 'sua') {
            include ("modules/quanlysp/sua.php");
        }
        else {
            include ("modules/dashboard.php");
        }
    ?>
</div>