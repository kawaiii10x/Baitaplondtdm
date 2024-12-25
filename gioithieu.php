<?php
	session_start();
    include("ket_noi.php");	
    include("chuc_nang/ham/ham.php");	
	if(isset($_POST['thong_tin_khach_hang']))
	{
		include("chuc_nang/gio_hang/thuc_hien_mua_hang.php");
	}
	if(isset($_POST['cap_nhat_gio_hang']))
	{
		include("chuc_nang/gio_hang/cap_nhat_gio_hang.php");
		trang_truoc();
	}	
?> 
<html>
	<head>
		<meta charset="UTF-8">
		<title>Web bán hàng</title>
		<link rel="stylesheet" type="text/css" href="giao_dien/giao_dien.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>
    	
		<center>
        	<div class="header">
            	<div class="header_left">
                	<ul>
                    	<li><span  style="color:red;"class="glyphicon glyphicon-earphone"></span>Liên hệ 1900-931-JQK</li>
                        
                    </ul>
                </div>
                <div class="header_center">
                	<?php include("chuc_nang/tim_kiem/vung_tim_kiem.php");?>
                </div>
                <div class="header_right">
                    
                         <a href="login_SignUp.php"> <span class="glyphicon glyphicon-user"></span>Tài Khoản</a>
                    
                </div>
        	</div>
			<div style=" text-align:center; margin-top:25px; margin-bottom:15px;">
            	<a href="index.php"><img src="hinh_anh/banner/Logo4.png"></a>
            </div>
			<div class="menu">
           				<?php
							include("chuc_nang/menu_ngang/menu_ngang.php");
						?> 
                        
			</div>
            <div class="conten">
            		<div class="conten_left">
                        <div class="nhungdanhmuc">
                        	<div class="tendanhmuc">Danh mục sản phẩm </div>
                            <div class="noidung" style="text-align:left;">
                            	<?php include("chuc_nang/menu_doc/menu_doc.php"); ?>
                             </div>   
                        </div>   
                        
                        <div class="nhungdanhmuc">
                        	<div class="tendanhmuc">Sản Phẩm Nổi Bật </div> 
                            
                        	<?php include("chuc_nang/san_pham/noi_bat.php");?>
                            </div>
						</div>		
                        
                    </div>
                    
                    <div class="conten_right" style="text-align:justify; color:#000; border:1px solid #000;">
                    		<div class=gioithieu style="padding:10px; color:#6A6A6A;">
                            	<div style="font-weight:bold; font-size:25px; color:#000;">GIỚI THIỆU</div><br>

                                       <p><b>ABCXYZ SHOP</b> – shop thời trang nam xuất khẩu cao cấp tại Hải Phòng. Đến với <b>ABCXYZ Shop</b>, bạn sẽ không phải băn khoăn về chất lượng cũng như giá cả các mặt hàng quần áo nam.</p>
<p>Với nhiều năm kinh nghiệm về thị trường thời trang nam, chúng tôi đã không ngừng tìm kiếm và cập nhật những mặt hàng thời trang nam tốt nhất, chất lượng nhất tại các công ty may hàng đầu trên khắp Việt Nam, giá cả cực kỳ cạnh tranh. Hãy đến <b>ABCXYZ Shop</b> để cập nhật thường xuyên những xu hướng thời trang nam mới nhất, đẹp nhất, độc nhất dành riêng cho mình nhé.</p>

<p>ABCXYZ Shop cung cấp tất cả những mặt hàng thời trang nam xuất khẩu, vnxk hàng hiệu: áo sơ mi, áo phông, quần bò, quần kaki, quần ngố, đồ lót,.. giày dép nam và rất nhiều những phụ kiện khác: dây lưng, ví da, tất nam, túi… và còn rất nhiều những mặt hàng khác. Quá đa dạng và phong phú phải không! Còn chờ gì nữa, hãy nhanh chân tới ngay <b>ABCXYZ Shop</b> để cập nhật ngay cho mình xu hướng thời trang nam mới nhất nhé. ABCXYZ Shop tin chắc rằng bạn sẽ hài lòng khi sử dụng những mặt hàng tại đây.</p>
                            <hr size="30px" width="100%">
                            <hr size="30px" width="100%">
                			<br>
                            484 Lạch Tray, Kênh Dương, Lê Chân, TP Hải Phòng <br>
                            ĐT: 1900-931-JQK (Zalo)<br>
                            * Bán buôn : 1900-931-JQK (Zalo / viber)<br>
                            
                            facebook: <a href="https://www.facebook.com/phongdaotao.dhhhvn/?locale=vi_VN">https://www.facebook.com/abcxyz/</a> <br>
                            website: <a href="https://www.abcxyz.com/">abcxyz.com</a>
                          </div>  
                	</div>		
            </div>
            <!-- end conten--->
				<?php include('footer.php');?>	
					
                    
				
		</center>
	</body>
</html>
