<?php
    if(isset($_POST['cmnd'])){
        $cmnd = $_POST['cmnd'];
        $ten_nguoivipham = $_POST['ten_nguoivipham'];
        $temp_gioitinh = $_POST['gioitinh'];
        $ngaysinh = $_POST['ngaysinh'];
        $diachi = $_POST['diachi'];
        $sdt = $_POST['sdt'];
        $email = $_POST['email'];
        $ngaysinh_format = date("Y-m-d", strtotime($ngaysinh));
        $gioitinh = null;
        if($temp_gioitinh == "nam"){
            $gioitinh = 1;
        }else{
            $gioitinh = 0;
        }
        require('connect.php');
        $sql ="select * from nguoivipham where cmnd = '$cmnd'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) == 1){
            echo "already exist";
        }else{
            if(strlen($cmnd) > 0 && strlen($ten_nguoivipham) > 0 && strlen($diachi) > 0 && strlen($sdt) > 0 && strlen($email) >0){
                $sql_insert = "INSERT INTO nguoivipham (cmnd,ten_nguoivipham,ngay_sinh,gioitinh,dia_chi,sdt,email)
                VALUES ('$cmnd','$ten_nguoivipham','$ngaysinh_format','$gioitinh','$diachi','$sdt','$email')";
                if(mysqli_query($conn, $sql_insert)){
                    echo "insert success";
                }else{
                    echo "insert error";
                }
            }else{
                echo "insert error";
            }
        }
    }

?>