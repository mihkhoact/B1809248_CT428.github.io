<?php include "./db_connect.php" ?>

<?php 

    $tendangnhap = $_POST['tendangnhap']; 
 
    $matkhau = md5($_POST['matkhau']); 

    $file = $_FILES['image_file']['tmp_name'];

    $hinhanh = "./image/" . $_FILES['image_file']['name'];

    move_uploaded_file($file, $hinhanh);

    $gioitinh = $_POST['gioitinh']; 

    $nghenghiep = $_POST['nghenghiep'];

    $st = "";

    if(isset($_POST['sothich'])){
        foreach($_POST['sothich'] as $key => $sothichs){
            $st = $st . $sothichs . ',';
        }
    }
    $st = substr(trim($st), 0, -1);

    $sql = "INSERT INTO thanhvien (id, tendangnhap, matkhau, hinhanh, gioitinh, nghenghiep, sothich) 
    VALUES ('NULL', '$tendangnhap', '$matkhau', '$hinhanh', '$gioitinh', '$nghenghiep', '$st')";

if ($conn->query($sql) === TRUE) {
   
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

    $conn->close();

    header("location:./Bai2.php");
?>