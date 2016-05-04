<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kiwanis Field | About</title>
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<link rel="stylesheet" href="fancybox/jquery.fancybox.css?v=2.1.3" type="text/css" media="screen" />
<script type="text/javascript" src="fancybox/jquery.fancybox.pack.js?v=2.1.3"></script>
<script type="text/javascript" src="js/jquery.fullscreen-0.3.5.min.js"></script>
<link href="css/theme.css" rel="stylesheet" type="text/css" />
<style type="text/css">
	.img {
		border:none;
		margin-right:10px;
		margin-bottom:10px;
	}
	
	.Message {
		font-style:italic;
	}
	
	.LogoFS {
		background-color:#002F5F;
	}
	
	.LogoIMG {
		display:none;
		position:absolute;
		width:100%;
		max-width:1920px;
		vertical-align:middle;
	}
</style>
<script type="text/javascript">
	$(".fb").fancybox();
	
	var firstFullScreen = false;
	
	$(document).bind('fscreenchange', function(e, state, elem) {
		if ($.fullscreen.isFullScreen()) {
			var logo = $(".LogoIMG");
			if(!firstFullScreen) {
				logo.position({
  					my: "center center",
					of: ".LogoFS"
				});
				firstFullScreen = true;
			}
			logo.show();
		} else {
			var logo = $(".LogoIMG");
			logo.hide();
		}
	});
					
	function fullScreenLogo() {
		$(".LogoFS").fullscreen();
	}
</script>
</head>
<body>
<?php include('header.php'); ?>
<div class="LogoFS"><img class="LogoIMG" src="img/KFFS.png"/></div>
<div class="Content">
	<div class="Box">
    	<div class="BoxHeader" onclick="fullScreenLogo()">Mission Statement</div>
        <div class="Para">
        The Kiwanis Field Committee exists to raise the funds necessary to build a state of the art, multi-purpose athletic facility. The Kiwanis Field Commitee will create a proposal that meets the needs of our community partners and users of the facility.
        </div>
        <div class="Bottom"></div>
    </div>
    <div class="Box">
    	<div class="BoxHeader">Facility Elements</div>
        <div class="Sentence">
        	Kiwanis Field will be built on the back campus of Pauline Johnson Collegiate and will include:
            <div class="TwoColumns">
            	<div class="ListContainer">
                	<ul class="List">
            			<li>An 8-lane rubberized track</li>
              			<li>A synthetic turf field</li>
                		<li>Multiple sets of permanent bleachers</li>
                		<li>Light standards for night time use</li>
                		<li>Permanent change rooms and press box</li>	
                		<li>An electronic scoreboard</li>
                		<li>Fencing around the perimeter of the facility</li>
                		<li>A permanent sign for visibility on the main thoroughfare (Colborne St. East)</li>
                		<li>Improvements to the parking lot</li>
                		<li>Suitability for Special Olympics</li>
            		</ul>
               	</div>
           	</div>
        </div>
        <div class="Bottom"></div>
   	</div>
   	<div class="Box">
    	<div class="BoxHeader">Facility Visuals</div>
        <div class="Para">
        	<div class="Message">Click to enlarge</div>
         	<div class="ImageContainer">
               <a href="img/concept2.png" class="fb">
                	<img src="img/concept2_small.png" class="img"></img>
              	</a>
                <a href="img/liveshot1.png" class="fb">
                	<img src="img/liveshot1_small.png" class="img"></img>
              	</a>
           	</div>
     	</div>
     	<div class="Bottom"></div>
   	</div>
</div>
<?php include('footer.php'); ?>
</body>
</html>