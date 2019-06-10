<?php

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'wallet');
if($con==false)
{
	echo "Connection Failed";
}
?>