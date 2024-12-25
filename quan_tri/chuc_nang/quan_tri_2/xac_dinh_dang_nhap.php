<?php
if(!isset($bien_bao_mat)){exit();}
function thong_bao_abc($c)
{
    $lien_ket_trang_truoc=$_SERVER['HTTP_REFERER'];
    ?>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Thông báo</title>
    </head>
    <body>
    <style type="text/css">
        a.trang_truoc_c8w{text-decoration:none;color:blue;font-size:36px;margin-left:50px}
        a.trang_truoc_c8w:hover{color:red;}
    </style>
    <br><br><br><br>
    <a href="<?php echo $lien_ket_trang_truoc; ?>" class="trang_truoc_c8w" >Bấm vào đây để trở về trang trước</a>
    <script type="text/javascript">
        alert("<?php echo $c; ?>");
    </script>
    </body>
    </html>
    <?php
    exit();
}
function trang_truoc_abc()
{
    ?>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Đang chuyển về trang trước</title>
    </head>
    <body>
    <script type="text/javascript">
        window.history.back();
    </script>
    </body>
    </html>
    <?php
}

if(isset($_POST['dang_nhap_quan_tri']))
{
    $mysqli = new mysqli("xoaserver.mysql.database.azure.com", "sqladmin", "#Nqthlr123", "ban_hang");
    if ($mysqli->connect_errno) {
        echo "Không kết nối được đến MySQL: " . $mysqli->connect_error;
        exit();
    }

    $ky_danh = $_POST['ky_danh'];
    $ky_danh = str_replace("'","",$ky_danh);
    $ky_danh = str_replace('"',"",$ky_danh);

    $mat_khau = ($_POST['mat_khau']);
    $mat_khau = ($mat_khau);

    $tv = "SELECT COUNT(*) FROM thong_tin_quan_tri WHERE ky_danh='$ky_danh' AND mat_khau='$mat_khau'";
    $result = $mysqli->query($tv);
    $tv_2 = $result->fetch_array();
    if($tv_2[0] == 1)
    {
        $_SESSION['ky_danh'] = $ky_danh;
        $_SESSION['mat_khau'] = $mat_khau;
    }
    else
    {
        thong_bao_abc("Thông tin nhập vào không đúng");
    }

    $mysqli->close();
    trang_truoc_abc();
}

if(isset($_SESSION['ky_danh']))
{
    $ky_danh = $_SESSION['ky_danh'];
    $mat_khau = $_SESSION['mat_khau'];

    $mysqli = new mysqli("xoaserver.mysql.database.azure.com", "sqladmin", "#Nqthlr123", "ban_hang");
    if ($mysqli->connect_errno) {
        echo "Không kết nối được đến MySQL: " . $mysqli->connect_error;
        exit();
    }

    $tv = "SELECT COUNT(*) FROM thong_tin_quan_tri WHERE ky_danh='$ky_danh' AND mat_khau='$mat_khau'";
    $result = $mysqli->query($tv);
    $tv_2 = $result->fetch_array();
    if($tv_2[0] == 1)
    {
        $xac_dinh_dang_nhap = "co";
    }

    $mysqli->close();
}
?>
