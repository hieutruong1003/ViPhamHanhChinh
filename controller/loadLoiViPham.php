<?php 
    if(isset($_POST['ma_loi']) && strlen($_POST['ma_loi']) > 0){
        $ma_loi = $_POST['ma_loi'];
        require('connect.php');
        $sql = "select * from danhmuc_loivipham where ma_loi = '$ma_loi'";
        $reslut = mysqli_query($conn,$sql);
        while($_rows = mysqli_fetch_array($reslut)){
            echo '{"ma_loi":"'.$_rows["ma_loi"].'",
                    "ten_loi":"'.$_rows["ten_loi"].'",
                    "nghi_dinh":"'.$_rows["nghi_dinh"].'",
                    "loaiphuongtien":"'.$_rows["loaiphuongtien"].'",
                    "muc_phat":"'.$_rows["muc_phat"].'",
                    "mo_ta":"'.$_rows["mo_ta"].'"
                }';
        }   
    }

?>