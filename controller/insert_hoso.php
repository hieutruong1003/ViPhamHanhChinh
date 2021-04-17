<?Php 
    if(isset($_POST['ma_hoso'])){
        $ma_hoso = $_POST['ma_hoso'];
        $ten_hoso = $_POST['ten_hoso'];
        $thoigian_lapbienban = date("Y-m-d", strtotime($_POST['thoigian_lapbienban']));
        $diadiem_lapbienban = $_POST['diadiem_lapbienban'];
        $ma_canbo_lapbienban = $_POST['ma_canbo_lapbienban'];
        $cmnd_nguoivipham =$_POST['cmnd_nguoivipham'];
        $ngay_nhaphoso = date("Y-m-d", strtotime($_POST['ngay_nhaphoso']));
        $ngayhen_xuly = date("Y-m-d", strtotime($_POST['ngayhen_xuly']));
        $thoihan_xuly = $_POST['thoihan_xuly'];
        $ma_canbo_xuly = $_POST['ma_canbo_xuly'];
        $hinhanh = $_POST['hinhanh'];
        $mota = $_POST['mota'];
        $tinhtrang = 0;

        require('connect.php');
        $sql_check = "select * from thongtin_hoso where ma_hoso = '$ma_hoso'";
        $result = mysqli_query($conn,$sql_check);
        if((mysqli_num_rows($result) == 1)){
            echo "already exist";
        }else{
            if(strlen($ma_hoso) > 0 && strlen($ten_hoso) > 0 && strlen($thoigian_lapbienban) >0
            && strlen($diadiem_lapbienban) > 0 && strlen($ma_canbo_lapbienban) > 0 && strlen($cmnd_nguoivipham) >0
            && strlen($ngay_nhaphoso) > 0 && strlen($ngayhen_xuly) >0&& strlen($thoihan_xuly) > 0 && strlen($ma_canbo_xuly) >0
            && strlen($hinhanh) >0 && strlen($mota) >0){
                $sql_insert = "INSERT INTO thongtin_hoso(ma_hoso,ten_hoso,thoigian_lapbienban, diadiem_lapbienban, ma_canbo_lapbienban, ma_canbo_xuly_hoso, cmnd_nguoivipham, ngay_nhap_hoso, ngay_xuly_hoso, ngayhen_xuly, thoihan_xuly, tinhtrang_hoso, hinhanh_bienban, mo_ta)
                VALUES ('$ma_hoso','$ten_hoso','$thoigian_lapbienban','$diadiem_lapbienban','$ma_canbo_lapbienban','$ma_canbo_xuly','$cmnd_nguoivipham', '$ngay_nhaphoso','0000-00-00', '$ngayhen_xuly','$thoihan_xuly',0,'hinhanh.jpg','$mota')";
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