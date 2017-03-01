<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Assignment</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="js/ddsmoothmenu.css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js"></script>
<style>
h3{ color:#F00;
	}
</style>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "smoothmenu1", 
	orientation: 'h', 
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

ddsmoothmenu.init({
	mainmenuid: "smoothmenu2", //Menu DIV id
	orientation: 'v', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu-v', //class added to menu's outer DIV
	//customtheme: ["#804000", "#482400"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

ddsmoothmenu.init({
	mainmenuid: "smoothmenu-ajax",
	orientation: 'h',
	classname: 'ddsmoothmenu',
	customtheme: ["#1c5a80", "#18374a"], //override default menu CSS background values? Uncomment: ["normal_background", "hover_background"]
	contentsource: ["smoothcontainer", "smoothmenu.htm"] //"markup" or ["container_id", "path_to_menu_file"]
})

</script>
<script type="text/javascript" language="javascript" src="js/jquery.js"></script>
</head>
<body>
<div id="top">
	
</div>
<div id="header">
	<div id="topmenu">
    	<a href="">
        <div class="boxmenu">
            <a href="cart_show.php"><img src="images/icon_giohang.png" /></a>
           <table width="100%">
           <tr>
           <td height="30px">Giỏ hàng</td>
           </tr>
           </table>
        </div>
        </a>
            <a href="Dangnhap.php">
        <div class="boxmenu">
          <table width="100%">
           <tr>
               <td height="30px">Đăng nhâp</td>
           </tr>
          </table>
        </div>
        </a>
            <a href="Dangky.php">
         <div class="boxmenu">
           <table width="100%">
           <tr>
               <td height="30px">Đăng ký</td>
           </tr>
           </table>
        </div>
        </a>
         <div style="clear:both"></div>
    </div>
    <div style="float:left; width:400px">
    <img src="images/banner camera.jpg" height="138" width="774" />
    </div>
</div>
<div id="smoothmenu1" class="ddsmoothmenu">
<ul>
    <li><a href="index.php">Trang chủ</a></li>
    <li><a href="Ongkinh_Lens.php">Khuyễn mãi</a></li>
    <li><a href="Mayanhongkinhroi.php">Máy Ảnh Du Lịch/ Máy Ảnh Ống Kính Rời</a></li>
    <li><a href="Phukienmayanh.php">Phụ Kiện Máy Ảnh</a></li>
    <li><a  href="Lienhe.php">Liên Hệ</a></li>
</ul>
<br style="clear: left" />
</div>
<div id="btmenu">
	<div style="width:660px; float:left; color:#FFF; padding-top:20px;">
    	<table width="100%">
        	<tr>
            	<td align="center"><img src="images/Canon_Logo_350_tcm14-959888.jpg" width="101" height="63" /></td>
                <td align="center"><img src="images/nikon_logo_30023.jpg" width="101" height="63" /></td>
                <td align="center"><img src="images/logo sam sung.png" width="101" height="63" /></td>
                <td align="center"><img src="images/logo sony.png" width="101" height="63" /></td>
                <td align="center"><img src="images/logo benro.png" width="101" height="63" /></td>
                <td align="center"><img src="images/logo gopro.png" width="101" height="63" /></td>
            
            </tr>
        </table>
	</div>
	<div style="float:right; width:300px; padding-top:20px;">
    	<div style="float:left; width:300px">
        	<form>
            	<input type="text" class="input" value="Tìm kiếm..." />
                <input type="submit" value=""  class="sm"/>
            </form>
        </div>
        <div style="float:left; background:url(images/call.jpg) left no-repeat; margin-top:10px; padding-top:5px; padding-bottom:15px; padding-left:50px; color:#fff000; font-family:Georgia; font-size:18px">01699999999</div>
    </div>
<div style="clear:both"></div>    
</div>
<div id="home">
<div id="left">
    <div id="namehot"><a>SẢN PHẨM BÁN CHẠY</a></div>
    <div id="contenthot">
    	<div class="cttop">
        	<div class="content">
            		<div style="float:left; width:100%; padding-top:5px; padding-bottom:10px">
                    	<table width="100%">
                        	<tr valign="top">
                            	<td width="66px"><a href=""><img src="images/1.jpg" width="69" height="66" /></a></td>
                            	<td width="10px"></td>
                            	<td><a href="" style="color:#ff2d2d; font-weight:bold; ">Canon 60D</a><br /><br />
                                <span style="color:#b2b2b2; font-size:14px; font-family:Georgia">8.800.000 VNĐ</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div style="float:left; width:100%; padding-top:5px; padding-bottom:10px">
                    	<table width="100%">
                        	<tr valign="top">
                            	<td width="66px"><a href=""><img src="images/2.jpg" width="69" height="66" /></a></td>
                            	<td width="10px"></td>
                            	<td><a href="" style="color:#ff2d2d; font-weight:bold; ">Canon EOS Kiss X5 / 600D len 18-55mm IS II</a><br /><br />
                                <span style="color:#b2b2b2; font-size:14px; font-family:Georgia">4.000.000 VNĐ</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div style="float:left; width:100%; padding-top:5px; padding-bottom:10px">
                    	<table width="100%">
                        	<tr valign="top">
                            	<td width="66px"><a href=""><img src="images/3.jpg" width="69" height="66" /></a></td>
                            	<td width="10px"></td>
                            	<td><a href="" style="color:#ff2d2d; font-weight:bold; ">GoPro Hero</a><br /><br />
                                <span style="color:#b2b2b2; font-size:14px; font-family:Georgia">2.300.000 VNĐ</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div style="float:left; width:100%; padding-top:5px; padding-bottom:10px">
                    	<table width="100%">
                        	<tr valign="top">
                            	<td width="66px"><a href=""><img src="images/4.jpg" width="69" height="66" /> </a></td>
                            	<td width="10px"></td>
                            	<td><a href="" style="color:#ff2d2d; font-weight:bold; ">Pentak Q10 len 5-15mm</a><br /><br />
                                <span style="color:#b2b2b2; font-size:14px; font-family:Georgia">2.000.000 VNĐ</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div style="float:left; width:100%; padding-top:5px; padding-bottom:10px">
                    	<table width="100%">
                        	<tr valign="top">
                            	<td width="66px"><a href=""><img src="images/5.jpg" width="69" height="66" /></a></td>
                            	<td width="10px"></td>
                            	<td><a href="" style="color:#ff2d2d; font-weight:bold; ">PEN E-PM1 </a><br /><br />
                                <span style="color:#b2b2b2; font-size:14px; font-family:Georgia">5.600.000 VNĐ</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div style="float:left; width:100%; padding-top:5px; padding-bottom:10px">
                    	<table width="100%">
                        	<tr valign="top">
                            	<td width="66px"><a href=""><img src="images/6.jpg" width="69" height="66" /></a></td>
                            	<td width="10px"></td>
                            	<td><a href="" style="color:#ff2d2d; font-weight:bold; ">Sony A6000</a><br /><br />
                                <span style="color:#b2b2b2; font-size:14px; font-family:Georgia">10.999.999 VNĐ</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                    
             </div>
        </div>
    </div>
</div>
 
    
