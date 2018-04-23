<html>
<?php 
include "connectdb.php";
$query= "SELECT * FROM areas WHERE cid= '".$_POST["cid"]."'";

$result=$dbhandle->query($query);

 ?>
 <option>Select your area</option>
 <?php 
 		while ($rs=$result->fetch_assoc()) {
 			
 			?>
					<option value="<?php echo $rs["aid"];?>"> <?php echo $rs["aname"] ?> </option>

 			<?php
 		}
  ?>
 </html>