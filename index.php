<?php

include("connect.php");
if(isset($_POST['sub']))
{
            $la=substr($_POST['la'],0,7);
    $lo=substr($_POST['lo'],0,7);
    header("location:map1.php?la=$la&lo=$lo");
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
		<title>medicare Website Template | Home :: W3layouts</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/responsiveslides.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/responsiveslides.min.js"></script>
		  <script>
		    // You can also use "$(window).load(function() {"
			    $(function () {
			
			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 1600,
			        speed: 600
			      });
			});
		  </script>
                  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDge58kDZRSDquz16IhEFQZMzHjMpFWwlw&callback=myMap"></script>

    <script type="text/javascript">
        window.onload = function () {
            var mapOptions = {
                center: new google.maps.LatLng(8.493865786553638, 76.94784119725227),
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var infoWindow = new google.maps.InfoWindow();
            var latlngbounds = new google.maps.LatLngBounds();
            var map = new google.maps.Map(document.getElementById("dvMap1"), mapOptions);
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
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="hosreg.php">Hospital registration</a></li>
                                            <li><a href="emerg.php">Emergency</a></li>
                                            <li><a href="searchhos.php">Search Hospital</a></li>
                                            <li><a href="viewgallery.php">Gallery</a></li>
                                            <li><a href="login.php">Login</a></li>
						
						<li><a href="feedback.php">Feedback</a></li>
					</ul>					
				</div>
				<div class="clear"> </div>
				<!--end-top-nav-->
			</div>
			<!--end-header-->
		</div>
		<div class="clear"> </div>
			<!--start-image-slider---->
					<div class="image-slider">
						<!-- Slideshow 1 -->
					    <ul class="rslides" id="slider1">
					      <li><img src="images/slider-image1.jpg" alt=""></li>
					      <li><img src="images/slider-image2.jpg" alt=""></li>
					      <li><img src="images/slider-image1.jpg" alt=""></li>
					    </ul>
						 <!-- Slideshow 2 -->
					</div>
					<!--End-image-slider---->
		    <div class="clear"> </div>
		    <div class="content-grids">
		    	<div class="wrap">
		    	<div class="section group">
				<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
						  <img src="images/grid-img1.png">
					</div>
					<div class="text list_1_of_2">
						  <h3>Patient</h3>
						  <p>Need More info?</p>
                                                  <div class="button"><span><a href="report.php">View More</a></span></div>
					</div>
				</div>				
				<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
                                            <img src="images/2000px-Blue_ambulance_icon.svg.png"style="height: 115px">
					</div>
					<div class="text list_1_of_2">
						  <h3>Ambulance</h3>
                                                  <a href="am_reg.php" ><p>Register Ambulance?</p></a>
                                                  <div class="button"><span><a href="search_am.php">Search Ambulance</a></span></div>
				     </div>
				</div>				
				<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
                                            <img src="images/body-34-512.png">
					</div>
					<div class="text list_1_of_2">
						  <h3>Donate Blood</h3>
						  <p>Need More info?</p>
                                                  <div class="button"><span><a href="blood.php">View More</a></span></div>
				    </div>
				</div>				
			</div>
		    </div>
		   </div>
		   <div class="wrap">
		   <div class="content-box">
		   <div class="section group">
				<div class="col_1_of_3 span_1_of_3 frist">
					<h3>Search Hospitals</h3>
				
					<form method="post">
                                    <table class="table table-bordered table-condensed table-hover table-responsive table-striped">
                                         <tr>
                                            <td>Latitude</td>
                                            <td><input type="text" name="la" id="la" class="form-control" required="required" /></td>
                                        </tr>
                                        <tr>
                                            <td>Longitude</td>
                                            <td><input type="text" name="lo" id="lo" class="form-control" required="required" /></td>
                                        </tr>
                                        

                                        <tr>
                                            <td colspan="2"><center><input type="submit" name="sub" value="Find Now" class="btn btn-success" /></center></td>
                                        </tr>
                                    </table>
                                    </form>
				</div>
                       <div class="col_1_of_6 span_1_of_6 second">
                          
                 
                           
                           
                           
                           
                           
                           <div id="dvMap1" style="width: 800px; height: 400px"></div>
                           <div id="map3" style="width: 800px; height: 400px"></div>
                           
                       </div>
				
			</div>
		   </div>
		   </div>
		   <div class="clear"> </div>
<!--		   <div class="footer">
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
		   </div>-->
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
    </div>

<div class="footer-right">
		   		<p>Medicare | Design By <a href="http://w3layouts.com/">W3Layouts</a></p>
		   	</div>
<div class="clear"> </div>
</div>
		<!--end-wrap-->
	</body>
</html>

