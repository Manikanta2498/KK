<?php

include 'database.php';

$a = $_POST["area"];

if($a == 1)
{
	header("Location: rest.html");
}
else{
	echo "<script type='text/javascript'>alert('No restaurants here..');</script>";
	header( "refresh:0;url=Order.php" );
}


?>