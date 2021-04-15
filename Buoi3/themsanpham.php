<?php include "./db_connect.php" ?>

<?php
    session_start();

    $tensp = $_POST['tsp'];

    $chitietsp = $_POST['ctsp'];

    $giasp = $_POST['gsp'];

    $file = $_FILES['hinhanhsp']['tmp_name'];

    $hinhanh = "./imgsp/" . $_FILES['hinhanhsp']['name'];

    move_uploaded_file($file, $hinhanh);

    $tendn = $_SESSION['tendn'];

    $sql1 = "SELECT id FROM thanhvien where tendangnhap='$tendn'";
    
    $result = $conn->query($sql1);

    $row = $result->fetch_assoc();

    $id = $row['id'];

    $sql = "INSERT INTO sanpham (idsp, tensp, chitietsp, giasp, hinhanhsp, idtv)
    VALUES (NULL, '$tensp', '$chitietsp', '$giasp', '$hinhanh', '$id')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $_SESSION['tensanpham'] = $tensp;

    $conn->close();

    header("location:./Bai4.php");
?>