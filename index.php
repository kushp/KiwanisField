<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kiwanis Field | Home</title>
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/bjqs-1.3.min.js" type="text/javascript"></script>
<script src="fancybox/jquery.fancybox.pack.js?v=2.1.3" type="text/javascript"></script>
<link rel="stylesheet" href="fancybox/jquery.fancybox.css?v=2.1.3" type="text/css" media="screen" />
<link href="css/bjqs.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="css/theme.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
    var amountLeft = 52161;
	var totalNeeded = 1700000;
	var raised = totalNeeded - amountLeft;
	$(document).ready(function() {
		var person = document.getElementById("Person");
		person.style.backgroundPosition = -((1 - (raised/totalNeeded)) * 900) + 'px';
		//person.style.left = -(100 - ((raised/2000000) * 100)) +'%';
		//person.style.left = (($('.Person').offset().left - $('.Track').offset().left) - 77) + "px";
		$(".Quotes").bjqs({
			'height' : 105,
			'width' : 900,
			'showcontrols' : false,
			'showmarkers' : false,
			'randomstart' : true,
			'hoverpause' : false,
			'animduration' : 3000,
			'animspeed' : 10000
		});
	});
</script>
<style type="text/css">
	.Progress {
		position:absolute;
		display:block;
		background-color:#800000;
		height:40px;
		left:0;
		z-index:0;
	}
	
	.Field {
		position:relative;
		display:block; 
		width:900px;
		height:40px;
		line-height:40px;
		background-color:#d5e4af;
		font-size:24px;
		color:#002F5F;
		font-weight:bolder;
	}
	
	.Raised {
		position:relative;
		float:left;
		margin-left:10px;
		z-index:1;
	}
	
	.Goal {
		position:relative;
		float:right;
		margin-right:10px;
		z-index:1;
	}
	
	.Track {
		background-image:url(img/track.png);
		width:900px;
		height:67px;
		background-repeat:no-repeat;
	}
	
	.Person {
		position:relative;
		width:100%;
		height:72px;
		background-image:url(img/runner.png);
		background-repeat:no-repeat;
	}
	
	.QuotesContainer {
		position:absolute;
		background-color:#000;
		height:auto;
		width:900px;
		bottom:0;
		opacity:0.8;
		filter:alpha(opacity=80);
	}
	
	.Quotes {
		color:#FFF;
	}
	
	.QuoteHeader {
		font-weight:bold;
		margin-top:8px;
		margin-left:10px;
		margin-right:10px;
	}
	
	.Quote {
		margin-left:10px;
		margin-right:10px;
	}
</style>
</head>
<body>
<?php include('header.php'); ?>
<div class="Content">
	<div class="Box">
    	<div class="Field">
            <div class="Raised">Amount remaining to be raised: $52, 161</div>
        </div>
    	<div class="Track">
            <div class="Person" id="Person"></div>
        </div>
		<div class="Home">
        	<div class="QuotesContainer">
        		<div class="Quotes">
            		<ul class="bjqs">
                		<li>
                    		<p class="QuoteHeader">Glenn MacDonell, President, Special Olympics Ontario</p>
                        	<p class="Quote">"The building of this comprehensive facility will allow many athletes in the Brantford area who are registered with Special Olympics to practice and train at a first class facility...Special Olympics Ontario would most certainly appreciate and value the opportunity of using a facility of this nature for up-coming Special Olympics events and competitions."</p>
                  		</li>
                        <li>
                        	<p class="QuoteHeader">Chris Friel, Mayor, City of Brantford</p>
                            <p class="Quote">"A world class facility like this would be a 'breath of fresh air' to this geographic area of the city."</p>
                       	</li>
                        <li>
                        	<p class="QuoteHeader">Dave Levac, Speaker, M.P.P. Brant</p>
                            <p class="Quote">"The Kiwanis Field is a unique opportunity for community partners to work together to create a monumental addition to the city of Brantford and the local area."</p>
                       	</li>
                        <li>
                        	<p class="QuoteHeader">Phil McColeman, M.P. Brant</p>
                            <p class="Quote">"[The Kiwanis Field] enjoys widespread support from a variety of institutions and representatives throughout Brantford who are excited at the prospect of a much needed world class facility."</p>
                     	</li>
                        <li>
                        	<p class="QuoteHeader">Steve Lowe & David Watkins, Directors, Hamilton Tiger-Cats</p>
                            <p class="Quote">"With the proper facilities it would be possible [for the Hamilton Tiger-Cats] to ultimately extend our Play Action minor football program support to the city as well as Black and Gold public team practices and football clinics."</p>
                       	</li>
                        <li>
                        	<p class="QuoteHeader">Dave Neumann, City Councillor, City of Brantford</p>
                            <p class="Quote">"By partnering with the [Grand Erie District] School Board, we will ensure that this becomes…more than just a school facility, but a community facility."</p>
                       	</li>
                        <li>
                        	<p class="QuoteHeader">Susan Yates, Director, Brant County Health Unit</p>
                            <p class="Quote">"…this project will provide both the school and the broader community with the space needed to facilitate and promote activity, thereby having a positive impact on the health of our community members."</p>
                       	</li>
                        <li>
                        	<p class="QuoteHeader">Debbie Brown, Supervision of Operations, Crossing All Bridges Learning Centre</p>
                            <p class="Quote">"[Clients of Crossing All Bridges Learning Centre] can join other walking or sporting groups with similar interests that bring people together for inclusive community involvement"</p>
                       	</li>
                        <li>
                        	<p class="QuoteHeader">Catherine Camilleri, Director, Brantford Little School</p>
                            <p class="Quote">"Our children [at the Brantford Little School] come from diverse backgrounds and social economic classes and they would otherwise not have the opportunity for a safe active outdoor play space."</p>
                       	</li>
                	</ul>
          		</div>
        	</div>
    	</div>
    </div>
</div>
<?php include('footer.php'); ?>
</body>
</html>
