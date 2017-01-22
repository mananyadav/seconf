<?php
	//for database
	include('mysql.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>SecConf</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="UTF-8">
	<link rel="shortcut icon" href="https://swelllinesmagdotcom.files.wordpress.com/2015/11/sad.png">
	<!--CSS-->
	<link rel="stylesheet" type="text/css" href="style1.css">
	<!--CSS end-->
	<!--JS-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script type="text/javascript">
			var a = true;
			function rep(){
				if (a === true) {
					alert("This site was made to relieve you of your hatred.")
					alert("So, take out all you anger BUT")
					alert("DON'T USE ANYONE'S NAME.");
					alert("For More Info, Please Read The Terms And Conditions Page");
					a = false;
				}
			}
		</script>
	<!--JS end-->
	</head>
<body>
	<div id="heading">
		<h1 align="center">Have a secret? Then why be silent about it?</h1>
	</div>
	<div id="nav">
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
	<br>
	<center>
	<form action="post.php" method="POST" id="mconf">
		<table>
			<tr>
				<td align="center"><h2>Genre For the Confession</h2></td>
			</tr>
			<tr>
				<td align="center">
					<select name="genere" id="genere" class="text" required>
  						<option value="#" disabled>Select</option>
  						<option value="Personal">Personal</option>
  						<option value="Hate">Hate</option>
  						<option value="Insult">Insult</option>
  						<option value="Love">Love</option>
  						<option value="Other">Other</option>
					</select>
				</td>
			</tr>
			<tr>
				<td align="center"><h2>Write Your Feelings...</h2></td>
			</tr>
			<tr>
				<td align="center">
					<textarea onclick="rep()" form="mconf" cols="30" rows="10" form="mconf" name="spam" minlength="10" maxlength="200" required></textarea>
				</td>
			</tr>
			<!--TAKES UP A LOT OF SPACE. USER WILL HAVE TO SCROLL DOWN. I DON'T WANT THAT-->
			<tr>
				<td><br></td>
			</tr>
			<!--NEED TO DO SOMETHING ABOUT THE ABOVE THING-->
			<tr>
				<td align="center"><input type="submit" name="sub" value="Post Anonymously" id="postbut"></td>
			</tr>
		</table>
	</form>
	</div>
	<div id="bottom">
		<footer><br><br>
			<hr>
			<p align="right"><strong><b>seconf &copy 2016</strong></b></p>
		</footer>
	</div>
</body>
</html>
