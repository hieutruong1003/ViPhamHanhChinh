<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng Nhập</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
</head>
<body>
	<?php 
		session_start();
		
		session_destroy();
	?>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Đăng Nhập</div>
				<div class="panel-body">
					<form role="form" method="POST" action="./controller/login.php">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="User name" name="userName" autofocus="" required>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="passWord" type="password" required>
							</div>
							<div class="form-group">
								<div class="checkbox-inline">
									<label for="admin">
										<input type="radio" id="admin" class="form-check-input" value="admin" name="loaiCB" checked> Admin
									</label>
								</div>
								<div class="checkbox-inline">
									<label for="cbHoSo">
										<input type="radio" id="cbHoSo" class="form-check-input" value="cbhoso" name="loaiCB"> CB Hồ Sơ
									</label>
								</div>
								<div class="checkbox-inline">
									<label for="cbKho">
										<input type="radio" id="cbKho" class="form-check-input" value="cbkho" name="loaiCB"> CB Kho
									</label>
								</div>
							</div>
							<div class=" form-group">
								<button type="submit" href="" class="btn-block btn btn-primary center-block">Login</button>
							</div>
							<a href="#" >Forgot password?</a>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->
</body>

</html>