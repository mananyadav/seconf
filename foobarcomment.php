<?php
$servername = "localhost";
$username = "root";
$password = "toor";
$dbname = "learnmr";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$commen = $_POST['commenter'];
$idForPost = $_GET['idForPost'];
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo 'ID is :' . $idForPost;
echo "Comment is: " . $commen;
$sql = "UPDATE `posts` SET `cmts`=". $commen ." WHERE ID=". $idForPost .";";
mysqli_query($conn, $sql);
?>
<html>
  <head>
    <title>Loading</title>
    <script>
    setTimeout(function() {window.location.href = "submissions.php";}, 2000);
    </script>
  </head>
  <body>
    Loading...
  </body>
</html>
