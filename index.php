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
			<form role="search" method="POST" action="index.php">
				<div class="input-group">
					<input type="text" name="cmnd" value="<?php echo $_POST['cmnd']; ?>" class="form-control" placeholder="Nhập CMND">
					<div class="input-group-btn">
						<button id="btn_search" class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-search"></i></button>
					</div>
				</div>
			</form>
			<?php
			if (isset($_POST['cmnd'])) {
				require('./controller/connect.php');
				$cmnd = $_POST['cmnd'];
				$sql_select_nvp = "select * from nguoivipham where cmnd = '$cmnd'";
				$sql_select_hsvp = "select * from thongtin_hoso where cmnd_nguoivipham = '$cmnd'";
				$result = mysqli_query($conn, $sql_select_nvp);
				$result_hsvp = mysqli_query($conn, $sql_select_hsvp);
				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
			?>
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
																	<td><?php echo $row['cmnd'] ?></td>
																</tr>
																<tr>
																	<th scope="row">Họ Và Tên</th>
																	<td><?php echo $row['ten_nguoivipham'] ?></td>
																</tr>
																<tr>
																	<th scope="row">Ngày Sinh</th>
																	<td><?php echo date("d-m-Y", strtotime($row['ngay_sinh'])) ?></td>
																</tr>
																<tr>
																	<th scope="row">Giới Tính</th>
																	<td>
																		<?php if ($row['gioitinh'] == 1) echo "Nam";
																		else
																			echo "Nữ";
																		?>

																	</td>
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
																	<td><?php echo $row['dia_chi']; ?></td>
																</tr>
																<tr>
																	<th scope="row">Số Điện Thoại</th>
																	<td><?php echo $row['sdt']; ?></td>
																</tr>
																<tr>
																	<th scope="row">Email</th>
																	<td>
																		<?php echo $row['email']; ?>
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
							<?php
						}
						if (mysqli_num_rows($result_hsvp) > 0) {
							while ($row_hsvp = mysqli_fetch_assoc($result_hsvp)) {
								$ma_hs = $row_hsvp['ma_hoso'];
							?>
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
																		<td><?php echo $row_hsvp['ma_hoso'] ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Tên Hồ Sơ</th>
																		<td><?php echo $row_hsvp['ten_hoso'] ?></td>
																	</tr>
																	<tr>
																		<th scope="row">Ngày Lập Biên Bản</th>
																		<td>
																			<?php
																			echo
																			date("d-m-Y", strtotime($row['ngay_lapbienban']));

																			?>
																		</td>
																	</tr>
																	<tr>
																		<th scope="row">Địa Điểm Lập Biên Bản</th>
																		<td><?php echo $row_hsvp['diadiem_lapbienban'] ?></td>
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
																		<td>
																			<?php echo date("d-m-Y", strtotime($row['ngayhen_xuly']))
																			?>
																		</td>
																	</tr>
																	<tr>
																		<th scope="row">Tình Trạng</th>
																		<td>
																			<?php
																			$status = $row_hsvp['tinhtrang_hoso'];
																			if ($status == 0) {
																				echo "Chưa Xử Lý";
																			} else if ($status == 1) {
																				echo "Đang Xử Lý";
																			} else if ($status == 2) {
																				echo "Đã Xử Lý Xong";
																			}
																			?>
																		</td>
																	</tr>
																	<tr>
																		<th scope="row">Thời Hạn</th>
																		<td>
																			<?php echo $row_hsvp['thoihan_xuly'] . " ngày" ?>
																		</td>
																	</tr>
																	<tr>
																		<th scope="row">Mô Tả</th>
																		<td>
																			<?php echo $row_hsvp['mo_ta'] ?>
																		</td>
																	</tr>

																</tbody>
															</table>
														</div>
														<!-- end of table col-lg-6 -->
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php
								$sql_chitietLoi = "select * from chitiet_hoso_vipham where ma_hoso = '$ma_hs'";
								$result_chitietLoi = mysqli_query($conn, $sql_chitietLoi);
								
								?>
										<div class="panel-heading">
											Thông Tin Lỗi Vi Phạm
										</div>
										<div class="panel-body">
											<div class="view-info">
												<div class="row">
													<div class="col-lg-12">
														<div class="general-info">
															<div class="row">
																<div class="">
																	<table class="table m-0 table-responsive">
																		<tbody>
																			<tr>
																				<th scope="row">Mã Lỗi</th>
																				<th scope="row">
																					Tên Lỗi
																				</th>
																				<th scope="row">
																					Nghị Định
																				</th>
																				<th scope="row">
																					Phạt Hành Chính
																				</th>
																				<th scope="row">
																					Mô Tả
																				</th>
																			</tr>
																			<?php 
																			if (mysqli_num_rows($result_chitietLoi) > 0) {
																				while ($row_loi = mysqli_fetch_assoc($result_chitietLoi)) {
																			?>
																			<tr>
																				<td><?php echo $row_loi['ma_loi'];
																					$ma_loi = $row_loi['ma_loi'];
																					?></td>
																				<?php
																				$sql_danhmucloi = "select * from danhmuc_loivipham where ma_loi = '$ma_loi' LIMIT 1";
																				$result_danhmuc = mysqli_query($conn, $sql_danhmucloi);
																				$row_danhmucloi = mysqli_fetch_assoc($result_danhmuc);
																				?>
																				<td><?php echo $row_danhmucloi['ten_loi'] ?></td>
																				<td><?php echo $row_danhmucloi['nghi_dinh'] ?></td>
																				<td>
																					<?php echo number_format($row_loi['phat_hanhchinh']) . " VNĐ" ?>
																				</td>
																				<td>
																					<?php echo $row_loi['mota'] ?>

																				</td>
																			</tr>
																			<?php }}?>
																		</tbody>
																	</table>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									<?php 
								$sql_tangvat = "select * from thongtin_tangvat where ma_hoso = '$ma_hs'";
								$result_tangvat = mysqli_query($conn, $sql_tangvat);
								
									?>
										<div class="panel-heading">
											Thông Tin Tang Vật Bị Tạm Giữ
										</div>
										<div class="panel-body">
											<div class="view-info">
												<div class="row">
													<div class="col-lg-12">
														<div class="general-info">
															<div class="row">
																<div class="">
																	<table class="table m-0 table-responsive">
																		<tbody>
																			<tr>
																				<th scope="row">Mã Tang Vật</th>
																				<th scope="row">Tên Tang Vật</th>
																				<th scope="row">
																					Ngày Tạm Giữ
																				</th>
																				<th scope="row">
																					Thời Hạn
																				</th>
																				<th scope="row">
																					Tình Trạng
																				</th>
																				<th scope="row">
																					Mô Tả
																				</th>
																			</tr>
																			<?php 
																			if (mysqli_num_rows($result_tangvat) > 0) {
																				while ($row_tangvat = mysqli_fetch_assoc($result_tangvat)) {
																			?>
																			<tr>
																				<td><?php echo $row_tangvat['ma_tangvat'];
																					?></td>
																				<td><?php echo $row_tangvat['ten_tangvat'];
																					?></td>
																				<td><?php echo date("d-m-Y", strtotime($row['ngay_tamgiu'])) ?></td>
																				<td><?php echo $row_tangvat['thoigian_tamgiu'] . " ngày" ?></td>
																				<td>
																					<?php if($row_loi['tinhtrang_tangvat'] == 0){
																						echo "Chưa trả";
																					}else{
																						echo "Đã trả";
																					} ?>
																				</td>
																				<td>
																					<?php echo $row_tangvat['mo_ta'] ?>

																				</td>
																			</tr>
																			<?php
																				}
																			}
																			?>
																		</tbody>
																	</table>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
								
								<div class="panel-body">
									<button type="button" class="btn btn-primary  btn-edit" data-toggle="modal" data-target="#myModal">
										Phản Hồi
									</button>
								</div>
						</div>
			<?php
							}
						}
					} else {
						echo "
										<script>
										alert('Thông tin tra cứu không chính xác');
										</script>
										";
					}
			?>
			<!-- The Modal -->
			<div class="modal" id="myModal">
				<div class="modal-dialog">
					<div class="modal-content">

						<!-- Modal Header -->
						<div class="modal-header">
							<h4 class="modal-title">PHản Hồi Ý Kiến</h4>
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
<?php
			} else {
				echo "Chưa nhập CMND";
			}
?>
</div>
</div>
</ul>
</div>
</div>
</nav>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
	$('#btn_search').click(function() {

	});
</script>
<!--	
	hoso(thoigian_lapbienban, diadiem_lapbienban, ngayhen_xuly,thoihan_xuly,tinhtrang_hoso,mo_ta)
	nvp(cmnd,ten,ngay_sinh,gioitinh,dia_chi,sdt,email) 
	loi(phat_hanhchinh,tenloi)
-->
</body>

</html>