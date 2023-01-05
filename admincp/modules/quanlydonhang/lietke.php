<?php
    $sql_lietke_dh="SELECT * FROM tbl_giohang ,tbl_dangky  WHERE tbl_giohang.id_khachhang=tbl_dangky.id_khachhang ORDER BY id_cart DESC";
    $result_lietke_dh= mysqli_query($connect,$sql_lietke_dh);
?>
<p>Danh sách đơn hàng của người dùng</p>
 <table style="width: 100%;" border="1" style="border-collapse:collapse;"> 
     <tr>
         <th>ID</th>
         <th>Mã đơn hàng</th>
         <th>Tên khách hàng</th>
         <th>Địa chỉ</th>
         <th>Tài khoản</th>
         <th>Hình thức thanh toán</th>
         <th>Điện thoại</th>
         <th>Tinh Trạng </th>
         <th colspan="2">Quản lý </th>
     </tr>
     <?php
    $i=0;
    while($row=mysqli_fetch_array($result_lietke_dh)){
        $i++;
    
     ?>
     <tr>
         <td><?php echo $i ?></td>
         <td><?php echo $row['code_cart'] ?></td>
         <td><?php echo $row['hovaten']?></td>
         <td><?php echo $row['diachi']?></td>
         <td><?php echo $row['taikhoan']?></td>
         <td><?php echo $row['cart_payment']?></td>
         <td><?php echo $row['sodienthoai']?></td>
         <td>
    	<?php if($row['cart_status']==1){
    		echo '<a href="modules/quanlydonhang/xuly.php?code='.$row['code_cart'].'">Chưa xác nhận</a>';
    	}else{
    		echo 'Đã xác nhận';
    	}
    	?>
    </td>
         <td>
            <a href="index.php?action=quanlydonhang&query=xemdonhang&code=<?php echo $row['code_cart']?>">Xem đơn hàng</a>|
            <th><a href="modules/quanlydonhang/xuly.php?iddonhang=<?php echo $row['code_cart']?>">Xóa</a></th>
         </td>
     </tr>
     
     <?php
    }
    ?>
 </table>