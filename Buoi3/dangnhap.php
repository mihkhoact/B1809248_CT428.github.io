<?php include "./db_connect.php" ?>

<?php 

    session_start();

    $tendangnhap = $_POST['tendangnhap']; 
 
    $matkhau = md5($_POST['matkhau']); 

    $sql = "SELECT id, tendangnhap, matkhau from thanhvien where tendangnhap='$tendangnhap' AND matkhau='$matkhau'";

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    $id = $row['id'];  

    if ($result->num_rows == 0) {
      
        header("location:./Bai2.php");

    }

    $_SESSION['tendn'] = $tendangnhap;
    $_SESSION['iddn'] = $id;

    $conn->close();

    header("location:./Bai3.php");
?>