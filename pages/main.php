


<div class="main">
            <?php
                include ("sidebar/sidebar.php");
            ?>
            <div class="maincontent">
              
                <?php //lấy qiamly từ menu truyền vào bằng phuongư thức GET
                        if(isset($_GET['quanly'])){
                            $bientam=$_GET['quanly'];

                        }else{
                            $bientam="";
                        }
                        if ($bientam=='danhmuclist'){
                            include("main/danhmuc.php");
                        }elseif ($bientam=='giohang'){ 
                            include("main/giohang/cart.php");
                        }elseif ($bientam=='dangky'){ 
                            include("main/dangky.php");
                        }elseif ($bientam=='contact'){ 
                            include("main/contact.php");
                        }elseif ($bientam=='sanpham'){ 
                            include("main/sanpham.php");
                        
                        }elseif ($bientam=='dangnhap'){ 
                            include("main/dangnhap.php");
                        }elseif ($bientam=='thongtin'){ 
                            include("main/thongtin.php");

                        }elseif ($bientam=='timkiem'){ 
                            include("main/timkiem.php");
                            
                        
                        }else{ ?>






                <div class="silder">
                        <div class="sildes">
                            <input type="radio" name="radio_btn" id="radio1">
                            <input type="radio" name="radio_btn" id="radio2">
                            <input type="radio" name="radio_btn" id="radio3">
                            <input type="radio" name="radio_btn" id="radio4">
                            <div class="silde first">
                                <img src="images/1.jpg" alt="">
                            </div>
                            <div class="silde">
                                <img src="images/2.jpg" alt="">
                            </div>
                            <div class="silde">
                                <img src="images/3.jpg" alt="">
                            </div>
                            <div class="silde">
                                <img src="images/4.jpg" alt="">
                            </div>


                            <div class="navigation-auto">
                                <div class="auto-btn1"></div>
                                <div class="auto-btn2"></div>
                                <div class="auto-btn3"></div>
                                <div class="auto-btn4"></div>

                            </div>

                        
                        </div>
                        <div class="navigation-manual">
                            <label for="radio1" class="manual-btn"></label>
                            <label for="radio2" class="manual-btn"></label>
                            <label for="radio3" class="manual-btn"></label>
                            <label for="radio4" class="manual-btn"></label>
                        </div>

                </div>
                        <?php
                       
                        }
 ?>
                
            </div>
        </div>



