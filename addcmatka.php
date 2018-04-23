<?php
include 'database.php';

$sql = "UPDATE curryhouse SET count=count+1 WHERE item='Chicken Matka' ";


if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('1 item Added to your basket');</script>";
	header( "refresh:0;url=curryhouse.html#bottomOfPage" );
    
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>