<?php
    // GET id là lấy id từ bên MENU.php 
    $sql_show_new ="SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.trangthai=1 ORDER BY tbl_sanpham.id_sanpham DESC LIMIT 5";
    $query_show_new =mysqli_query($connect,$sql_show_new);
   
   
?>

<ul class="product_list">
    <?php
        while ($row=mysqli_fetch_array($query_show_new)){
    ?>
        <li>
            <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
                <img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>">
                <p class="title_product"> <?php echo $row['tensanpham'] ?></p>
                <p class="price_product">Giá: <?php echo number_format($row['giasanpham'],0,',','.').' VNĐ' ?></p>
                <p><?php echo $row['tendanhmuc']?></p>
            </a>

        </li>

    <?php
        }
    ?>
</ul>
