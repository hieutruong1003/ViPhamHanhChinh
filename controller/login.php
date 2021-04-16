<?php
    session_destroy();
    require('connect.php');
    if(isset($_POST['userName'])){
    $username = $_POST['userName'];
    $password = $_POST['passWord'];
    $loaiCB = $_POST['loaiCB'];

    $sql = "select * from canbo where ma_canbo ='$username' and password = '$password'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) == 1 ){
        while($_row = mysqli_fetch_assoc($result)){
            if($_row ["loai_canbo"] == $loaiCB && $_row['loai_canbo'] == 'admin'){
                echo "<script>
                alert('Thông tin đăng nhập chính xác!');
                window.location.href= '../admin/index.php?ma_canbo=".$username."';
                </script>
                ";
                $conn->close();
            }
            else if($_row ["loai_canbo"] == $loaiCB && $_row['loai_canbo'] == 'cbhoso'){
                echo "<script>
                alert('Thông tin đăng nhập chính xác!');
                window.location.href= '../canbohoso/index.php?ma_canbo=".$username."';
                </script>
                ";
            }
            else if($_row ["loai_canbo"] == $loaiCB && $_row['loai_canbo'] == 'cbkho'){
                echo "<script>
                alert('Thông tin đăng nhập chính xác!');
                window.location.href= '../canbokho/index.php?ma_canbo=".$username."';
                </script>
                ";
                $conn->close();
            }
            else{
                echo "
                <script>
                alert('Thông tin đăng nhập không chính xác!');
                window.location.href = '../login.php';
                </script>
                ";
                $conn->close();
            }
        }
    }
    else{
        echo "
        <script>
        alert('Thông tin đăng nhập không chính xác!');
        window.location.href = '../login.php';
        </script>
        ";
        exit();
    }
}

?>