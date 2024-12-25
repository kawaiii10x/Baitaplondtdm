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
                    	<li><span  style="color:red;"class="glyphicon glyphicon-earphone"></span> Liên hệ 1900-931-JQK</li>
                        
                    </ul>
                </div>
                <div class="header_center">
                	<?php include("chuc_nang/tim_kiem/vung_tim_kiem.php");?>
                </div>
                <div class="header_right">
                	<ul>
                    	
                		<?php
							
							if(isset($_SESSION['username'])){
								echo"<li>";
								echo "Chào ".$_SESSION['username'];?><a href="index.php"><b><i> thoát</i></b></a></li>
							<?Php
								session_destroy();
								}else{
								echo "";?><li> <a href="login_SignUp.php"><span class="glyphicon glyphicon-user"></span></a></li>
							<?Php
							}	
						?>		
                    	
                    </ul>  
                    
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
                    
                    <div class="conten_right">
                    		<div style="border:1px solid #000; color:#000; text-align:justify; padding:5px;">
                            	<h4>Hướng dẫn mua hàng</h4>

                                       <b><i style="color:#090;">Đón tiếp các bạn là vinh hạnh của chúng tôi.<br>Hãy đến cửa hàng để có được trải nghiệm dịch vụ tốt nhất!</i></b><br>
                                 Shop mở cửa từ 8h - 21h hàng ngày<br>
                                Số nhà 484 Lạch Tray, Ngô Quyền, Hải Phòng, Việt Nam<Br>
                            </div>
                			<br>
                            <div style=" width:780">
							<iframe width="780" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=%C4%90%E1%BA%A1i%20H%E1%BB%8Dc%20H%C3%A0ng%20H%E1%BA%A3i%20Vi%E1%BB%87t%20Nam%20H%E1%BA%A3i%20Ph%C3%B2ng+(Just%20Map)&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> <a href='https://healthnewsnet.de/'>HealthNews by DoktorWeigl.de</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=6d88e6d1af6c65763db453cec1fccec17fed0297'></script>
                            </div>
                            
                	</div>		
            </div>
            <!-- end conten--->
				<?php include('footer.php');?>	
					
                    
				
		</center>
	</body>
</html>



