<?php
include("connect.php");
if(isset($_POST['add']))
{
    $nme=$_POST['nm'];
    $addr=$_POST['addr'];
    $uid=$_POST['uid'];
    $pass=$_POST['pass'];
    $lt=$_POST['lt'];
    $lon=$_POST['lon'];
   $eml=$_POST['eml'];
    $in=  mysql_query("insert into hosreg values('','$nme','$addr','','','$eml','','','$uid','$pass','','$lt','$lon','','1')");
   $logn=mysql_query("insert into user_login values('','$uid','$pass','hospital','1')" );
    if($in>0)
    {
        header("location:addhos.php?succ=1");
    }
 else {
        header("location:addhos.php?succ=2");    
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
                center: new google.maps.LatLng(8.8932118, 76.6141396),
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
				<div class="top-nav"style="font-size: 12px">
					<ul>
                                            <li><a href="admin.php"style="text-decoration: none">Home</a></li>
						<li><a href="addhos.php"style="text-decoration: none">Add Hospital</a></li>
						<li class=""><a href="manage.php"style="text-decoration: none">MANAGE_HOSPITALS</a></li>
						<li><a href="searchpt.php"style="text-decoration: none">SEARCH_PATIENT</a></li>
                                                <li><a href="approve.php"style="text-decoration: none">Approved_Hospitals</a></li>
                                                <li><a href="logout.php"style="text-decoration: none">Sign out</a></li>
					</ul>				
				</div>
				<div class="clear"> </div>
				<!--end-top-nav-->
			</div>
			<!--end-header-->
		</div>
		    <div class="clear"> </div>
		   <div class="wrap">
		   	<div class="contact">
		   	<div class="section group">				
				<div class="col span_1_of_3">
					<div class="contact_info">
                                            <h2 style="color: gray">Find Us Here</h2><br />
			    	 		<div class="map">
					   			<div id="dvMap" style="width: 100%; height: 500px"></div>
					   		</div>
      				</div>
      			<div class="company_address">
				     	
				   </div>
				</div>				
				<div class="col-lg-6">
                                    <div class="contact-form">
                                    <form method="post">
                                        <br>
                                        <h2 style="color: grey">ADD_HOSPITAL</h2>
                                        <br>
                                        <table class="table table-bordered table-responsive">
                                            <tr>
                                                <th>
                                                    NAME
                                                </th>
                                                <th>
                                                    <input type="text"name="nm" class="form-control">
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>
                                                    ADDRESS
                                                </th>
                                                <th>
                                                    <textarea name="addr" class="form-control"></textarea>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>
                                                    E-MAIL
                                                </th>
                                                <th>
                                                    <input type="email" name="eml" class="form-control"></textarea>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>
                                                    LATTITUDE
                                                </th>
                                                <th>
                                                    <input type="text" name="lt"id="la" class="form-control"></textarea>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>
                                                   LONGITUDE
                                                </th>
                                                <th>
                                                    <input type="text" name="lon"id="lo" class="form-control"></textarea>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>
                                                    USER_ID
                                                </th>
                                                <th>
                                                    <input type="text" name="uid" class="form-control">
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>
                                                    PASSWORD
                                                </th>
                                                <th>
                                                    <input type="password" name="pass" class="form-control">
                                                </th>
                                            </tr>
                                            <tr>
                                                <th colspan="2">
                                                    <input type="submit"name="add"value="ADD"class="btn btn-sm btn-success">
                                                </th>
                                            </tr>
                                        </table>
                                        <?php
                                        if(isset($_GET['succ']))
                                        {
                                            if($_GET['succ']=="1")
                                            {
                                                echo"Hospital registered successfully";
                                            }
                                            if($_GET['succ']=="2")
                                            {
                                                echo"Error found!Try again";
                                            }
                                        }
                                            
                                            ?>
                                </form>
                                    </div>
  				</div>				
			  </div>
			  	 <div class="clear"> </div>
	</div>
	<div class="clear"> </div>
			</div>
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

