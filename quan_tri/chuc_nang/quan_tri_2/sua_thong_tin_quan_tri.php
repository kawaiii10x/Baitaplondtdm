<?php
if (!isset($bien_bao_mat)) {
    exit();
}

$tv = "SELECT * FROM thong_tin_quan_tri WHERE id='1'";
$tv_1 = mysqli_query($conn, $tv);
$tv_2 = mysqli_fetch_array($tv_1);
$ky_danh = $tv_2['ky_danh'];

if (isset($_POST['bieu_mau_sua_thong_tin_quan_tri'])) {
    $ky_danh_moi = $_POST['ky_danh'];
    $mat_khau = $_POST['mat_khau'];

    // Kiểm tra nếu mật khẩu nhập vào không được thay đổi
    if ($mat_khau == 'khong_doi') {
        // Giữ nguyên mật khẩu cũ
        $query = "UPDATE thong_tin_quan_tri SET ky_danh='$ky_danh_moi' WHERE id='1'";
    } else {
        // Cập nhật cả ký danh và mật khẩu mới
        $mat_khau = md5($mat_khau);
        $query = "UPDATE thong_tin_quan_tri SET ky_danh='$ky_danh_moi', mat_khau='$mat_khau' WHERE id='1'";
    }

    mysqli_query($conn, $query);

    // Chuyển về trang trước sau khi sửa thông tin
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit();
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Sửa Thông Tin Quản Trị</title>
</head>

<body>

    <form action="" method="post">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h3 class="mb-0">Sửa Thông Tin Quản Trị</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="ky_danh" class="col-sm-2 col-form-label">Ký danh:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="ky_danh" name="ky_danh" value="<?php echo $ky_danh; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="mat_khau" class="col-sm-2 col-form-label">Mật khẩu:</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="mat_khau" name="mat_khau" value="khong_doi">
                                    <small class="form-text text-muted">
                                     
                                    </small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 offset-sm-2">
                                    <input type="submit" name="bieu_mau_sua_thong_tin_quan_tri" value="Sửa" class="btn btn-primary btn-lg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
