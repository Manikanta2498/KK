<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en" style="overflow: hidden;">
 <head>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
     body{
        background-image: url(img/f1.jpg);
         background-size: cover;
     }
     .end{
            background-color:black;
            height:74px;
            text-align:center
            
      }
    </style>
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

  </head><?php include 'connectdb.php'; ?>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script type="text/javascript">
    function getarea(val)
    {
      $.ajax({
      type:"POST",
      url: "getarea.php",
      data: 'cid='+val,
      success: function(data)
      {
        $("#area").html(data);
      }
      });
    }
  </script>
  
  <body>
    <!--Navigation bar-->

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
             <li style="font-family: chiller;font-size: 30px;">
		<span>WELCOME 
		<?php 
			$conn = mysqli_connect('localhost', 'root', '', 'final');
			$sql = "select * from member";
			$rs = $conn->query($sql);
			while($row = $rs->fetch_assoc()){
				$a = $_SESSION['mob'];
				$b = $_SESSION['pass'];
				if($row['mobile'] == $a && $row['pwd'] == $b){
					echo $row['first'];
				}
			}
			
		?>
		&nbsp; 
		</span>
	     </li>
              <li style="font-family: chiller;font-size: 20px;"><a href="help.html"><span class="glyphicon glyphicon-question-sign">Help?</span></a></li>
              <li style="font-family: chiller;font-size: 30px;"><a href="logout.php"><span>LogOut</span></a></li>
              
              </li>
            </ul>
          </div>
    </div>
  </nav>

        <div class="bg-color" class="section-padding">
            <div class="col-md-16 text-center" style="padding:100px;">
	
                <h1 class="header-h">Order the Best Food here Online!!!!!!  </h1>
                <div>
                    <p>   </p>
                    <p>   </p>
                    <p style = "font-family:Satisfy" class="header-p">Search For the Restaurants Near your Locality.....</p>
                </div>
            </div>

            <div  align="center">
                 <form action="submit.php" method="POST">
                     <select id="city" onchange="getarea(this.value);" >
                        <option >Select your city</option>
                        <?php 
                        $sql = "SELECT * FROM city";
                        $result = $dbhandle->query($sql);
                        while($rs=$result->fetch_assoc()){
                          ?>
                        <option value="<?php echo $rs["cid"]; ?>"> <?php echo $rs["cname"]; ?> </option>
                      <?php
                        }
                        ?>
                      </select>
                      <br>
                      <br>
                     <select id="area" name="area">
                        <option name="area" class="btn-lg">Select your area</option>
                      </select>
                      <br><br><br>
                    <input class="btn-success btn-lg" type="submit" value="Show Restaurants"></input></a>
                    </li></option>
                  </form>
            </div>
        </div>

    <div class = "container-fluid end" >
            <br>
            <div class = "col-sm-7" style = "text-align:left">
                <span style = "color:white;text-align:left;font-family:Electrolize">KrazzyKhana Inc.<br></span>
                <span style = "text-align:left">&copy; Copyrights @2017 KrazzyKhana Inc.</span>
            </div>
            <div class = "col-sm-5">
                <span style = "color:white;font-family:Electrolize">FOLLOW US ON &nbsp; </span>
                <i id = "fb" class="fa fa-facebook-square" aria-hidden="true" style = "font-size:25px"></i>
                <i id = "lin" class="fa fa-linkedin-square" aria-hidden="true" style = "font-size:25px"></i>
                <i id = "twitter" class="fa fa-twitter-square" aria-hidden="true" style = "font-size:25px"></i>
            </div>
    </div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
    <style type="text/css">
      #area ,#city{
   overflow:hidden;
   height: 40px;
   width:350px;
   -moz-border-radius: 9px 9px 9px 9px;
   -webkit-border-radius: 9px 9px 9px 9px;
   border-radius: 9px 9px 9px 9px;
   box-shadow: 1px 1px 11px #330033;
   font-family: comic sans ms;
   font-size: 25px;
   background: white ;

}
    select option {

    }
    </style>
</body>
</html>
