<?php
//for database
//include('mysql.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>SecConf</title>
	<link rel="shortcut icon" href="https://swelllinesmagdotcom.files.wordpress.com/2015/11/sad.png">
	<!--CSS-->
	<link rel="stylesheet" type="text/css" href="style1.css">
	<style type="text/css">
		h4{
			padding: 0px;
			margin: 16.9px;
		}
	</style>
	<style type="text/css">
		html{
			color:white;
		}
		#based{
			border-radius:0.8em;padding-top:0px;padding-bottom:0px;padding-left:6px;padding-right:8px;
		}
		#based0{
			border-radius:0.8em;padding-top:0px;padding-bottom:0px;padding-left:20px;padding-right:20px;
		}
		table{

		}
	</style>
	<!--CSS end-->
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
	<?php
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
	?><center><br><br>
	<?php
	$sql = "SELECT * FROM posts ";
	$result = mysqli_query($conn, $sql);//if (strlen($post) <= 99.5) {echo "<td><h2>$post</h2></td>";}
	if (mysqli_num_rows($result) > 0) {
    	// output data of each row
    	$items = array();
    	while($row = mysqli_fetch_assoc($result)){
    	array_unshift($items,$row);
    	}
    	foreach($items as $item){
        //echo "id: " . $row["id"]. " - Name: " . $row["post"]. " " . $row["genere"]. "<br><br>";
        echo "<table border=\"1\"><tr><td align=\"center\"><p style=\"color:white;padding:0px;margin:0px;\">" . $item["dte"]. "</p></td>";
        if (strlen($item["post"]) <= 99.5){echo "<td align=\"center\"><div id=\"sizefixed\">" . $item["post"]. "</div></td>";}
        elseif (strlen($item["post"]) > 99.5 && strlen($item["post"] <= 200)) {echo "<td align=\"center\"><div id=\"fixedsize\">" . $item["post"] . "</div></td>";}
        echo "<td align=\"center\"><p style=\"color: white;padding:0px;margin:0px;\">" . $item["tme"] . "</p></td>";
        echo "<tr><td cellpadding=\"0px\"; colspan=\"3\"><div id=\"cold\"><h4 align=\"center\" style=\"color: white;font-size: 1.1em;\">" . $item["genere"] . "</h4></td></tr>";
        print("
        	<tr>
        		<td><a href=\"\"><button id=\"based0\" style=\"\"><p style=\"padding:0px;margin:11px;\">Like</p></button></a></td>
        		<td></td>
        		<td><a href=\"comments.php?postNo=" . $item['post'] . "&idForPost=". $item['ID'] ."\"><button id=\"based\" style=\"\"><p style=\"padding:0px;margin:11px;\">Comment</p></button></a></td>
        	</tr>
        ");
        echo "</table><br><br>";
    }
	}

	else {
    	echo "<h2>There have been no posts yet!</h2>";
	}
	?>
	</table>
	</div>
</body>
</html>
