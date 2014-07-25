<!DOCTYPE html>
<html>
<head>
	<title>Le Fernan Website</title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<style>
	#background 
	{ 
		position: fixed; 
		right: 0; bottom: 0;
		min-width: 100%; 
		min-height: 130%;
		width: auto; 
		height: auto; 
		z-index: -100;
		background: url(./img/supergrid.gif) no-repeat;
		background-size: cover; 
	}
	@font-face {
  		font-family: "Highlander";
    	src: url(./fonts/Highlander.ttf) format("truetype");
	}

	.construction
	{
		margin-top: 8%;
		text-align: center;
	}

	.welcome
	{
		margin-top: 10%;
		text-align: center;
	}

	h1
	{
		font-family: "Highlander";
		font-weight: 600;
		color: #FFFFFF;
		text-shadow: 5px 5px 5px rgb(110, 110, 110);
		font-size: 60px;
		font-style: bold;
	}
	</style>
</head>
<body>
	<div class="welcome">
		<a href="#"><img id="logo" src="./img/logo.png" width="1000px" height="200px"></a>
	</div>
	<div class="construction">
		<img src="./img/Under_Construction_Bar.gif">
	</div>
	<div id="background"></div>
	<script type="text/javascript">
	$(document).ready(function()
	{
		$("#logo").click(function()
		{
			$("#logo").fadeOut("slow");
		});
	});
	</script>
</body>
</html>