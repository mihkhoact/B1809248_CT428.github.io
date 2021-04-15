<?php include "./db_connect.php" ?>

<?php 

    $id = $_GET['id'];
    $sql = "DELETE FROM sanpham WHERE sanpham.idsp=$id";
    if ($conn->query($sql) === TRUE) {
    header("location:./Bai4.php");
    }

    $conn->close();

?>