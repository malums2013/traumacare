<?php
include("connect.php");
if(isset($_POST['sub1']))
{
    $us=$_POST['us'];
    $ps=$_POST['ps'];
    $s=mysql_query("select * from user_login where uid='$us'and pwd='$ps' and status=1");
    if(mysql_num_rows($s)>0)
    {
        session_start();
        
        $r=mysql_fetch_row($s);
        if($r[3]=="admin")
        {
            
            $_SESSION['adm']=$us;
            header("location:admin.php");
        }
        if($r[3]=="hospital")
        {
          $_SESSION['hos']=$us;
          header("location:hospital.php");
        }
        
        if($r[3]=="staff")
        {
          $_SESSION['stf']=$us;
          header("location:staffhome.php");
        }
        if($r[3]=="amb")
        {
          $_SESSION['uid']=$us;
          header("location:amb_home.php");
        }
        
    }
 else {
        header("location:login.php?lo=2");    
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
				<div class="top-nav">
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
		   	<div class="contact">
		   	<div class="section group">				
				<div class="col span_1_of_3">
					<div class="contact_info">
<!--			    	 	<h2>Find Us Here</h2><br />-->
<br><br><br><br>
			    	 		<div class="map">
<!--					   			<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px">View Larger Map</a></small>
					   		-->
                                                        <img src="pic/login1.jpg">
                                                </div>
      				</div>
<!--      			<div class="company_address">
				     	<h2>Company Information :</h2>
						    	<p>500 Lorem Ipsum Dolor Sit,</p>
						   		<p>22-56-2-9 Sit Amet, Lorem,</p>
						   		<p>USA</p>
				   		<p>Phone:(00) 222 666 444</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <span>info@mycompany.com</span></p>
				   		<p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
				   </div>-->
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
                                      <br>
<!--				  	<h2>LOGIN</h2>-->
                                        <br><br><br><br>
                                        <form method="post">
					    	<table class="table table-bordered table-responsive">
                                                    <tr>	
                                                        <th>
                                                    <span><label>USER_ID</label></span>
                                                        </th>
                                                        <th>
                                                        <span><input type="text" name="us" class="form-control" value=""></span>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                    <span><label>PASSWORD</label></span>
                                                        </th>
                                                        <th>
                                                        <span><input type="password" name="ps" class="form-control" ></span>
                                                        </th>
                                                    </tr>
                                                
                                                    <tr>
                                                        <th colspan="2">
                                                    <span><input type="submit" name="sub1" class="btn btn-sm btn-primary"value="LOGIN"></span>
                                                        </th>
                                                    </tr>
                                            </table>
                                            <?php
                                            if(isset($_GET['lo']))
                                            {
                                                if($_GET['lo']=="2")
                                                {
                                                    echo "Invalid Credentials... May be your account not yey verified or information you entered is wrong!!!";
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

