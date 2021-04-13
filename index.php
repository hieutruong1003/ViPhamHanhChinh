<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vi Phạm Hành Chính</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
</head>

<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Tra Cứu Thông Tin Vi Phạm Hành Chính (Sở GTVT) </span> </a>
				<ul class="nav navbar-top-links navbar-right">
	</nav>

	<div class="col-sm-9 col-sm-offset-3 col-lg-8 col-lg-offset-2 main">

		<div class="panel-body">
			<form role="search">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Nhập CMND">
					<div class="input-group-btn">
						<button id="btn_search" class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-search"></i></button>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						Thông Tin Người Vi Phạm
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
															<th scope="row">CMND</th>
															<td></td>
														</tr>
														<tr>
															<th scope="row">Họ Và Tên</th>
															<td></td>
														</tr>
														<tr>
															<th scope="row">Ngày Sinh</th>
															<td></td>
														</tr>
														<tr>
															<th scope="row">Giới Tính</th>
															<td></td>
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
															<td></td>
														</tr>
														<tr>
															<th scope="row">Số Điện Thoại</th>
															<td></td>
														</tr>
														<tr>
															<th scope="row">Email</th>
															<td>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
											<!-- end of table col-lg-6 -->
										</div>
										<!-- end of row -->
									</div>
									<!-- end of general info -->
								</div>
								<!-- end of col-lg-12 -->
							</div>
							<!-- end of row -->
							<!-- The Modal -->
						</div>

					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						Thông Tin Hồ Sơ Vi Phạm
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
															<th scope="row">Mã Hồ Sơ</th>
															<td></td>
														</tr>
														<tr>
															<th scope="row">Tên Hồ Sơ</th>
															<td></td>
														</tr>
														<tr>
															<th scope="row">Ngày Lập Biên Bản</th>
															<td></td>
														</tr>
														<tr>
															<th scope="row">Địa Điểm Lập Biên Bản</th>
															<td></td>
														</tr>

													</tbody>
												</table>
											</div>
											<!-- end of table col-lg-6 -->
											<div class="col-lg-6 col-xl-6">
												<table class="table table-responsive">
													<tbody>
														<tr>
															<th scope="row">Ngày Hẹn</th>
																<td></td>
														</tr>
														<tr>
															<th scope="row">Tình Trạng</th>
															<td></td>
														</tr>
														<tr>
															<th scope="row">Lỗi Vi Phạm</th>
															<td>
															</td>
														</tr>
														<tr>
															<th scope="row">Tổng Tiền Phạt</th>
															<td></td>
														</tr>
														<!--	
	hoso(thoigian_lapbienban, diadiem_lapbienban, ngayhen_xuly,thoihan_xuly,tinhtrang_hoso,mo_ta)
	nvp(cmnd,ten,ngay_sinh,gioitinh,dia_chi,sdt,email) 
	loi(phat_hanhchinh,tenloi)
 -->
													</tbody>
												</table>
											</div>
											<!-- end of table col-lg-6 -->
										</div>
										<!-- end of row -->
									</div>
									<!-- end of general info -->
								</div>
								<!-- end of col-lg-12 -->
							</div>
							<!-- end of row -->
							<button type="button" class="btn btn-primary  btn-edit" data-toggle="modal" data-target="#myModal">
								Phản Hồi
							</button>
							<!-- The Modal -->
							<div class="modal" id="myModal">
								<div class="modal-dialog">
									<div class="modal-content">

										<!-- Modal Header -->
										<div class="modal-header">
											<h4 class="modal-title">Chỉnh Sửa Thông Tin Người Vi Phạm</h4>
											<button type="button" class="close" data-dismiss="modal">&times;</button>
										</div>

										<!-- Modal body -->
										<div class="modal-body">
											<div class="edit-info">
												<div class="row">
													<div class="col-lg-12">
														<div class="general-info">
															<div class="row">
																<div class="col-lg-12">
																	<table class="table">
																		<tbody>
																			<tr>
																				<td>
																					<div class="input-group">
																						<span class="input-group-addon"><i class="icofont icofont-user"></i></span>
																						<input type="text" class="form-control" placeholder="Nội Dung Phản Hồi">
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
																<a href="#!" class="btn btn-primary waves-effect waves-light m-r-20">Gửi </a>
																<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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

					</div>
				</div>
			</form>
		</div>
	</div>
	</ul>
	</div>
	</div>
	</nav>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		$('#btn_search').click(function(){

		});
	</script>
</body>

</html>