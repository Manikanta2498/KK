<?php
include 'database.php';

$sql = "UPDATE curryhouse SET count=count-1 WHERE item='Chicken Biryani' AND count>0";


if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('1 item removed to your basket');</script>";
	header( "refresh:0;url=curryhouse.html#bottomOfPage" );
    
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>