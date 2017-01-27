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
    <center>
      <?php
      $sql = "SELECT * FROM posts ";
    	$result = mysqli_query($conn, $sql);//if (strlen($post) <= 99.5) {echo "<td><h2>$post</h2></td>";}
    	if (mysqli_num_rows($result) >= 0) {
        	// output data of each row
        	$items = array();
        	while($row = mysqli_fetch_assoc($result)){
        	array_unshift($items,$row);
        	}
        	foreach($items as $item){
            //echo "id: " . $row["id"]. " - Name: " . $row["post"]. " " . $row["genere"]. "<br><br>";
            print(""
             . $item["cmnts"] .
            "");
        }
    	}
      ?><br>
      <h2 style="font-size: 30px;color:white;">Comment</h2>
    <table border="2">
      <tr align="center">
        <td align="center" style="padding: 10px;"><?php echo '<h3 style="color:orange;font-family:arial;font-size:19px">' . $_GET['postNo'] . "</h3>"; ?></td>
      </tr>
      <form action="foobarcomment.php" method="post">
      <tr align="center">
        <td align="center"><textarea cols="25" rows="10" placeholder="Comment..." name="commenter"></textarea></td>
      </tr>
      <tr>
        <td align="center"><input type="submit" id="postbut" value="Post  Comment"></td>
      </tr>
    </form>
  </table>
    </center>
  </div>
</body>
</html>
