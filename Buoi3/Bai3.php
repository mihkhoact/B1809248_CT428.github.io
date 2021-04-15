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
    <link rel="stylesheet" href="./css/bai3.css">
    <title>Thêm sản phẩm</title>
</head>
<body>
    <div class="hm">
        <a href="../index.html">HOME</a>
    </div>
    <div class="container">
        <h1>THÊM SẢN PHẨM</h1>
        <div class="ttsp">
            <form action="./themsanpham.php" method="post" enctype="multipart/form-data">
                
                    <label for="tsp">Tên sản phẩm</label> <br />
                    <input id="tsp" name="tsp" type="text"> <br />
                
                    <label for="ctsp">Chi tiết sản phẩm</label>  <br />
                    <textarea id="ctsp" name="ctsp" cols="30" rows="10"></textarea> <br />
                
                    <label for="gsp">Giá sản phẩm</label> <br />
                    <input id="gsp" name="gsp" type="text"> <br />
                
                    <label for="hasp">Hình ảnh sản phẩm</label>  <br />
                    <input id="hasp" type="file" name="hinhanhsp"> <br />
                <div>
                    <button type="submit">Lưu sản phẩm</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>