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
		<title>medicare Website Template | Services :: W3layouts</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"  media="all" />
                
                <link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
	</head>
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
                                <div class="top-nav"style="font-size: 14px">
					<ul>
                                            <li><a href="index.php" style="text-decoration: none">Home</a></li>
                                            <li><a href="hosreg.php" style="text-decoration: none">Hospital registration</a></li>
                                            <li><a href="emerg.php" style="text-decoration: none">Emergency</a></li>
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
		    <div class="clear"> </div>
		   
		   <div class="wrap">
		   	<div class="services">
                            <br>
                            <h4 style="color: steelblue">Gallery</h4>
                            <br>
		   <div class="section group">
                       
                       <?php
                       $g=  mysql_query("select * from hosreg");
                       if(mysql_num_rows($g)>0)
                       {
                           while ($gr=mysql_fetch_row($g))
                           {
                               
                         
                       
                       ?>
				<div class="col_1_of_5 span_1_of_5">
					<h3><?php echo $gr[1] ?></h3>
                                        <a href="photos.php?i=<?php echo $gr[1] ?>"><img src="pic/<?php echo $gr[13] ?>"class="img img-responsive" title="" /></a>
					
				</div>
                       <?php
                         }
                       }
                       ?>
                       
				
				
				
			</div>
			 <div class="section group">
				
				<div class="col_1_of_5 span_1_of_5">
					<h3>DISCHARGE LOUNGE</h3>
					<img src="images/7.png" title="service1" />
					<p>Lorem ipsum dolor sit amet, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				</div>
				<div class="col_1_of_5 span_1_of_5">
					<h3>EAR NOSE AND THROAT</h3>
					<img src="images/8.png" title="service1" />
					<p>Lorem ipsum dolor sit amet, quis nostrud exercitation ullamco ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				</div>
				<div class="col_1_of_5 span_1_of_5">
					<h3>GASTROENTEROLOGY</h3>
					<img src="images/9.png" title="service1" />
					<p>Lorem ipsum dolor sit amet, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				</div>
				<div class="col_1_of_5 span_1_of_5">
					<h3>GENERAL SURGERY</h3>
					<img src="images/4.png" title="service1" />
					<p>Lorem ipsum dolor sit amet, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				</div>
			</div><br />
		   </div>
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

