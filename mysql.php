<?php

// Mysql settings

$user			= "root";
$password	= "toor";
$database	= "learnmr";
$host			= "localhost";

mysql_connect($host,$user,$password);
mysql_select_db($database) or die( "Sorry For This Error, But We're Experiencing Some Difficulties With Our Server.");

?>
