<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kiwanis Field | Construction</title>
<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="fancybox/jquery.fancybox.pack.js?v=2.1.3" type="text/javascript"></script>
<script src="js/freewall.js" type="text/javascript"></script>
<link rel="stylesheet" href="fancybox/jquery.fancybox.css?v=2.1.3" type="text/css" media="screen" />
<link href="css/theme.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
	$(document).ready(function() {
		var wall = new freewall(".ImageContainer");
		var allItems = $(".Item");
		wall.fixSize({
    		block: allItems,
    		width: 290,
    		height: 218
		});
		wall.fitWidth();
		
		$(".fb").fancybox();
	});
</script>
<style type="text/css">
	.Spacer {
		height: 10px;
	}
	
	.ImagesContainer {
		width: 100%;
		margin: auto;
	}
	
	.Item {
		width: 290px;
		height: 218px;
	}
</style>
</head>
<body>
<?php include('header.php'); ?>
<div class="Content">
	<div class="Spacer"></div>
	<div class="ImageContainer" data-fixSize=true>
       	<div class="Item">
       		<a href="img/construction/11.jpg" class="fb">
        		<img src="img/construction/11_small.jpg" class="img"></img>
       		</a>
       	</div>
        <div class="Item">
       		<a href="img/construction/10.jpg" class="fb">
        		<img src="img/construction/10_small.jpg" class="img"></img>
       		</a>
       	</div>
        <div class="Item">
       		<a href="img/construction/9.jpg" class="fb">
        		<img src="img/construction/9_small.jpg" class="img"></img>
       		</a>
       	</div>
       	<div class="Item">
       		<a href="img/construction/8.jpg" class="fb">
        		<img src="img/construction/8_small.jpg" class="img"></img>
       		</a>
       	</div>
      	<div class="Item">
       		<a href="img/construction/7.jpg" class="fb">
        		<img src="img/construction/7_small.jpg" class="img"></img>
       		</a>
       	</div>
      	<div class="Item">
       		<a href="img/construction/6.jpg" class="fb">
        		<img src="img/construction/6_small.jpg" class="img"></img>
       		</a>
       	</div>
      	<div class="Item">
       		<a href="img/construction/5.jpg" class="fb">
        		<img src="img/construction/5_small.jpg" class="img"></img>
       		</a>
       	</div>
      	<div class="Item">
       		<a href="img/construction/4.jpg" class="fb">
        		<img src="img/construction/4_small.jpg" class="img"></img>
       		</a>
       	</div>
        <div class="Item">
       		<a href="img/construction/3.jpg" class="fb">
        		<img src="img/construction/3_small.jpg" class="img"></img>
       		</a>
       	</div>
        <div class="Item">
        	<a href="img/construction/2.jpg" class="fb">
           		<img src="img/construction/2_small.jpg" class="img"></img>
       		</a>
        </div>
        <div class="Item">
    		<a href="img/construction/1.jpg" class="fb">
        		<img src="img/construction/1_small.jpg" class="img"></img>
       		</a>
        </div>
 	</div>
</div>
<?php include('footer.php'); ?>
</body>
</html>
