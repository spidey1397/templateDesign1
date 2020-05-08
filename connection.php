<?php

 
$servername='localhost';
$username='root';
$password='';
$dbname='temp1';
$conn=mysqli_connect($servername,$username,$password,"$dbname");

if (!$conn) {
die('could not connected' .mysql_error());
}

?> 