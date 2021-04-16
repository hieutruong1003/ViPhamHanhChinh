<?php
    if(isset($_POST['ma_loi'])){
        $ma_loi = $_POST['ma_loi'];
        $ma_hoso = $_POST['mahoso_loivipham'];
        $phat_hanhchinh = $_POST['phat_hanhchinh'];
        $mo_ta = $_POST['mo_ta'];

        if(strlen($ma_loi) >0 && strlen($ma_hoso) >0 && strlen($phat_hanhchinh) >0){
            require('connect.php');
            $sql_inset = "INSERT INTO chitiet_hoso_vipham(ma_hoso,ma_loi,phat_hanhchinh,mota)
                VALUES ('$ma_hoso','$ma_loi','$phat_hanhchinh','$mo_ta')";
            if(mysqli_query($conn,$sql_inset)){
                echo "insert success";
            }else{
                echo "insert error";
            }
        }else{
            echo "insert error";
        }
    }else{
        echo "insert error";
    }

?>