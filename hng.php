<!DOCTYPE html>
<html>
<head>
	<style>
	body{
		margin: 0px;
			font-weight: bold;
	}
		nav{
			background: #C4C4C4;
			padding: 12px;
		}
		h1{
			color: #19CA64;
		}
		h5{
			color: #2C29C0;
		}
		footer{
			padding: 12px;
			background:#C4C4C4;
		}
	</style>
	<title>HNG</title>
</head>
<body>
<nav>
	Navbar 
</nav>
<h2>Welcome to my page</h2>
<div class="center">
	<center>	
	<h1>HNG INTERNSHIP 2018</h1>
	<h5>Date and Time</h5>
	<h1>
	<?php  echo date('D-F-Y')."<br> "; 
	echo date(' h:i:s')?>
	</h1>
	</center>
</div>
<footer>
	 &copy copyright All Right reserved. Abdullahi cap
</footer>
</body>
</html>