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
		<title>medicare Website Template | blog :: W3layouts</title>
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
                                    <a href="searchhos.php" style="font-size: 35px">HOSPITALS</a>
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
				<div class="top-nav">
					<ul>
                                            <li><a href="index.php" style="text-decoration: none">Home</a></li>
                                            <li><a href="hosreg.php" style="text-decoration: none">Hospital registration</a></li>
                                            <li><a href="emerg.php" style="text-decoration: none">Emergency</a></li>
                                            <li><a href="searchhos.php" style="text-decoration: none">Search Hospital</a></li>
                                            <li><a href="viewgallery.php" style="text-decoration: none">Gallery</a></li>
                                            <li><a href="login.php" style="text-decoration: none">Login</a></li>
						
                                            <li><a href="feedback.php" style="text-decoration: none">Feedback</a></li>
					</ul>						
				</div>
				<div class="clear"> </div>
				<!--end-top-nav-->
			</div>
			<!--end-header-->
		</div>
		    <div class="clear"> </div>
		   <div class="wrap">
			<div class="blog">
		    		<div class="blog-grid">
		    			<h4>SEARCH</h4>
		    			<div class="blog-grid-header">
		    				
		    				
		    			</div>
		    			<div class="image group">
				<div class="grid images_3_of_1">
					<img src="images/box-img1.jpg">
				</div>
				<div class="grid span_2_of_3">
					<form method="post">
                                        <table class="table table-bordered table-responsive">
                                            <tr>
                                                <th style="color: steelblue;font-size: 20px">
                                                    NAME
                                                </th>
                                                <th style="color: steelblue;font-size: 20px">
                                                    ADDRESS
                                                </th>
                                                <th></th>
                                            </tr>
                                            <?php
                                            $hdt=mysql_query("select * from hosreg where status='1'");
                                            if(mysql_num_rows($hdt)>0)
                                            {
                                            while($gr=mysql_fetch_row($hdt))
                                            {
                                                
                                            ?>
                                                                                  
                                                                                      
                                            <tr>
                                                <th>
                                                    <?php echo $gr[1] ?>
                                                </th> 
                                                <th>
                                                    <?php echo $gr[2] ?>
                                                </th> 
                                                <th>                                                    
                                                    <a href="searchhosmore.php?hr=<?php echo $gr[8] ?>" style="color: white; display: block;width: 50px;background-color: steelblue;padding: 10px;margin: 10px;text-decoration: none"> more</a>
                                                </th> 
                                            </tr>
                                            
                                            
                                            <?php
                                            }
                                            }
                                            else
                                            {
                                                ?>
                                            <tr>
                                                <td colspan="4">No Data Available</td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </table>
                                    </form>
                                
                                </div>
		   </div>
		   
		    		</div>
		    		<div class="blog-grid">
		    			
		    			<div class="image group">
				<div class="grid images_3_of_1">
					<img src="images/staff1.jpg">
				</div>
				<div class="grid span_2_of_3">
                                    
                                </div>
		   </div>
		   
		    		</div>
		    		
		    		
		    		<div class="clear"> </div>
		    		
		    	</div>
		    </div>
		   <div class="clear"> </div><br /><br />
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

