<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vi Phạm Hành Chính</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/font-awesome.min.css" rel="stylesheet">
	<link href="../css/datepicker3.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>

<body>
	<?php
	session_start();
	if (!$_SESSION['ma_canbo']) {
		header('location:../');
	} else {
		$ma_canbo = $_SESSION['ma_canbo'];
	}
	require('../controller/connect.php');
	$sql = "select * from danhmuc_loivipham";
	$result = mysqli_query($conn, $sql);

	?>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Vi Phạm Hành Chính</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Vi Phạm Hành Chính (Sở GTVT) </span> </a>
				<ul class="nav navbar-top-links navbar-right">
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Cán Bộ Hồ Sơ</div>
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
		<!-- Start Menu  -->
		<ul class="nav menu">
			<li><a href="index.php"><em class="fa far fa-user">&nbsp;</em> Thông Tin Cá Nhân </a></li>
			<li class="active"><a href="taohosovipham.php"><em class="fa fa-list-alt">&nbsp;</em> Tạo Hồ Sơ Vi Phạm</a></li>
			<li><a href="hosovipham.html"><em class="fa fa-address-book">&nbsp;</em> Hồ Sơ Vi Phạm</a></li>
			<li><a href="nguoivipham.html"><em class="fa fa-user-circle">&nbsp;</em> Người Vi Phạm</a></li>
			<li><a href="thongtintangvat.html"><em class="fa fa-bicycle">&nbsp;</em> Thông tin Tang Vật</a></li>
			<li><a href="../login.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
		<!--  End Menu -->
	</div>
	<!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="panel-body">
			<form class="form-horizontal" id="form_nvp" action="" method="POST">
				<div class="text-center">
					<h3>THÔNG TIN NGƯỜI VI PHẠM</h3>
				</div>
				<fieldset class="">
					<div class="form-group">
						<label class="col-md-3 control-label" for="cmnd">CMND của Người Vi Phạm</label>
						<div class="col-md-6">
							<input id="cmnd" name="cmnd" type="number" placeholder="Nhập CMND" class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="ten_nguoivipham">Tên Người Vi Phạm</label>
						<div class="col-md-6">
							<input id="ten_nguoivipham" name="ten_nguoivipham" type="text" placeholder="Nhập Tên Người Vi Phạm " class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="gioitinh">Giới Tính</label>
						<div class="col-md-6">
							<select class="form-control" name="gioitinh" id="gioitinh">
								<option value="nam">Nam</option>
								<option value="nu">Nữ</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="ngaysinh" required>Ngày sinh</label>
						<div class="col-md-6">
							<input id="ngaysinh" name="ngaysinh" type="date" placeholder="Nhập ngày sinh" class="form-control">
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label" for="diachi" required>Địa Chỉ</label>
						<div class="col-md-6">
							<input id="diachi" name="diachi" type="text" placeholder="Nhập Địa Chỉ" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="sdt" required>Số Điện Thoại</label>
						<div class="col-md-6">
							<input id="sdt" name="sdt" type="number" placeholder="Nhập Số Điện Thoại " class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="email" required>Email</label>
						<div class="col-md-6">
							<input id="email" name="email" type="email" placeholder="Nhập Email" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-5"></div>
						<div class="col-md-4"><button type="submit" id="btn_nvp" class="btn btn-primary center">Lưu Thông Tin NVP</button></div>
					</div>
		</div>
		</fieldset>
		</form>
		<form class="form-horizontal" id="form_hoso" action="" method="POST">
			<div class="text-center">
				<h3>THÔNG TIN HỒ SƠ</h3>
			</div>
			<fieldset>
				<!-- Mã Người Vi Phạm-->
				<div class="form-group">
					<label class="col-md-3 control-label" for="ma_hoso">Mã Hồ Sơ</label>
					<div class="col-md-6">
							<input id="cmnd_nguoivipham" name="cmnd_nguoivipham" type="number" hidden>
						<input id="ma_hoso" name="ma_hoso" type="text" placeholder="Nhập Mã Hồ Sơ" class="form-control">
					</div>
				</div>

				<!-- Tên Người Vi Phạm-->
				<div class="form-group">
					<label class="col-md-3 control-label" for="ten_hoso">Tên Hồ Sơ</label>
					<div class="col-md-6">
						<input id="ten_hoso" name="ten_hoso" type="text" placeholder="Nhập Tên Hồ Sơ " class="form-control">
					</div>
				</div>



				<!-- Giới Tính -->
				<div class="form-group">
					<label class="col-md-3 control-label" for="thoigian_lapbienban">TG_Lập Biên Bản</label>
					<div class="col-md-6">
						<input id="thoigian_lapbienban" name="thoigian_lapbienban" type="date" placeholder="Nhập TG_Lập Biên Bản" class="form-control">
					</div>
				</div>

				<!-- Địa Chỉ -->
				<div class="form-group">
					<label class="col-md-3 control-label" for="diadiem_lapbienban">Địa Điểm Lập Biên Bản</label>
					<div class="col-md-6">
						<input id="diadiem_lapbienban" name="diadiem_lapbienban" type="text" placeholder="Nhập Địa Điểm Lập Biên Bản" class="form-control">
					</div>
				</div>
				<!-- Số Điện Thoại -->
				<div class="form-group">
					<label class="col-md-3 control-label" for="ma_canbo_lapbienban">Mã Cán Bộ Lập Biên Bản</label>
					<div class="col-md-6">
						<input id="ma_canbo_lapbienban" name="ma_canbo_lapbienban" type="text" placeholder=" Nhập Mã Cán Bộ Lập Biên Bản" class="form-control">
					</div>
				</div>
			
				<div class="form-group">
					<label class="col-md-3 control-label" fo="ngay_nhaphoso">Ngày Nhập HS</label>
					<div class="col-md-6">
						<input id="ngay_nhaphoso" name="ngay_nhaphoso" type="date" placeholder="Nhập Ngày Nhập HS " class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label" for="ngayhen_xuly">Ngày Hẹn Xử Lý HS</label>
					<div class="col-md-6">
						<input id="ngayhen_xuly" name="ngayhen_xuly" type="date" placeholder="Nhập Ngày Hẹn Xử Lý HS " class="form-control">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-3 control-label" for="thoihan_xuly">Thời Hạn Xử Lý HS</label>
					<div class="col-md-6">
						<input id="thoihan_xuly" name="thoihan_xuly" type="number" placeholder="Nhập Thời Hạn Xử Lý HS" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label" for="ma_canbo_xuly">Mã Cán Bộ XLHS</label>
					<div class="col-md-6">
						<input id="ma_canbo_xuly" name="ma_canbo_xuly" value="<?php echo $ma_canbo ?>" type="text" placeholder="Nhập Mã Cán Bộ XLHS " class="form-control" readonly>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label" for="hinhanh">Hình Ảnh</label>
					<div class="col-md-6">
						<input class="form-control" type="text" id="hinhanh" name="hinhanh" placeholder="Hình Ảnh" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label" for="mota">Mô tả</label>
					<div class="col-md-6">
						<textarea id="mota" name="mota" type="text" placeholder="Nhập Mô tả " class="form-control"></textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-5"></div>
					<div class="col-md-4">
						<button type="submit" id="btn_hoso" class="btn btn-primary center">Lưu Thông Tin Hồ Sơ</button>
					</div>
				</div>

			</fieldset>
		</form>

		<form class="form-horizontal" id="form_tangvat" action="" method="POST">
			<div class=" form-group text-center">
				<h3>THÔNG TIN TANG VẬT</h3>
			</div>
			<table class="table  table-responsive table-fixed" style=" text-align: center;">
				<thead>
					<tr>
						<th style=" text-align: center;">Mã Tang Vật</th>
						<th style=" text-align: center;">Tên Tang Vật</th>
						<th style=" text-align: center;">Ngày Tạm Giữ</th>
						<th style=" text-align: center;">Thời Gian Tạm Giữ</th>
						<th style=" text-align: center;">Mô Tả</th>
					</tr>
				</thead>
				<tbody id="res_tv">
					<tr>
						<td>
							<div class="group ">
								<input type="text" id="ma_hoso_tangvat" name="ma_hoso_tangvat" hidden>
								<input id="ma_tangvat" name="ma_tangvat" type="text " class="form-control">
							</div>
						</td>
						<td>
							<div class="group">
								<input id="ten_tangvat" name="ten_tangvat" type="text" class="form-control">
							</div>
						</td>
						<td>
							<div class="group">
								<input id="ngay_tamgiu" name="ngay_tamgiu" type="date" class="form-control">
							</div>
						</td>
						<td>
							<div class="group">
								<input id="thoigian_tamgiu" name="thoigian_tamgiu" type="number" class="form-control">
							</div>
						</td>
						<td>
							<div class="group">
								<input id="mota" name="mota" type="text" class="form-control">
							</div>
						</td>
					</tr>
					<tr>
						<td colspan="5">
							<button style=" text-align: center;" id="btn_tangvat" type="button" class="btn btn-primary">Thêm</button>
						</td>
					</tr>
				</tbody>
			</table>

		</form>
		<form class="form-horizontal" id="form_chitietloi" action="" method="POST">
			<div class="text-center">
				<h3>THÔNG TIN LỖI</h3>
			</div>
			<table class="table  table-responsive" style=" text-align: center;">
				<thead>
					<tr>
						<th style=" text-align: center;">Mã Lỗi</th>
						<th style=" text-align: center;">Phạt Hành Chính</th>
						<th style=" text-align: center;">Mô Tả</th>
					</tr>
				</thead>
				<tbody id="res_loi">

					<tr>
						<td>
							<div class="group ">
								<select id="ma_loi" name="ma_loi" type="text " class="form-control">
									<option value=""></option>
									<?php
									while ($row = mysqli_fetch_assoc($result)) {
									?>
										<option value="<?php echo $row['ma_loi']; ?>" data-toggle="modal" data-target="#myModal"><?php echo $row['ma_loi'];
																																} ?></option>

								</select>
								<!-- The Modal -->
								<div class="modal fade" id="myModal">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">

											<!-- Modal Header -->
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="modal-title">Thông tin về Lỗi</h4>

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
																							<span class="input-group-addon"><i class="icofont icofont-user"></i></span>
																							<input type="text" id="md_maloi" name="md_maloi" class="form-control" placeholder="Mã Lỗi">
																						</div>
																					</td>
																				</tr>
																				<tr>
																					<td>
																						<div class="input-group">
																							<span class="input-group-addon"><i class="icofont icofont-user"></i></span>
																							<input type="text" id="md_tenloi" name="md_tenloi" class="form-control" placeholder="Tên Lỗi">
																						</div>
																					</td>
																				</tr>


																				<tr>
																					<td>
																						<div class="input-group">
																							<span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
																							<input type="text" class="form-control" id="md_nghidinh" name="md_nghidinh" placeholder="Nghị Định">
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
																							<span class="input-group-addon"><i class="icofont icofont-mobile-phone"></i></span>
																							<input type="text" class="form-control" id="md_mucphat" name="md_mucphat" placeholder="Mức Phạt">
																						</div>
																					</td>
																				</tr>
																				<tr>
																					<td>
																						<div class="input-group">
																							<span class="input-group-addon"><i class="icofont icofont-social-twitter"></i></span>
																							<input type="text" class="form-control" id="md_loaiphuongtien" name="md_loaiphuongtien" placeholder="Loại Phương Tiện">
																						</div>
																					</td>
																				</tr>
																				<tr>
																					<td>
																						<div class="input-group">
																							<span class="input-group-addon"><i class="icofont icofont-social-twitter"></i></span>
																							<input type="text" class="form-control" id="md_mota" name="md_mota" placeholder="Mô Tả">
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

						</td>
						<td>
							<div class="group">
								<input type="text" name="mahoso_loivipham"  id="mahoso_loivipham" hidden>
								<input id="phat_hanhchinh" step="1" name="phat_hanhchinh" type="number" class="form-control">
							</div>
						</td>
						<td>
							<div class="group">
								<input id="mo_ta" name="mo_ta" type="text" class="form-control">
							</div>
						</td>
					</tr>
					<tr>
						<td colspan="3">
							<button id="btn_chitiet" style=" text-align: center;" type="button" class="btn btn-primary">
								Thêm
							</button>
						</td>
					</tr>
				</tbody>
			</table>
		</form>
		<!-- Form actions -->
		<div class="form-group">
			<div class="text-center">
				<button type="submit" class="btn btn-edit btn-danger" id="btn_success" style="margin-bottom: 20px;">Hoàn Tất Hồ Sơ</button>
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
		
		$('#ma_loi').change(function() {
			var e = document.getElementById("ma_loi");
			var p_id = e.options[e.selectedIndex].value;
			$.ajax({
				method: "POST",
				url: "../controller/loadLoiViPham.php",
				data: {
					ma_loi: p_id
				},
				success: function(data) {
					var obj_loi = jQuery.parseJSON(data);
					if (obj_loi) {
						$('#md_maloi').val(obj_loi.ma_loi);
						$('#md_tenloi').val(obj_loi.ten_loi);
						$('#md_nghidinh').val(obj_loi.nghi_dinh);
						$('#md_mucphat').val(obj_loi.muc_phat);
						$('#md_loaiphuongtien').val(obj_loi.loaiphuongtien);
						$('#md_mota').val(obj_loi.mota);
					}
				}
			});
			$('#myModal').modal('show');
		});
		$('#btn_nvp').click(function() {
			$.ajax({
				method: "POST",
				url: "../controller/insert_nvp.php",
				data: $("#form_nvp").serialize(),
				success: function(reponse) {
					console.log(reponse);
					if (reponse == "insert error") {
						alert("Thông tin gửi đi thiếu hoặc chưa đúng định dạng!");
					} else if (reponse == "insert success") {
						alert("Thông tin người vi phạm đã được lưu lại");
						$('#cmnd').attr("readonly", true);
						$('#ten_nguoivipham').attr("readonly", true);
						$('#gioitinh').attr("readonly", true);
						$('#ngaysinh').attr("readonly", true);
						$('#diachi').attr("readonly", true);
						$('#sdt').attr("readonly", true);
						$('#email').attr("readonly", true);
						$("#btn_nvp").attr("disabled", true);
					} else if (reponse == "already exist") {
						alert("Thông tin người vi phạm đã tồn tại! Kiểm tra lại CMND, nếu đúng thì bỏ qua thông tin này!");
					}
				}
			});
			event.preventDefault();
		});
		$('#btn_hoso').click(function() {
			var txt = $('#cmnd').val();
			$('#cmnd_nguoivipham').val(txt);
			$.ajax({
				method: "POST",
				url: "../controller/insert_hoso.php",
				data: $('#form_hoso').serialize(),
				success: function(reponse) {
					console.log(reponse);
					if (reponse == "insert error") {
						alert("Thông tin gửi đi thiếu hoặc chưa đúng định dạng!");
					} else if (reponse == "insert success") {
						alert("Thông tin hồ sơ vi phạm đã được lưu lại");
						$('#ma_hoso').attr("readonly", true);
						$('#ten_hoso').attr("readonly", true);
						$('#thoigian_lapbienban').attr("readonly", true);
						$('#diadiem_lapbienban').attr("readonly", true);
						$('#ma_canbo_lapbienban').attr("readonly", true);
						$('#cmnd_nguoivipham').attr("readonly", true);
						$('#ngay_nhaphoso').attr("readonly", true);
						$('#ngayhen_xuly').attr("readonly", true);
						$('#thoihan_xuly').attr("readonly", true);
						$('#hinhanh').attr("readonly", true);
						$('#mota').attr("readonly", true);
						$("#btn_hoso").attr("disabled", true);
					} else if (reponse == "already exist") {
						alert("Mã Hồ Sơ đã tồn tại, kiểm tra lại thông tin!");
					}else{
						alert("Thông tin gửi đi thiếu hoặc chưa đúng định dạng!");
					}
				}
			});
			event.preventDefault();
		});

		$('#btn_tangvat').click(function() {
			var temp = $('#ma_hoso').val();
			$('#ma_hoso_tangvat').val(temp);
			$.ajax({
				method: "POST",
				url: "../controller/insert_tangvat.php",
				data: $('#form_tangvat').serialize(),
				success: function(reponse) {
					console.log(reponse);
					if (reponse == "insert error") {
						alert("Thông tin gửi đi thiếu hoặc chưa đúng định dạng!");
						
					} else if (reponse == "insert success") {
						alert("Thêm Tang Vật Thành Công");
						$('#ma_tangvat').val("");
						$('#ten_tangvat').val("");
						$('#thoigian_tamgiu').val("");
						$('#mota').val("");
						
						$.ajax({
							type: "POST",
							url: "../controller/loadTangVat.php",
							data: {
								ma_hoso: "" + $('#ma_hoso').val()
							},
							dataType: "text",
							success: function(text) {
								var str = document.querySelectorAll('.res_tangvat');
								for (i = 0; i < str.length; i++) {
									str[i].remove();
								}
								$('#res_tv').prepend(text);
							}
						});
					} else if (reponse == "already exist") {
						alert("Mã Tang Vật đã tồn tại, Kiểm tra và nhập lại Mã Tang Vật!");
					}
				}
			});
			event.preventDefault();
		});
		$('#btn_chitiet').click(function(){
			var temp = $('#ma_hoso').val();
			$('#mahoso_loivipham').val(temp);
			$.ajax({
				method:"POST",
				url:"../controller/insert_chiTietLoi.php",
				data:$('#form_chitietloi').serialize(),
				success: function(reponse){
					if(reponse == "insert error"){
						alert("Thông tin gửi đi thiếu hoặc chưa đúng định dạng!");
					}else if(reponse == "insert success"){
						alert("Thêm Lỗi Thành Công!");
						$('#phat_hanhchinh').val("");
						$('#mo_ta').val("");
						$.ajax({
							method:"POST",
							url:"../controller/loadChiTietLoi.php",
							data:{ma_hoso:"" + $('#ma_hoso').val()},
							dataType:"text",
							success: function(text){
								var str = document.querySelectorAll('.rs_loi');
								for (i = 0; i < str.length; i++) {
									str[i].remove();
								}
								$('#res_loi').prepend(text);
							}
						});
					}
				}
			});
			event.preventDefault();
		});
		$('#btn_success').click(function(){
			var result = confirm("Bạn đã chắc chắn điền đầy đủ thông tin hồ sơ chưa? Bấm OK để hoàn tất/ Bấm Hủy để tiếp tục!");
			if(result){
				location.reload()
			}else{
				return;
			}
		});
	</script>
</body>

</html>