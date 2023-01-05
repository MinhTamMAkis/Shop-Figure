

<?php
    
    
    $sql_lietke_sp="SELECT * FROM tbl_sanpham ,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
    $result_lietke_sp= mysqli_query($connect,$sql_lietke_sp);
?>
<p>Liệt kê danh mục sản phẩm</p>
 <table style="width: 100%;" border="1" style="border-collapse:collapse;"> 
     <tr>
         <th>ID</th>
         <th>Tên sản phảm</th>
         <th>Hình ảnh </th>
         <th>Giá sản phẩm</th>
         <th>Số lượng</th>
         <th>Danh mục</th>
         <th>Mã sản phẩm</th>
         <th>Tóm tăt</th>
         <th>Trạng thái</th>
         <th>Quản lý</th>
     </tr>
     <?php
    $i=0;
    while($row=mysqli_fetch_array($result_lietke_sp)){
        $i++;
    
     ?>
     <tr>
         <td><?php echo $i ?></td>
         <td style="width:80px;height:150px; text-align: center;">
                            <?php echo $row['tensanpham'] ?>   
         </td>
         
         <td style="width:150px;height:150px;" >
                            <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?> " width="100%" >   
         </td>

         <td style="width:150px;text-align: center;">
                            <?php echo number_format($row['giasanpham'],0,',','.').'VNĐ'  ?>   
         </td>
         <td><?php echo $row['soluong'] ?>      </td>
         <td><?php echo $row['tendanhmuc'] ?>      </td>
         <td><?php echo $row['masanpham'] ?>    </td>
         <td><?php echo $row['tomtat'] ?>       </td>
         <td><?php if($row['trangthai']==1){
                echo "Mới";
         }else{
                echo "Cũ";
         }?>
         </td>
         <td>
            <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham']?>">Xóa</a>|
             <a href="?action=quanlysanpham&query=sua&idsanpham=<?php echo $row['id_sanpham']?>">Sửa</a>
         </td>
     </tr>

     <?php
    }
    ?>
 </table>