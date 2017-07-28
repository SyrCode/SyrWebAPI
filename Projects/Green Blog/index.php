<html>
<head>
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/nivo-slider/nivo-slider.css" type="text/css" />
	<link rel="stylesheet" href="css/nivo-slider/default/default.css" type="text/css" />
	<link rel="stylesheet" href="css/navigation.css" type="text/css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.pack.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(window).load(function() {
		    $('#slider').nivoSlider({
			effect: 'boxRainGrow',
			pauseOnHover: true,
			pauseTime: 3000,
			animSpeed: 500
		    });
		});
	</script>
</head>
<body>
	<div id="leftofslider">
	</div>
	
	<div id="rightofslider">
	</div>
	
	<div id="headerbg">
	</div>
	
	<div id="navpos">
		<div id='cssmenu'>
			<ul>
			   <li><a href='#'><span>Home</span></a></li>
			   <li class='has-sub'><a href='#'><span>Web-Stuff</span></a>
				  <ul>
					 <li><a href='#'><span>Templates</span></a>
						<ul>
						   <li><a href='#'><span>Placeholder</span></a></li>
						   <li><a href=""><span>Placeholder</span></a></li>
						   <li class='last'><a href='#'><span>Placeholder</span></a></li>
						</ul>
					 </li>
					 
					 <li class='has-sub'><a href='#'><span>CSS-Stuff</span></a>
						<ul>
						   <li><a href='#'><span>Formulare</span></a></li>
						   <li><a href=""><span>DIV-Boxen</span></a></li>
						   <li class='last'><a href='#'><span>Spielereien</span></a></li>
						</ul>
					 </li>
				  </ul>
			   </li>			   
			   <li class='last'><a href='#'><span>Placeholder</span></a>
					<ul>
					   <li><a href='#'><span>Placeholder</span></a></li>
					   <li><a href=""><span>Placeholder</span></a></li>
					   <li class='last'><a href='#'><span>Placeholder</span></a></li>
					</ul>
			   </li>
			</ul>
		</div>
	</div>	
		
	<div id="sliderbg">
		<div class="slider-wrapper theme-default">
			<div class="ribbon"></div>
				<div id="slider" class="nivoSlider">
					<img src="images/slide1.jpg" alt="" />
					<img src="images/slide2.jpg" alt="" />
					<img src="images/slide3.jpg" alt="" />
					<img src="images/slide4.jpg" alt="" />
				</div>
			</div>
		</div>
	</div>
	
	<div id="presentus">
		<div id="box" class="col1">
			<p class="boxtitle">Column 1</p>
			<p class="boxsep"></p>
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
		</div>
		<div id="box" class="col2">
			<p class="boxtitle">Column 2</p>
			<p class="boxsep"></p>
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
		</div>
		<div id="box" class="col3">
			<p class="boxtitle">Column 3</p>
			<p class="boxsep"></p>
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
		</div>
	</div>
	
	<div id="content">
		<p class="contenttitle">Willkommen!</p>
		<p class="contentsubtitle">Hier findest du alles rund ums Web!</p>
		<hr class="contentsep">
		<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam</p>
		<p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
		<p>sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos</p>
		<p>justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
	</div>
</body>
</html>