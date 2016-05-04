<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kiwanis Field | Elimination Draw</title>
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/bjqs-1.3.min.js" type="text/javascript"></script>
<script src="fancybox/jquery.fancybox.pack.js?v=2.1.3" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.1/masonry.pkgd.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="fancybox/jquery.fancybox.css?v=2.1.3" type="text/css" media="screen" />
<link href="css/bjqs.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="css/theme.css" rel="stylesheet" type="text/css" />
<style type="text/css">
	.EliminationDrawNumbers {
		margin-left: auto;
		margin-right: auto;
		text-align: center;
		margin-top: 4px;
	}
	
	.EliminationDrawNumber {
		display: block;
		background-color: #EAEAEA;
		color: #002F5F;
		width: 86px;
		height: 30px;
		line-height: 30px;
		margin-bottom: 4px;
		font-size: 24px;
		font-weight: bolder;
		text-align: center;
	}
	
	.EliminationDrawNumber:hover {
		background-color:#002F5F;
		color: white;
		cursor: default;
	}
</style>
<script type="text/javascript">
	$(document).ready(function() {
		// Super hacky elimination draw helper to display numbers
		var drawContainer = $(".EliminationDrawNumbers");
		var remainingNumbers = 200;
		for(var i = 1; i < remainingNumbers + 1; i++) {
			drawContainer.append("<div class='EliminationDrawNumber' id='Draw" + i + "'>" + i + "</div>");
		}
		$('.EliminationDrawNumbers').masonry({
          	columnWidth: 86,
           	gutter: 4,
			isFitWidth: true,
           	itemSelector: '.EliminationDrawNumber'
       	});
		$('.EliminationDrawNumber').click(function() {
			$(this).remove();
			remainingNumbers--;
			if(remainingNumbers == 150) {
				$('.EliminationDrawNumber').css({'height': '40px', 'line-height': '40px'});
			} else if(remainingNumbers == 100) {
				$('.EliminationDrawNumber').css({'height': '60px', 'line-height': '60px'});
			} else if(remainingNumbers == 70) {
				$('.EliminationDrawNumber').css({'width': '96px', 'font-size': '24px'});
				$('.EliminationDrawNumbers').masonry({
          			columnWidth: 96,
           			gutter: 4,
					isFitWidth: true,
           			itemSelector: '.EliminationDrawNumber'
       			});
			} else if(remainingNumbers == 50) {
				$('.EliminationDrawNumber').css({'width': '108.5px', 'height' : '80px', 'line-height': '80px', 'font-size': '28px'});
				$('.EliminationDrawNumbers').masonry({
          			columnWidth: 108.5,
           			gutter: 4,
					isFitWidth: true,
           			itemSelector: '.EliminationDrawNumber'
       			})
			} else if(remainingNumbers == 40) {
				$('.EliminationDrawNumber').css({'width': '124.57px', 'height' : '100px', 'line-height' : '100px', 'font-size': '34px'});
				$('.EliminationDrawNumbers').masonry({
          			columnWidth: 124.57,
           			gutter: 4,
					isFitWidth: true,
           			itemSelector: '.EliminationDrawNumber'
       			})
			} else if(remainingNumbers == 26) {
				$('.EliminationDrawNumber').css({'width': '176px', 'height' : '120px', 'line-height' : '120px', 'font-size': '42px'});
				$('.EliminationDrawNumbers').masonry({
          			columnWidth: 176,
           			gutter: 4,
					isFitWidth: true,
           			itemSelector: '.EliminationDrawNumber'
       			})
			} else if(remainingNumbers == 12) {
				$('.EliminationDrawNumber').css({'width': '221px', 'height' : '200px', 'line-height' : '200px', 'font-size': '72px'});
				$('.EliminationDrawNumbers').masonry({
          			columnWidth: 221,
           			gutter: 4,
					isFitWidth: true,
           			itemSelector: '.EliminationDrawNumber'
       			})
			} else if(remainingNumbers == 8) {
				$('.EliminationDrawNumber').css({'width': '221px', 'height' : '200px', 'line-height' : '200px', 'font-size': '72px'});
				$('.EliminationDrawNumbers').masonry({
          			columnWidth: 221,
           			gutter: 4,
					isFitWidth: true,
           			itemSelector: '.EliminationDrawNumber'
       			})
			} else if(remainingNumbers == 4) {
				$('.EliminationDrawNumber').css({'width': '446px', 'height' : '325px', 'line-height' : '325px', 'font-size': '120px'});
				$('.EliminationDrawNumbers').masonry({
          			columnWidth: 446,
           			gutter: 4,
					isFitWidth: true,
           			itemSelector: '.EliminationDrawNumber'
       			})
			} else if(remainingNumbers == 1) {
				$('.EliminationDrawNumber').css({'width': '900px', 'height' : '625px', 'line-height' : '625px', 'font-size': '200px'});
				$('.EliminationDrawNumbers').masonry({
          			columnWidth: 900,
           			gutter: 4,
					isFitWidth: true,
           			itemSelector: '.EliminationDrawNumber'
       			})
			}
			
			$('.EliminationDrawNumbers').masonry('layout');
		});
	});
</script>
</head>
<body>
<?php include('header.php'); ?>
<div class="Content">
	<div class="EliminationDrawNumbers">
    </div>
</div>
<?php include('footer.php'); ?>
</body>
</html>
