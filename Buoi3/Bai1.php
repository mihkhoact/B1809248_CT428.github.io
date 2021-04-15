<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Buoi1/css/Bai2.css">
    <title>Bài 2: Form đăng ký</title>
</head>
<body>
    <div class="thongtin">
        Đào Minh Khoa <br>
        B1809248
    </div>
        <table class="container">
            <tr>
                <td class="title">
                    <h2 style="color: red;">Đăng ký tài khoản mới</h2>
                </td>
            </tr>
            <tr>
                <td class="title" style="text-align: center;">
                    <span>Vui lòng điền đầy đủ thông tin bên dưới để đăng ký tài khoản</span>
                </td>
            </tr>
            <tr>
                <td>
                    <table class="bang1">
                        <tr>
                            <td>
                                <form action="dangky.php" method="POST" enctype="multipart/form-data">
                                    <table class="bang2">
                                        <tr>
                                            <td>Tên đăng nhập</td>
                                            <td><input type="text" name="tendangnhap"></td>
                                        </tr>
                                        <tr>
                                            <td>Mật khẩu</td>
                                            <td><input type="password" name="matkhau"></td>
                                        </tr>
                                        <tr>
                                            <td>Gõ lại mật khẩu</td>
                                            <td><input type="password"></td>
                                        </tr>
                                        <tr>
                                            <td>Hình đại diện</td>
                                            <td><input type="file" name="image_file"></td>
                                        </tr>
                                        <tr>
                                            <td>Giới tính</td>
                                            <td>
                                                <input type="radio" name="gioitinh" value="Nam">&nbsp;Nam
                                                <input type="radio" name="gioitinh" value="Nữ">&nbsp;Nữ
                                                <input type="radio" name="gioitinh" value="Khác">&nbsp;Khác
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nghề nghiệp</td>
                                            <td>
                                                <select name="nghenghiep">
                                                    <option value="Học Sinh">Học sinh</option>
                                                    <option value="Sinh Viên">Sinh viên</option>
                                                    <option value="Giáo Viên">Giáo viên</option>
                                                    <option value="Khác">Khác</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sở thích</td>
                                            <td>
                                                <input type="checkbox" name="sothich[]" value="Thể Thao">&nbsp;Thể thao 
                                                <input type="checkbox" name="sothich[]" value="Du Lịch">&nbsp;Du lịch 
                                                <input type="checkbox" name="sothich[]" value="Âm Nhạc">&nbsp;Âm nhạc <br>
                                                <input type="checkbox" name="sothich[]" value="Thời Trang">&nbsp;Thời trang
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <button type="submit">Đăng ký</button>
                                                <button type="reset">Làm lại</button>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <div class="hm_dn">
            <a class="hm" href="../index.html">Trang chủ</a>
            <a class="dn" href="./Bai2.php">Đăng nhập</a>
        </div>
</body>

</html>
