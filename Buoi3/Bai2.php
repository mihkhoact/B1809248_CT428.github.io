<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/dn.css">
    <title>Đăng Nhập</title>
</head>
<body>
    <div class="hm">
        <a href="../index.html">HOME</a>
    </div>
    <h3>Đăng nhập</h3>
    <div class="dangnhap">
        <form action="./dangnhap.php" method="post">
            <label for="dn">Tên đăng nhập</label>
            <input id="dn" type="text" name="tendangnhap">
            <label for="mk">Mật khẩu</label>
            <input id="mk" type="password" name="matkhau">
            <small name="er"></small>
        <button type="submit">Đăng Nhập</button>
        </form>
    </div>
</body>
</html>