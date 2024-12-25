<!DOCTYPE html>
<html>
<head>

  <!-- Thêm liên kết CSS của Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<br><br>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6">
			<h2>ĐĂNG NHẬP QUẢN TRỊ VIÊN</h2>
			<form method="post">
				<div class="form-group">
					<label for="ky_danh">Ký danh:</label>
					<input type="text" class="form-control" id="ky_danh" name="ky_danh">
				</div>
				<div class="form-group">
					<label for="mat_khau">Mật khẩu:</label>
					<input type="password" class="form-control" id="mat_khau" name="mat_khau">
				</div>
				<input type="hidden" name="dang_nhap_quan_tri" value="dang_nhap_quan_tri">
				<button type="submit" class="btn btn-primary">Đăng nhập</button>
			</form>
		</div>
	</div>
</div>

<!-- Thêm liên kết JavaScript của Bootstrap -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>