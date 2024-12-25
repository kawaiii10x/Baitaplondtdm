<?php 
    if(!isset($bien_bao_mat)){exit();}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Thêm Menu Dọc</title>
</head>
<body>

<form action="" method="post">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0">Thêm Menu Dọc</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="ten" class="col-sm-3 col-form-label">Tên:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="ten" name="ten" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-9 offset-sm-3">
                                <button type="submit" name="bieu_mau_them_menu_doc" class="btn btn-primary btn-lg">Thêm Menu</button>
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
