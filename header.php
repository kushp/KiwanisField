<!DOCTYPE html>
<html xmlns:fb="http://ogp.me/ns/fb#">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/smoothness/jquery-ui-1.10.0.custom.min.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
<style>
	.Hover {
		background-color:white;
		color:black !important;
		opacity:1.0;
	}	
</style>
<script type="text/javascript">
	$(document).ready(function() {
		$('.MEffect').hover(function() {
			$(this).animate({opacity: 1},700);
		}, function() {
			$(this).animate({opacity: 0},700);
		});
		$(".Link").hover(function() {
			$(this).animate({color:'#002F5F'},500);
		}, function() {
			$(this).animate({color:'#0000FF'},500);
		});
		//$('.Menu ul li a').hover(function() {
			//$(this).toggleClass('Hover',500);
			//$(this).animate({backgroundColor: 'white', color: 'black'},700);
		//}, function() {
			//$(this).animate({'filter:progid':'DXImageTransform.Microsoft.gradient(startColorstr=#7FFFFFF,endColorstr=#7FFFFFFF)'},700);
			//$(this).css({'background': 'transparent', 'color': 'white'});
			//$(this).toggleClass('Hover',500);
			//$(this).animate({backgroundColor:  $(this).parent().css("backgroundColor") });
			//$(this).animate({backgroundColor: 'rgba(0,0,0,0)', color: 'white'},500);
			
		//});
	});
</script>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<div class="Header">
    	<div class="SocialBar">
    		<div class="Like"><fb:like href="http://www.facebook.com/pages/Kiwanis-Field/159407244089401" send="false" layout="button_count" width="50" show_faces="false" font="segoe ui"></fb:like></div>
            <div class="Follow"><a href="https://twitter.com/KiwanisField" class="twitter-follow-button" data-dnt="true" data-show-screen-name="false" data-show-count="false">Follow</a></div>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
       	</div>
        <div class="ConstructionBar">
        	<div class="ConstructionLink"><a href="construction.php">Construction Updates</a></div>
        </div>
        <a href="index.php" style="position:relative;display:block;border:none;height:112px;width:328px;background-image:url(img/logo.png);margin-left:auto;margin-right:auto;top:6px;"></a>
        <div style="clear: both"></div>
    </div>
 	<div class="Header MenuContainer">
        <div class="Menu">
        	<table>
            	<td>
                	<ul>
            			<li><a href="index.php">Home</a><a class="MEffect" href="index.php">Home</a></li>
               			<li><a href="about.php">About</a><a class="MEffect" href="about.php">About</a></li>
               			<li><a href="partners.php">Partners</a><a class="MEffect" href="partners.php">Partners</a></li>
                        <li><a href="donors.php">Donors</a><a class="MEffect" href="donors.php">Donors</a></li>
               			<li><a href="donate.php">Donate</a><a class="MEffect" href="donate.php">Donate</a></li>
               			<li><a href="contact.php">Contact</a><a class="MEffect" href="contact.php">Contact</a></li>
           			</ul>
               	</td>
           	</table>
       	</div>
      </div>
</body>
</html>
