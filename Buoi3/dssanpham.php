<?php include "./db_connect.php" ?>

<?php

        $sql = "SELECT idsp, tensp, giasp FROM sanpham WHERE idtv=$id ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
           
            $i = 1;
            while($row = $result->fetch_assoc()) {
                
                echo 
                    '<tr>
                        <td style="text-align: center">'.$i++. '</td>
                        <td>' . $row['tensp']. '</td>
                        <td>' . $row['giasp']. '</td>
                        <td>
                            <div class="chucnang">
                                <a class="xem" href="./xemchitietsp.php?id='. $row["idsp"] .'"> <img src="./icon/view.png" alt="icon"> </a>
                                <a class="sua" href="./suasanpham.php?id='. $row["idsp"] .'"> <img src="./icon/edit.png" alt="icon"> </a>
                                <a class="xoa" href="xoasp.php?id='. $row["idsp"] .'"><img src="./icon/delete.png" alt="icon" /></a>
                            </div>
                        </td>
                    </tr>';   
      
            }
        }

?>