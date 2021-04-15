<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bai3.css">
    <title>Sửa sản phẩm</title>
</head>
<body>
    <div class="hm">
        <a href="../index.html">HOME</a>
    </div>
    <div class="container">
        <h1>SỬA SẢN PHẨM</h1>
        <div class="ttsp">
            <form action="./suasp.php" method="post" enctype="multipart/form-data">
                
                    <label for="tsp">Tên sản phẩm</label> <br />
                    <input id="tsp" name="stsp" type="text"> <br />
                
                    <label for="ctsp">Chi tiết sản phẩm</label>  <br />
                    <textarea id="ctsp" name="sctsp" cols="30" rows="10"></textarea> <br />
                
                    <label for="gsp">Giá sản phẩm</label> <br />
                    <input id="gsp" name="sgsp" type="text"> <br />
                
                    <label for="hasp">Hình ảnh sản phẩm</label>  <br />
                    <input id="hasp" type="file" name="shinhanhsp"> <br />
                <div>
                    <button type="submit">Sửa sản phẩm</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
<?php 
    $_SESSION['id']= $_GET['id'];
?>

