<?php
include("connect.php");

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
    <style>
      

.card {
    padding-top: 20px;
    margin: 10px 0 20px 0;
    background-color: rgba(214, 224, 226, 0.2);
    border-top-width: 0;
    border-bottom-width: 2px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.card .card-heading {
    padding: 0 20px;
    margin: 0;
}

.card .card-heading.simple {
    font-size: 20px;
    font-weight: 300;
    color: #777;
    border-bottom: 1px solid #e5e5e5;
}

.card .card-heading.image img {
    display: inline-block;
    width: 46px;
    height: 46px;
    margin-right: 15px;
    vertical-align: top;
    border: 0;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
}

.card .card-heading.image .card-heading-header {
    display: inline-block;
    vertical-align: top;
}

.card .card-heading.image .card-heading-header h3 {
    margin: 0;
    font-size: 14px;
    line-height: 16px;
    color: #262626;
}

.card .card-heading.image .card-heading-header span {
    font-size: 12px;
    color: #999999;
}

.card .card-body {
    padding: 0 20px;
    margin-top: 20px;
}

.card .card-media {
    padding: 0 20px;
    margin: 0 -14px;
}

.card .card-media img {
    max-width: 100%;
    max-height: 100%;
}

.card .card-actions {
    min-height: 30px;
    padding: 0 20px 20px 20px;
    margin: 20px 0 0 0;
}

.card .card-comments {
    padding: 20px;
    margin: 0;
    background-color: #f8f8f8;
}

.card .card-comments .comments-collapse-toggle {
    padding: 0;
    margin: 0 20px 12px 20px;
}

.card .card-comments .comments-collapse-toggle a,
.card .card-comments .comments-collapse-toggle span {
    padding-right: 5px;
    overflow: hidden;
    font-size: 12px;
    color: #999;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.card-comments .media-heading {
    font-size: 13px;
    font-weight: bold;
}

.card.people {
    position: relative;
    display: inline-block;
    width: 170px;
    height: 300px;
    padding-top: 0;
    margin-left: 20px;
    overflow: hidden;
    vertical-align: top;
}

.card.people:first-child {
    margin-left: 0;
}

.card.people .card-top {
    position: absolute;
    top: 0;
    left: 0;
    display: inline-block;
    width: 170px;
    height: 150px;
    background-color: #ffffff;
}

.card.people .card-top.green {
    background-color: #53a93f;
}

.card.people .card-top.blue {
    background-color: #427fed;
}

.card.people .card-info {
    position: absolute;
    top: 150px;
    display: inline-block;
    width: 100%;
    height: 101px;
    overflow: hidden;
    background: #ffffff;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.card.people .card-info .title {
    display: block;
    margin: 8px 14px 0 14px;
    overflow: hidden;
    font-size: 16px;
    font-weight: bold;
    line-height: 18px;
    color: #404040;
}

.card.people .card-info .desc {
    display: block;
    margin: 8px 14px 0 14px;
    overflow: hidden;
    font-size: 12px;
    line-height: 16px;
    color: #737373;
    text-overflow: ellipsis;
}

.card.people .card-bottom {
    position: absolute;
    bottom: 0;
    left: 0;
    display: inline-block;
    width: 100%;
    padding: 10px 20px;
    line-height: 29px;
    text-align: center;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.card.hovercard {
    position: relative;
    padding-top: 0;
    overflow: hidden;
    text-align: center;
    background-color: rgba(214, 224, 226, 0.2);
}

.card.hovercard .cardheader {
    background: url("images/4eb935fa2448cab6dc3a8c7fe74715dd_XL.jpg");
    background-size: cover;
    height: 135px;
}

.card.hovercard .avatar {
    position: relative;
    top: -50px;
    margin-bottom: -50px;
}

.card.hovercard .avatar img {
    width: 100px;
    height: 100px;
    max-width: 100px;
    max-height: 100px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 5px solid rgba(255,255,255,0.5);
}

.card.hovercard .info {
    padding: 4px 8px 10px;
}

.card.hovercard .info .title {
    margin-bottom: 4px;
    font-size: 24px;
    line-height: 1;
    color: #262626;
    vertical-align: middle;
}

.card.hovercard .info .desc {
    overflow: hidden;
    font-size: 12px;
    line-height: 20px;
    color: #737373;
    text-overflow: ellipsis;
}

.card.hovercard .bottom {
    padding: 0 20px;
    margin-bottom: 17px;
}



  </style>
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
                        
		   
                        
                               
                                <div class="col-lg-6">
                                      
                                    <h1 style="font-size: 30px;color: gray">SEARCH AMBULANCE</h1>
                                    <br>
                                        <form method="post" enctype="multipart/form-data">
                                            <center>
                                            <table class="table table-bordered table-responsive">
                                                
                                                
                                                
                                             <tr>

                                                    <th style="background-color:lavender ">      
                                                        <span><label style="color: grey">Latitude</label></span>
                                                    </th>
                                                    <th>
                                                       <span><input type="text" name="la" id="la" class="form-control" required="required" /></span>
                                                    </th>

                                                </tr>
                                                 <tr>

                                                    <th style="background-color:lavender ">      
                                                        <span><label style="color: grey">Longitude</label></span>
                                                    </th>
                                                    <th>
                                                       <span><input type="text" name="lo" id="lo" class="form-control" required="required" /></span>
                                                    </th>

                                                </tr>
                                               
                                                
                                                
                                                
                                                
                                                <span></span>
                                                <tr>
                                                    <th colspan="2">
                                                       <span><input type="submit" name="sub" class="btn btn-sm btn-primary"value="PROCEED"></span>

                                                    </th>
                                                </tr>
                                            </table>
                                                 <?php

if(isset($_POST['sub']))
{
        
    $la=substr($_POST['la'],0,7);
    $lo=substr($_POST['lo'],0,7);
    $sel=mysql_query("SELECT id,nme,la,lo,addr,cont,uid, SQRT( POW(69.1 * (la - $la), 2) + POW(69.1 * ($lo - lo) * COS(la / 57.3), 2)) AS distance FROM amb HAVING distance < 60 ORDER BY distance");
    $i=0;
    if(mysql_affected_rows()>0)
{
   

    while($r=mysql_fetch_row($sel))
    {
         
        
        
        
        
       
        ?>
                                        
                                      
                                    
                                        
                                           
                                        
                                    <h4>Available Doners</h4>
                                    
                                   
                                    <table class="table table-bordered table-responsive">
                                        <tr>
                                            <th>
                                                <label style="color: gray"> NAME</label>
                                            </th>
                                            <th>Contact</th>
                                            <th>*</th>
                                        </tr>
                                       
                                        <tr>
                                            <th style="color: grey" >
                                                <?php echo $r[1]?>
                                            </th>
                                            <th style="color: grey" >
                                                <?php echo $r[5]?>
                                            </th>
                                            
                                            <th>
                                                <a href="search_am.php?mid=<?php echo $r[0] ?>&t=1" style="text-decoration: none;display: block;width: 65px;background-color: lightgray;border-radius: 5px;padding: 5px;">View</a>
                                            </th>
                                        </tr>
                                        
                                        
                                        
                                    </table>
                                    <?php
$i++;
    }
    }
    
 else {
       echo '<img src="images/noresult.png">';
    }
    
}

?>
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
                                
                                 
                                <div class="col-lg-6" >
                                    <br/>
                                    <br/>
                                    <br/>
                                    <br/>
                                    <center>
                                    <?php
                                        if(isset($_GET['t']))
                                        {
                                          if($_GET['t']==1)
                                          {
                                              $sel_m1=mysql_query("select * from amb where id=".$_GET['mid']);
                                              $r_m1=  mysql_fetch_row($sel_m1);                                              
                                              ?>
                           
                           
                           
                           <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
	<div class="row">
		<div class="col-lg-3 col-sm-6">

            <div class="card hovercard">
                <div class="cardheader">

                </div>
                <div class="avatar">
                    <img alt="" src="img1/<?php echo $r_m1[7] ?>">
                </div>
                <div class="info">
                    <div class="title">
                        <a target="_blank" href="http://scripteden.com/"><?php echo $r_m1[1] ?></a>
                    </div>
                    
                    <div class="desc">Address:<?php echo $r_m1[2] ?></div>
                    <div class="desc">Email:<?php echo $r_m1[3] ?></div>
                    <div class="desc">Contact:<?php echo $r_m1[4] ?></div>
                    
                </div>
                <div class="bottom">
                    <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/webmaniac">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-danger btn-sm" rel="publisher"
                       href="https://plus.google.com/+ahmshahnuralam">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a class="btn btn-primary btn-sm" rel="publisher"
                       href="https://plus.google.com/shahnuralam">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn btn-warning btn-sm" rel="publisher" href="https://plus.google.com/shahnuralam">
                        <i class="fa fa-behance"></i>
                    </a>
                </div>
            </div>

        </div>

	</div>
</div>
                           
                           <?php
                                          }
                                        }
                                        else
                                        {
                                        ?>
                                    </center>
                            <div id="dvMap" style="width: 100%; height: 500px"></div> 
                           <?php
                                        }
                                        ?>
                                  
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

