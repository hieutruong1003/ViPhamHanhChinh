<?php
    $host = "localhost";
        $username = "root";
        $password = "";
        $database = "csdl_viphamhanhchinh";
        $conn = mysqli_connect($host, $username, $password, $database);
        mysqli_query($conn,"Set names 'utf8'");   
?>