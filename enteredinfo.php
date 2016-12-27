<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
	<title>SecConf</title>
	<link rel="shortcut icon" href="https://swelllinesmagdotcom.files.wordpress.com/2015/11/sad.png">
	<!--CSS-->
	<link rel="stylesheet" type="text/css" href="style1.css">
	<style type="text/css">
		html{
			color: orange;
		}
	</style>
	<!--CSS end-->
	<!--JS-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script type="text/javascript">
			//code
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
  			<li><a href="rate.php" title="Rate"><p>Rate</p></a></li>
  			<li><a href="contact.php" title="Contact"><p>Contact</p></a></li>
  			<li><a href="about.php" title="About"><p>About</p></a></li>
  			<li><a href="submissions.php" title="Submissions"><p>Submissions</p></a></li>
  			<li><a href="index.php" title="Home"><p>Home</p></a></li>
		</ul>
	</center>
	</div>
	<?php date_default_timezone_set('Asia/Kolkata');$tme = "<p style=\"color: white;\">" . date("h:i a"). "</p>";$stme = strval(date("h:i a"));?>
	<div id="main">
	<br>
	<center>
	<h4 style="font-family: cursive;font-size: 26.22px;color: white;">Your post has been <font style="color:#0cff00;font-family: arial;">successfully</font> uploaded. It will shortly be on the <a href="submissions.php" style="color:orange; text-decoration: none;" title="Submission">submissions</a> page.</h4>
		<?php
			$post = $_COOKIE["user's_post"];
			$genere = $_COOKIE["generes"];
			$dte = $_COOKIE["dte"];
		?>
		<?php
		if(!isset($_COOKIE["user's_post"])) {
    		echo "<h4>OOPS! A small bug was encountered! This site uses cookies. Please enable them.<br><br>Connection Timed Out</h4>";
		}
	?><br>
	<table border="1">
		<tr>
			<td align="center"><?php echo "<p style=\"color: white;\">" . $dte . "</p>"; ?></td>
			<?php 
				//echo "<h2>$post</h2>"
				if (strlen($post) <= 105.5) {
					echo "<td><div id=\"sizefixed\">$post</div></td>";
				}
				elseif(strlen($post) > 105.5 && strlen($post <= 200)){
					echo "<td><div id=\"fixedsize\">$post</div></td>";
				}
				/*elseif (strlen($post) > 55) {
				echo "<td align=\"cneter\"><div id=\"moresize\"><p>$post</p></div></td>";
				}*/
				?></td>
					<td align="right"><?php echo $tme ?></td>
				</tr>
				<tr align="center">
					<?php echo "<td colspan=\"3\"><div id=\"cold\"><h4 align=\"center\" style=\"color: white;font-size: 1.1em;\">$genere</h4></div></td>"; ?>
				</tr>
			</table><br>
	</center>
	<?php
	//for database
	$servername = "localhost";
	$username = "root";	
	$password = "toor";
	$dbname = "learnmr";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}
	$sql = "INSERT INTO posts (post, genere, tme, dte) VALUES (\"$post\", \"$genere\", \"$stme\", \"$dte\")";
	if (mysqli_query($conn, $sql)) {
    	//echo "New record created successfully";
	} else {
	    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	?>
	</div>
</body>
</html>