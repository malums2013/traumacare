<?php
include("connect.php");

if(isset($_POST['sub']))
{
    
  
   $name=$_POST['name'];
   $addr=$_POST['address'];
  
   $email=$_POST['email'];
   
   $mob=$_POST['mobile'];
   $u=$_POST['u'];
   $p=$_POST['p'];
   
   
    $c=mysql_query("select max(id) from amb");
$id=mysql_result($c,0);
$id++;
$po=$_FILES['po1']['name'];
$ext=strchr($po,'.');
$poname="$id$ext";
if(move_uploaded_file($_FILES['po1']['tmp_name'],getcwd()."\\img2\\$poname"))
{                         
   $photo=$_FILES['photo']['name'];
   
   $max=  mysql_query("select max(id) from amb");
   $res=  mysql_result($max,0);
   $res++;
   $pos=  strrpos($photo,".");
   $ex=  substr($photo,$pos);
   $ext="$res$ex";
   
   $ins=  mysql_query("insert into amb values('','$name','$addr','$email','$mob','$u','$p','$ext','$poname','0','0','0')");
  $log=mysql_query("insert into user_login values('','$u','$p','amb','0')" );
   move_uploaded_file($_FILES['photo']['tmp_name'],  getcwd()."//img1//$ext");
   if($ins>0)
   {
       header("location:am_reg.php?success=1");
   }
 else {
      // header("location:hosreg.php?success=2");    
     echo mysql_error();
   }
}

}


?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>medicare Website Template | contact :: W3layouts</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
                <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"  media="all" />
                
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
                
                 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDge58kDZRSDquz16IhEFQZMzHjMpFWwlw&callback=myMap"></script>

 
	</head>
           <script type="text/javascript">
        window.onload = function () {
            var mapOptions = {
                center: new google.maps.LatLng(8.493865786553638, 76.94784119725227),
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var infoWindow = new google.maps.InfoWindow();
            var latlngbounds = new google.maps.LatLngBounds();
            var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
            google.maps.event.addListener(map, 'click', function (e) {
                //alert("Latitude: " + e.latLng.lat() + "\r\nLongitude: " + e.latLng.lng());
                document.getElementById("la").value=e.latLng.lat();
                document.getElementById("lo").value=e.latLng.lng();
            });
        }
    </script>
	<body>
		<!--start-wrap-->
		
			<!--start-header-->
                       
			<div class="header">
				<div class="wrap">
				<!--start-logo-->
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" title="logo" /></a>
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
                                
				<div class="top-nav">
					<ul>
                                            <li><a href="index.php" style="text-decoration: none">Home</a></li>
                                            <li><a href="hosreg.php" style="text-decoration: none">Hospital registration</a></li>
                                            <li><a href="emergency.php" style="text-decoration: none">Emergency</a></li>
                                            <li><a href="searchhos.php" style="text-decoration: none">Search Hospital</a></li>
                                            <li><a href="viewgallery.php" style="text-decoration: none">Gallery</a></li>
                                            <li><a href="login.php" style="text-decoration: none">Login</a></li>
						<li><a href="feedback.php"style="text-decoration: none">Feedback</a></li>
											</ul>					
				</div>
                               
				<div class="clear"> </div>
				<!--end-top-nav-->
                                 
			</div>
			<!--end-header-->
		</div>
		    <div class="row">
                            <div class="col-lg-12">
                        
		   
                        
                                <div class="col-lg-2" ></div>
                                <div class="col-lg-8" >
                                      
                                    <h1 style="font-size: 30px;color: gray">REGISTER_AMBULANCE</h1>
                                    <br>
                                        <form method="post" enctype="multipart/form-data">
                                            <center>
                                            <table class="table table-bordered table-responsive">
                                                
                                                
                                                <tr>
                                                    <th style="background-color: lavender" >
                                                        <span><label style="color: grey">NAME</label></span>
                                                    </th>
                                                    <th>
                                                        <span><input type="text" name="name" class="form-control" placeholder="IN BLOCK LETTERS"value=""></span>
						    
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th style="background-color: lavender">
                                                        <span><label style="color: grey">ADDRESS</label></span>
                                                    </th>
                                                    <th>
                                                <span><textarea name="address" class="form-control"></textarea></span>

                                                    </th>
                                                </tr>
                                                
                                                					    
						    
                                                <tr>
                                                    <th style="background-color: lavender">
                                                        <span><label style="color: grey">E-MAIL</label></span>
                                                    </th>
                                                    <th>
                                                <span><input type="text" name="email" class="form-control"value=""></span>

                                                    </th>
                                                </tr>
                                                
                                                <tr> 
                                                    <th style="background-color:lavender ">
                                                        <span><label style="color: grey">MOBILE_NO</label></span>
                                                    </th>
                                                    <th>
                                                <span><input type="text" name="mobile" class="form-control"value=""></span>

                                                    </th>
                                                </tr>
                                            
                                                <tr>

                                                    <th style="background-color:lavender ">      
                                                        <span><label style="color: grey">USER_ID</label></span>
                                                    </th>
                                                    <th>
                                                       <span><input type="text" name="u" class="form-control"value=""></span>
                                                    </th>

                                                </tr>
                                                <tr>

                                                    <th style="background-color:lavender ">
                                                        <span><label style="color: grey">PASSWORD</label></span>
                                                    </th>
                                                    <th>
                                                        <span><input type="password" name="p" class="form-control"value=""></span>

                                                    </th>
                                                </tr>
                                                
                                                
                                                
                                                <tr>
                                                    <th style="background-color:lavender ">
                                                        <span><label style="color: grey">Driver PHOTO</label>             
                                                </span>
                                                    </th>
                                                    <th>
                                                    <input type="file" name="photo" class="form-control"value=""></span>

                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th style="background-color:lavender ">
                                                        <span><label style="color: grey">Id Proof</label>             
                                                </span>
                                                    </th>
                                                    <th>
                                                    <input type="file" name="po1" class="form-control"value=""></span>

                                                    </th>
                                                </tr>
                                                <span></span>
                                                <tr>
                                                    <th colspan="2">
                                                       <span><input type="submit" name="sub" class="btn btn-sm btn-primary"value="PROCEED"></span>

                                                    </th>
                                                </tr>
                                            </table>
                                            </center>
                                            
                                            <?php
                                            if (isset($_GET['success']))
                                            {
                                                if($_GET['success']=="1")
                                                {
                                                    echo"Your registration successfully completed";
                                                }
                                                if($_GET['success']=="2")
                                                {
                                                    echo "Error found!Try again! ";
                                                }
                                            }
                                            
                                            ?>
                                            
					    </form>
                            
                                </div> 
                                
                                 
                                 
                        
                        
                        
                                
                       
                         </div>
                                
                          </div>      
                                                   
                            
                            
                        
                                        
			  
			  	 
                          
                          
                          
                          <div class="clear"> </div>
	
	<div class="clear"> </div>
			
	      <div class="clear"> </div>
		   <div class="footer">
		   	 <div class="wrap">
		   	<div class="footer-left">
		   			<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="services.html">services</a></li>
						<li><a href="blog.html">blog</a></li>
						<li><a href="contact.html">contact</a></li>
					</ul>
		   	</div>
		   	<div class="footer-right">
		   		<p>Medicare | Design By <a href="http://w3layouts.com/">W3Layouts</a></p>
		   	</div>
		   	<div class="clear"> </div>
		   </div>
		   </div>
		<!--end-wrap-->
	</body>
</html>

