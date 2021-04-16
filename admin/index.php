
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vi Phạm Hành Chính</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/datepicker3.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
</head>

<body>
    <?php
        session_start();
        require('../controller/connect.php');
        if(isset($_GET['ma_canbo'])){
            $ma_canbo = $_GET['ma_canbo'];
            $_SESSION['ma_canbo'] = $ma_canbo;
        }else{
            $ma_canbo = $_SESSION['ma_canbo'];
        }
        $sql = "select * from canbo where ma_canbo='$ma_canbo'";
        $result = mysqli_query($conn,$sql);
        while( $row = mysqli_fetch_object($result)){
    ?>
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#sidebar-collapse"><span class="sr-only">Vi Phạm Hành Chính</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button>
                <a class="navbar-brand" href="#"><span>Vi Phạm Hành Chính (Sở GTVT) </span> </a>
                <ul class="nav navbar-top-links navbar-right">
    </nav>
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="https://vcdn-giaitri.vnecdn.net/2019/05/07/lee-min-ho-5568-1557197339.jpg"
                    class="img-responsive" alt="">
            </div>
            <div class="profile-usertitle">
                <div class="profile-usertitle-name">AD Hiếu PC</div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        <form role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
        </form>
        <!-- Start Menu -->
        <ul class="nav menu">

            <li><a href= "danhsachhoso.html"><em class="fa fa-address-book">&nbsp;</em> Danh Sách Hồ Sơ</a></li>
            <li><a href= "Canbo.html"><em class="fa fa-user">&nbsp;</em> Cán Bộ </a></li>
            <li><a href= "danhmucloi.html"><em class="fa fa-calendar">&nbsp;</em>Danh Mục Lỗi </a></li>
            <li><a href= "themcanbo.html"><em class="fa fa-user-plus"></em> Thêm Cán Bộ </a></li>
            <li class="active"><a href= "thongtincanhan.html"><em class="fa fa-user-secret">&nbsp;</em> Thông Tin
                    Cá Nhân </a></li>
            <li><a href= "../login.php"><em class="fa fa-power-off">&nbsp;</em> Logout </a></li>
        </ul>
    </div>
    <!--/.sidebar-->

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="panel-body">

            <div class="panel panel-default">
                <div class="panel-heading">
                    Thông tin của <?php echo $row->ten_canbo ?>
                    <button type="button" class="btn btn-primary  btn-edit" data-toggle="modal" data-target="#myModal">
                        Edit
                    </button>
                    <!-- The Modal -->
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Chỉnh Sửa Thông Tin Cá Nhân</h4>

                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="edit-info">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="general-info">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon"><i
                                                                                        class="icofont icofont-user"></i></span>
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="Loại Cán Bộ">
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon"><i
                                                                                        class="icofont icofont-user"></i></span>
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="Địa Chỉ">
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon"><i
                                                                                        class="icofont icofont-user"></i></span>
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="Đơn Vị">
                                                                            </select>
                                                                            </div>                                                                   
                                                                                     
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon"><i
                                                                                        class="icofont icofont-location-pin"></i></span>
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="Số Điện Thoại">
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!-- end of table col-lg-6 -->
                                                        <div class="col-lg-6">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon"><i
                                                                                        class="icofont icofont-mobile-phone"></i></span>
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="Email">
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon"><i
                                                                                        class="icofont icofont-social-twitter"></i></span>
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="Account">
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon"><i
                                                                                        class="icofont icofont-social-skype"></i></span>
                                                                                <input type="email" class="form-control"
                                                                                    placeholder="Password">
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!-- end of table col-lg-6 -->
                                                    </div>
                                                    <!-- end of row -->
                                                    <div class="text-center">
                                                        <a href="#!"
                                                            class="btn btn-primary waves-effect waves-light m-r-20">Save</a>
                                                        <button type="button" class="btn btn-danger"
                                                            data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                                <!-- end of edit info -->
                                            </div>
                                            <!-- end of col-lg-12 -->
                                        </div>
                                        <!-- end of row -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="panel-body">
                    <div class="view-info">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="general-info">
                                    <div class="row">
                                        <div class="col-lg-6 col-xl-6">
                                            <table class="table m-0 table-responsive">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Mã Cán Bộ</th>
                                                        <td><?php echo "".$row->ma_canbo ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Tên Cán Bộ</th>
                                                        <td><?php echo "".$row->ten_canbo?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Loại Cán Bộ</th>
                                                        <td><?php echo "".$row->loai_canbo?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Giới Tính</th>
                                                        <td><?php 
                                                        if($row->gioitinh == 1){
                                                            echo "Nam";
                                                        }else{echo "Nữ";}
                                                        ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Chứng Minh Thư</th>
                                                        <td><?php echo $row->cmnd ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Chức vụ</th>
                                                        <td><?php echo $row->chuc_vu ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end of table col-lg-6 -->
                                        <div class="col-lg-6 col-xl-6">
                                            <table class="table table-responsive">
                                                <tbody>

                                                    <tr>
                                                        <th scope="row">Địa chỉ</th>
                                                        <td><?php echo $row->dia_chi ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Số Điện Thoại</th>
                                                        <td><?php echo $row->sdt ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Dơn Vị</th>
                                                        <td><?php echo $row->don_vi ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Email</th>
                                                        <td><?php echo $row->email ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Account</th>
                                                        <td><?php echo $row->acount ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Password</th>
                                                        <td><?php echo $row->password ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end of table col-lg-6 -->
                                    </div>
                                    <?php } ?>
                                    <!-- end of row -->
                                </div>
                                <!-- end of general info -->
                            </div>
                            <!-- end of col-lg-12 -->
                        </div>
                        <!-- end of row -->
                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>
    <!--/.col-->
    
    <script src="../js/jquery-1.11.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/custom.js"></script>
    <script>
        window.onload = function () {
            var chart1 = document.getElementById("line-chart").getContext("2d");
            window.myLine = new Chart(chart1).Line(lineChartData, {
                responsive: true,
                scaleLineColor: "rgba(0,0,0,.2)",
                scaleGridLineColor: "rgba(0,0,0,.05)",
                scaleFontColor: "#c5c7cc"
            });
        };
    </script>
</body>

</html>