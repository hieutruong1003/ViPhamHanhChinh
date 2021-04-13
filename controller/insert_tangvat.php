<?php 
    
    require('connect.php');
    if(isset($_POST['ma_tangvat'])){
        $ma_tangvat = $_POST['ma_tangvat'];
        $ma_hoso = $_POST['ma_hoso_tangvat'];
        $ten_tangvat = $_POST['ten_tangvat'];
        $ngay_tamgiu = date('Y-m-d',strtotime($_POST['ngay_tamgiu']));
        $thoigian_tamgiu = $_POST['thoigian_tamgiu'];
        $mota = $_POST['mota'];

        $sql_check = "select * from thongtin_tangvat where ma_tangvat ='$ma_tangvat'";
        $result = mysqli_query($conn,$sql_check);
        if(mysqli_num_rows($result) == 1){
            echo "already exist";
        }else{
            if(strlen($ma_tangvat) > 0 && strlen($ma_hoso) > 0 && strlen($ten_tangvat) > 0 && strlen($ngay_tamgiu) > 0
            && strlen($thoigian_tamgiu) > 0){
                $sql_insert = "INSERT INTO thongtin_tangvat(ma_tangvat,ten_tangvat,ma_hoso,ngay_tamgiu,thoigian_tamgiu,tinhtrang_tangvat,mo_ta)
                VALUES ('$ma_tangvat', '$ten_tangvat', '$ma_hoso', '$ngay_tamgiu' ,'$thoigian_tamgiu',0,'$mota')";

                if(mysqli_query($conn,$sql_insert)){
                    echo "insert success";
                }else{
                    echo "insert error" . mysqli_error($conn);
                }
            }else{
                echo "insert error";
            }
        }
    }

?>