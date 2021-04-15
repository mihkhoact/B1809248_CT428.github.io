<?php 
    session_start();
    $id = $_SESSION['iddn'];
    if(!isset($id)){
        header("location:./Bai2.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bai4.css">
    <title>Danh sách sản phẩm</title>
</head>
<body>
    <div class="hm">
        <a href="../index.html">HOME</a>
    </div>
    <div class="container">
    <h1>Danh sách sản phẩm</h1>
       <table class="bangsp">
           <tr>
               <th>STT</th> 
               <th>Tên sản phẩm</th> 
               <th>Giá sản phẩm</th> 
               <th>Chức năng</th>
            </tr>
            <tr>
                <?php include "./dssanpham.php"; ?>
            </tr>
        </table>
    </div>
</body>
</html>