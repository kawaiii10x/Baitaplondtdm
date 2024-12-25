<?php
if (!isset($bien_bao_mat)) {
    exit();
}
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="btn-group-vertical flex-column w-100">
                        <a href="?thamso=them_menu_doc" class="btn btn-primary btn-lg">Thêm menu dọc</a>
                        <a href="?thamso=them_san_pham" class="btn btn-primary btn-lg">Thêm sản phẩm</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="btn-group-vertical flex-column w-100">
                        <a href="?thamso=quan_ly_menu_doc" class="btn btn-success btn-lg">Quản lý menu dọc</a>
                     
                        <a href="?thamso=quan_ly_san_pham" class="btn btn-success btn-lg">Quản lý sản phẩm</a>
                        <a href="?thamso=hoa_don" class="btn btn-success btn-lg">Quản lý hóa đơn</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="btn-group-vertical flex-column w-100">
                        <a href="?thamso=san_pham_trang_chu" class="btn btn-info btn-lg">Sản phẩm trang chủ</a>
                        <a href="?thamso=san_pham_noi_bat" class="btn btn-info btn-lg">Sản phẩm nổi bật</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="btn-group-vertical flex-column w-100">
                        <a href="?thamso=sua_thong_tin_quan_tri" class="btn btn-warning btn-lg">Thay đổi thông tin quản trị</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>