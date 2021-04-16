<?php
    if(isset($_POST['ma_hoso'])){
        require('connect.php');
        $ma_hoso = $_POST['ma_hoso'];
        $sql = "select ma_tangvat,ten_tangvat,ngay_tamgiu,thoigian_tamgiu,mo_ta from thongtin_tangvat where ma_hoso ='$ma_hoso'";
        $result = mysqli_query($conn,$sql);
        while($_rows = mysqli_fetch_assoc($result)){
            echo ' <tr class="res_tangvat">
                <td>'.$_rows['ma_tangvat'].'</td>
                <td>'.$_rows['ten_tangvat'].'</td>
                <td>'.$_rows['ngay_tamgiu'].'</td>
                <td>'.$_rows['thoigian_tamgiu'].'</td>
                <td>'.$_rows['mo_ta'].'</td>
            </tr>';
        }
    }
    
?>

