<?php 
session_start();
?>
<?php
include 'database.php';

$sql="SELECT * FROM curryhouse";
$fetch = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About-KK</title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script|Orbitron" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Electrolize|Oleo+Script|Orbitron" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/crry.css">
    <script>
        $(function(){


               $(".anm").animate({
                   opacity: '1.0',
                   fontSize: '50px',
                });


               $("#fb").mouseenter(function(){
                    $(this).css("color", "#3B5998");
               });
               $("#fb").mouseleave(function(){
                    $(this).css("color", "");
               });


               $("#lin").mouseenter(function(){
                    $(this).css("color", "#007bb6");
               });
               $("#lin").mouseleave(function(){
                    $(this).css("color", "");
               });

               $("#twitter").mouseenter(function(){
                    $(this).css("color", "#0084b4");
               });
               $("#twitter").mouseleave(function(){
                    $(this).css("color", "");
               });

        });
    </script>
}
<style>
.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
  
}
.button {
    background-color:darkgreen ; /* Green */
    border-radius:30%;
    color: white;
    padding: 0px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: auto;
    cursor: pointer;
}
.button3 {
    background-color:darkgreen ; /* Green */
    border-radius:70%;
    color: white;
    padding: 20px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: px 2px;
    cursor: pointer;
}
.button1 {width: 20px;}
.button1.glyphicon
{
  text-align: center;
}
</style>
</head>
<body style="background-image: url('img/m1.jpg')">
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
<br>
<br>
    <h1 style = "font-size:60px;text-align:center;font-family: chiller;color: white">Curry House <span class="glyphicon glyphicon-cutlery"></span></h1>
   <div align="center">
    <img src="img/offer.jpg"> <img src="img/offer1.jpg">
    <p align="center">Get 20% off on every order.</p>
    </div>
<br>
    <div class = "container-fluid list" id="p">
    <h3 class ="vv" style = "font-size:60px;text-align:center;font-family: chiller;color: white;">Popular Products</h3>
    <pre style= "font-size:15px;color: black;font-weight:bold;background-image: url('img/m2.jpg');width: 1300px;font-family:Comic Sans MS, cursive, sans-serif;">
     
              Chicken Matka biryani&nbsp;&nbsp;(FULL)                                                                                                                Rs.480/- <a href="addcmatka.php"><button class="button button1"><span class="glyphicon glyphicon-plus" align="center"></span>&nbsp;</button></a> <a href="subcmatka.php"><button class="button button1"><span class="glyphicon glyphicon-minus"></span>&nbsp;</button></a>

              Chicken biryani&nbsp;&nbsp;(FULL)                                                                                                                        Rs.160/-  <a href="addcbiryani.php"><button class="button button1"><span class="glyphicon glyphicon-plus"></span>&nbsp;</button></a> <a href="subcbiryani.php"><button class="button button1"><span class="glyphicon glyphicon-minus"></span>&nbsp;</button></a>

              Paneer Matka biryani&nbsp;&nbsp;(FULL)                                                                                                                 Rs.480/- <a href="addpmatka.php"><button class="button button1"><span class="glyphicon glyphicon-plus"></span>&nbsp;</button></a> <a href="subpmatka.php"><button class="button button1"><span class="glyphicon glyphicon-minus"></span>&nbsp;</button></a>

              Paneer biryani&nbsp;&nbsp;(FULL)                                                                                                                         Rs.160/-  <a href="addpbiryani.php"><button class="button button1"><span class="glyphicon glyphicon-plus"></span>&nbsp;</button></a> <a href="subpbiryani.php"><button class="button button1"><span class="glyphicon glyphicon-minus"></span>&nbsp;</button></a>
     </pre>      
     </div>

 <a href="show.php"><div align="center"><button class="button3 button2" ><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;<span style="font-weight: bold;color: white">PROCEED TO CHECKOUT</span></button></div></a>
  <br>
  <br>
<a name="bottomOfPage"></a>
</body>
</html>