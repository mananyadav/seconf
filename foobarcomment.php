<?php
$servername = "localhost";
$username = "root";
$password = "toor";
$dbname = "learnmr";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$commen = $_POST['commenter'];
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO posts (cmts) VALUES (" . (string) $commen .");";
mysqli_query($conn, $sql);
?>
<html>
  <head>
    <title>Loading</title>
    <script>
    setTimeout(function() {window.location.href = "submissions.php";}, 3000);
    </script>
  </head>
  <body>
    Loading...
  </body>
</html>
