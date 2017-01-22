<?php
	include 'mysql.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>SecConf</title>
	<link rel="shortcut icon" href="https://swelllinesmagdotcom.files.wordpress.com/2015/11/sad.png">
	<!--CSS-->
	<link rel="stylesheet" type="text/css" href="style1.css">
	<!--CSS end-->
	<!--JS-->
	<script type="text/javascript" src="valid.js"></script>
	<!--JS end-->
	</head>
<body>
	<div id="heading">
		<h1 align="center">Have a secret? Then why be silent about it?</h1>
	</div>
	<div id="nav">
	<center>
		<ul align="center">
  			<li><a href="#rate.php" onclick="leaved5()"><p>Rate</p></a></li>
  			<li><a href="#contact.php" onclick="leaved4()"><p>Contact</p></a></li>
  			<li><a href="#about.php" onclick="leaved3()"><p>About</p></a></li>
  			<li><a href="#submissions.php" onclick="leaved2()"><p>Submissions</p></a></li>
  			<li><a href="#index.php" onclick="leaved()"><p>Home</p></a></li>
		</ul>
	</center>
	</div>
	<div id="main">
		<?php
			$post = $_POST['spam'];
			$genere = $_POST['genere'];
		?>
		<?php
			$nameForCookie = "user's_post";
			$valueOfCookie = $post;
			setcookie($nameForCookie,$valueOfCookie, time()+(5000), "/");
			$genereName = "generes";
			$valueForGenere = $genere;
			setcookie($genereName,$valueForGenere, time()+(5000), "/");
			$nameForTime = "dte";
			$ttiimmee = date("d/m/Y");
			setcookie($nameForTime,$ttiimmee);
		?>
		<center>
		<h3 align="center">Preview</h3>
		<form action="enteredinfo.php" method="GET">
			<h4 align="center" style="color: white;">Your Post Will Appear Like This</h4>
			<table border="1">
				<tr>
					<td align="center"><?php $ab = date("d/m/Y");echo "<p style=\"color: white;\">". $ttiimmee . "</p>"; ?></td>
					<?php
						//echo "<h2>$post</h2>"
						if (strlen($post) <= 99.5) {
							echo "<td><div id=\"sizefixed\">$post</div></td>";
						}
						elseif(strlen($post) > 99.5 && strlen($post <= 110)){
							echo "<td><div id=\"fixedsize\">$post</div></td>";
						}
						/*elseif (strlen($post) > 55) {
							echo "<td align=\"cneter\"><div id=\"moresize\"><p>$post</p></div></td>";
						}*/
					?></td>
					<td align="right"><?php date_default_timezone_set('Asia/Kolkata');echo "<p style=\"color: white;\">" . date("h:i a"). "</p>";?></td>
				</tr>
				<tr align="center">
					<?php echo "<td colspan=\"3\"><div id=\"cold\"><h4 align=\"center\" style=\"color: white;font-size: 1.1em;\">$genere</h4></div></td>"; ?>
				</tr>
			</table><br>
			<button onclick="window.history.back();" name="goo" style="color: darkorange;width: 11em;height: 3em;border-radius:0.9em">Edit</button>
			<input type="submit" name="cont" value="Continue" style="color: darkorange;width: 11em;height: 3em;border-radius:0.9em">
		</form>
		</center>
	</div>
</body>
</html>
