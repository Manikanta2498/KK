<?php 
session_start();
?>
<?php
include 'database.php';

$sql="SELECT * FROM curryhouse";
$fetch = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KraZZy Khana</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" ><!--color-->
    <div class="container-fluid">
    <div class="navbar-header">
            <button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target="#nvb">
                   <span class = "icon-bar"></span>
                   <span class = "icon-bar"></span>
                   <span class = "icon-bar"></span>
            </button>
      <a class="navbar-brand" href="index.html">
              <span style = "color:white"><span style = "color:red">K</span>razzy<span style = "color:red">K</span>hana</span><!--<img src="img/kklogo.png" />-->
          </a>

    </div>
          <div class = "collapse navbar-collapse" id = "nvb">
            <ul class="nav navbar-nav navbar-right" >
              <li style="font-family: chiller;font-size: 20px;"><a href="help.html"><span class="glyphicon glyphicon-question-sign">Help?</span></a></li>
               <li style="font-family: chiller;font-size: 20px;"><a href="logout.php"><span class="glyphicon glyphicon-question-sign">LogOut</span></a></li>
              </li>
            </ul>
          </div>
    </div>
  </nav>

<div id="container"  style="padding-top: 90px;">
    <div id="first">
      <h2 style="font-family: comic sans ms; padding-left: 150px;">Confirm Your Order Details..</h2>
       <table style="width:100%;">
        <tr>
          <th><h2 style="font-family: comic sans ms; padding-left: 10px;">Item</h2></th>
          <th><h2 style="font-family: comic sans ms; ">Quantity</h2></th>
          <th><h2 style="font-family: comic sans ms; ">Price</h2></th>
        </tr>
        <?php 
          $sum=0;
          while($row = mysqli_fetch_array($fetch)) {
              if($row['count']>0)
              {
                $a=$row['count'];
                $b=$row['price'];
                $c=$a * $b;
                $sum+=$c;
                  echo  "<tr>
                    <td>".$row['item']."</td>
                     <td>".$row['count']."</td>
                     <td>".$c."</td> 
                  </tr>";  
              }
           }
        ?>
      </table>
       <h3 style="padding-left: 500px; padding-top: 20px; font-family: comic sans ms;">Total Bill: &nbsp;&nbsp;Rs.<?php  echo "$sum"; ?></h3>
    </div>
    <div id="second">
      <div class="delivery-type-title"><h2 style="font-family: Comic sans ms; padding-left: 30px;">Order information</h2></div>
            <ul class="review-delivery-wrapper">
                        
                           <p style="padding-left: 10px;" class="delivery"><input type="radio" value="delivery" name="1" checked="checked" />&nbsp;&nbsp;Delivery</p>
                            <div class="review-delivery-information ">
                                    <p class="review-delivery-description">Your order will be delivered to your address.</p>
                                </div>
                  
                       
                      
                        
                         <p style="padding-left: 10px;" class="delivery"><input type="radio" value="pickup" name="1" />&nbsp;&nbsp;Pickup</p>
                       
                                    <p class="review-delivery-description">
                                        You will pick up the order yourself at restaurant.
                                    </p>
                                    <address>Block No. 6/7 , VNIT Boys hostel , VNIT.</address>
                               
                    
    </div>
    <div id="clear"></div>
</div>

<div style="padding-left: 580px;">

  <a  href="delete.php">
                    <button type = "button" class = "btn btn-success btn-lg" style = "margin:-7px; ">
                        <span class="glyphicon glyphicon-shopping-cart"></span> Order 
                    </button>
                  </a>
</div>
<style>
body{
      background-image: url(img/food3.jpg);
      background-color:   rgb(230, 230, 255);
      background-size: cover;
    }
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 15px;
    text-align: left;
    border: 1px solid #ebebe0;
    border-bottom: 1px solid black;
}
  .button {
    display: block;
    width: 115px;
    height: 55px;
    background: green;
    padding: 10px;
    text-align: center;
    border-radius: 5px;
    color: white;
    font-weight: bold;
}
#container {
    width: 1200px;
   
    margin: auto;
}
#first {
    width: 800px;
    float: left;
    height: 450px;
        background-color: #ebebe0;
}
#second {
    width: 400px;
    float: left;
    height: 450px;
    background-color: #c2c2a3;
}
#clear {
    clear: both;
}
.delivery{
  padding-top: 30px;
  font-size: 30px;
  font-family: times new roman;
}
</style>
</body>
</html>