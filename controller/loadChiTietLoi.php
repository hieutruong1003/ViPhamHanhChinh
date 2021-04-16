<?php
    if(isset($_POST['ma_hoso'])){
        require('connect.php');
        $ma_hoso = $_POST['ma_hoso'];
        
        $sql = "select * from chitiet_hoso_vipham where ma_hoso ='$ma_hoso'";
        $result = mysqli_query($conn,$sql);
        while($_rows = mysqli_fetch_assoc($result)){
            echo ' <tr class="rs_loi">
                <td>'.$_rows['ma_loi'].'</td>
                <td>'.$_rows['phat_hanhchinh'].'</td>
                <td>'.$_rows['mota'].'</td>
            </tr>';
        }
    }
    
?>

