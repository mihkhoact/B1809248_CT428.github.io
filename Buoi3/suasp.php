<?php include "./db_connect.php" ?>

<?php 

    session_start();
    $idsp = $_SESSION['id'];

    $stensp = $_POST['stsp'];

    $schitietsp = $_POST['sctsp'];

    $sgiasp = $_POST['sgsp'];

    $sfile = $_FILES['shinhanhsp']['tmp_name'];

    $shinhanh = "./imgsp/" . $_FILES['shinhanhsp']['name']; 

    move_uploaded_file($sfile, $shinhanh);

    $sql2 = "UPDATE sanpham SET tensp='$stensp', chitietsp='$schitietsp', giasp='$sgiasp', hinhanhsp='$shinhanh' WHERE idsp=$idsp";

    $conn->query($sql2);
           
    $conn->close();
    
    header("location:./Bai4.php")
    
?>