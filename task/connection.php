<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname ="form";

$con = mysqli_connect($servername,$username, $password, $dbname );

if($con)
{
	echo"";
}
else
{
	echo"not connected";
}
?>