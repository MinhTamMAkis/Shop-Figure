<?php
        session_start();
        include "../../../admincp/config/connect.php";

        if(isset($_SESSION['dangky'])){
            echo 'xin chào: '.'<span style="color:red">'.$_SESSION['dangky'].'</span>';
        
        
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/style_cart.css">
    <link rel="stylesheet" href="../../../css/style_bill.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Thanh Toán</title>
</head>
<body>
    <div>
    <h1>Trang thanh toán</h1>
    </div>
    
    <?php
    include("mainthanhtoan.php");
    
    ?>
</body>
<script type="text/javascript" src="../../../js/modal.js"></script>
</html>
<?php

    }
?>