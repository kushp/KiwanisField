<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/style.css" />
<script type="text/javascript">
	$(document).ready(function() {
		$('.Copyright').hover(function() {
			$(this).animate({color: 'white'},500);
		}, function() {
			$(this).animate({color: '#E6E8FA'},500);
		});
		
		$('.FooterLinks a').hover(function() {
			$(this).animate({color: 'white'},500);
		}, function() {
			$(this).animate({color: '#E6E8FA'},500);
		});
		
		$('.FLogo').hover(function() {
			$(this).animate({opacity: 1},1000);
		}, function() {
			$(this).animate({opacity: 0.65},1000);
		});
	});
</script>
</head>
<body>
<div class="Footer">
	<div class="FooterLinks">
    	<a href="index.php">Home</a> - <a href="news.php">News</a> - <a href="about.php">About</a> - <a href="benefits.php">Benefits</a> - <a href="partners.php">Partners</a> - <a href="donors.php">Donors</a> - <a href="donate.php">Donate</a> - <a href="contact.php">Contact</a>
    </div>
	<div class="Copyright">
    	© 2016 Kiwanis Field. All rights reserved.
    </div>
    <div class="FooterLogosContainer">
  		<table>
          	<td>
            	<marquee style="overflow:hidden; width:900px;" onmouseover="stop()" onmouseout="start()">
    			<ul class="FooterLogos">
                	<li><a target="_blank" class="FLogo" style="display:block;background-image:url(img/KIWANIS_O.png);height:100px;width:174px;" href="http://sites.kiwanis.org/kiwanis/en/home.aspx"></a></li>
    				<li><a target="_blank" class="FLogo" style="display:block;background-image:url(img/GEDSB_O.png);height:100px;width:179px;" href="http://granderie.ca"></a></li>
                    <li><a target="_blank" class="FLogo" style="display:block;background-image:url(img/BRANTFORD_O.png);height:100px;width:250px;" href="http://brantford.ca"></a></li>
                    <li><a target="_blank" class="FLogo" style="display:block;background-image:url(img/TRILLIUM.png);height:100px;width:210px;" href="http://www.otf.ca/en"></a></li>
   				</ul>
                </marquee>
        	</td>
       	</table>
   	</div>
</div>
</body>
</html>