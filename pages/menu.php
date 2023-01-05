<?php
     $sql_danhmuc="SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
     $query_danhmuc=mysqli_query($connect,$sql_danhmuc);
     

?>
<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangky']);
	} 
?>
<div class="menu">
               
            <ul class="menu_list">
                <li> <a href="index.php">Home</a></li>
                
                 <li> <a href="index.php?quanly=contact">Liên hệ </a></li>
                <li> <a href="index.php?quanly=giohang">Giỏ hàng</a></li>
                <li><a href="#">Danh mục</a>
                        <ul class="menu_danhmuc">
                        <?php
                                    while($row_danhmuc=mysqli_fetch_array($query_danhmuc)){

                                ?>
                                <li> <a href="index.php?quanly=danhmuclist&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc']?></a></li>

                                <?php
                                    }

                                ?>
                        </ul>
                </li>
                <?php
                    if(isset($_SESSION['dangky'])){
                ?>
                   
                    <li><a href="index.php?quanly=thongtin"> Thông Tin</a></li>
                    <li> <a href="index.php?dangxuat=1">Đăng xuât</a></li>
                <?php
                    }else{
                ?>
                     <li> <a href="index.php?quanly=dangnhap">Đăng nhập</a></li>
                     <li> <a href="index.php?quanly=dangky">Đăng ký</a></li>
                <?php
                    }
                ?>
                 
                
               
                <li> 
                    <Form method="POST" action="index.php?quanly=timkiem"> 
                        <input type="text" placeholder="sreach....." name="tukhoa">
                        <input type="submit" name="timkiem" value="Tìm Kiếm">
                    </Form>
                </li>
            </ul>
 </div>