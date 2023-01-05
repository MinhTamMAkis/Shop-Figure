 
 
 <h2>Chi tiết sản phẩm </h2>
 <style>
    .warpper_deital{
      
       text-align: center;
    }
    .hinhanh_sanpham img{
       margin: 0 370px;
    }
 </style>
 <?php
    $sql_chitiet ="SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc  AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
    $query_chitiet=mysqli_query($connect,$sql_chitiet);
    while ($row_chitiet=mysqli_fetch_array($query_chitiet)){
 ?>
 <div class="warpper_deital"> 
 <div class="hinhanh_sanpham" >
        <img style="border-radius: 5px;" src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh']?>">
 </div>
    <form action="pages/main/giohang/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>" method="POST">
        <div class="chitiet_sanpham">
            <h3 style="margin: 0;"><?php echo $row_chitiet['tensanpham'] ?></h3>
            <p>Mã :<?php echo $row_chitiet['masanpham'] ?></p>
            <p>Giá :<?php echo number_format($row_chitiet['giasanpham'],0,',','.').' VNĐ' ?></p>
            <p>Số lượng:<?php echo $row_chitiet['soluong'] ?></p>
            <p>Danh mục :<?php echo $row_chitiet['tendanhmuc'] ?></p>
            <p>Nội Dung :<?php  echo  $row_chitiet['noidung']?></p>
            <p><input class="themgiohang" type="submit" name="themgiohang" value="Thêm Giỏ Hàng"></p>
           
        </div>
    </form>
 </div>
 <?php
    }
 ?>
