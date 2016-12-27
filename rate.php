<?php
//for database
include('mysql.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>SecConf</title>
	<link rel="shortcut icon" href="https://swelllinesmagdotcom.files.wordpress.com/2015/11/sad.png">
	<!--CSS-->
	<link rel="stylesheet" type="text/css" href="style1.css">
	<!--CSS end-->
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<div id="heading">
		<h1 align="center">Have a secret? Then why be silent about it?</h1>
	</div>
	<div id="nav" align="center">
	<center>
		<ul align="center">
  			<li><a href="rate.php"><p>Rate</p></a></li>
  			<li><a href="contact.php"><p>Contact</p></a></li>
  			<li><a href="about.php"><p>About</p></a></li>
  			<li><a href="submissions.php"><p>Submissions</p></a></li>
  			<li><a href="index.php"><p>Home</p></a></li>
		</ul>
	</center>
	</div>
	<div id="main">
	<form action="rated.php" method="POST">
		<br>
		<!--Wanna Style This Heading-->
		<h2 align="center" style="font-size: 170%;">Enjoyed This Site? Why Not Rate It?</h2>
		<center>
		<table border="0">
			<tr>
				<td align="center"><h3 style="color: white; font-size: 156%;" align="center">Stars</h3></td>
			</tr>
			<tr>
				<td align="center" style="paddin-top: 0px;padding-bottom: 7px;">
					<img src="imgs/star.png" width="25">
					<img src="imgs/star.png" width="25">
					<img src="imgs/star.png" width="25">
					<img src="imgs/star.png" width="25">
					<img src="imgs/star.png" width="25">
				</td>
			</tr>
			<tr>
				<td align="center" style="padding-top: 6px;">
					<input type="radio" name="st" value="1" title="Please don't give me one star!">
					<input type="radio" name="st" value="2" title="Well, I DID put a lot of effort!">
					<input type="radio" name="st" value="3" title="Hates gonna hate.">
					<input type="radio" name="st" value="4" title="Well, I think I deserve a 5">
					<input type="radio" name="st" value="5" title="Thanks!">
				</td>
			</tr>
			<tr>
				<td align="center"><h3 style="color: white; font-size: 156%;" align="center">Name</h3></td>
			</tr>
			<tr align="center">
				<td align="center"><input type="text" name="fname" placeholder="Your Name"></td>
			</tr>
			<tr>
				<td align="center" style="padding-top: 10px;">
					<input type="submit" name="sub" value="Rate" style="width:6.8em;height: 2.5em;">
				</td>
			</tr>
		</table>
		</center>
	</form>
	</div>
</body>
</html>