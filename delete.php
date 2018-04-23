<?php
include 'database.php';

$sql = "UPDATE curryhouse SET count=0 WHERE count>0 ";


if ($conn->query($sql) === TRUE) {
	 echo "<script type='text/javascript'>alert('Order success');</script>";
	header( "refresh:0;url=rest.html" );
    
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>