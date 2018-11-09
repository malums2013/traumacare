<?php
include("connect.php");
if(isset($_POST['fdk']))
{
    $un=$_POST['un'];
     $uid=$_POST['ud'];
    $hn=$_POST['hs'];
    $fd=$_POST['fd'];
    $ptyp=$_POST['ptyp'];
    
    $fin=mysql_query("insert into feedback values('','$hn','$un','$fd','$ptyp')");
    if($fin>0)
    {
        header("location:feedback.php?sc=1");
    }
    
 else {
      header("location:feedback.php?sc=2");  
    }
}

if(isset($_POST['cmp']))
{
  $usn=$_POST['usn'];
 $usid=$_POST['usid'];
    $hsd=$_POST['hsd'];
    $wc=$_POST['wc']; 
    
    $cdn=  mysql_query("select * from ptreg");
    if(mysql_num_rows($cdn)>0)
    {
        $cnr=mysql_fetch_row($cdn);
        $cd=$cnr[10];
    }
    if($usid==$cd)
    {
    $cin=mysql_query("insert into feedback values('','$hsd','$usn','$wc','0')");
    if($cin>0)
    {
      header("location:feedback.php?dc=1");  
    }
    }
    else {
      header("location:feedback.php?dc=2");  
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
                <script src="js/jquery.min.js"></script>
                <link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
<!--	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"integrity="sha384-dNpIIXE8U05kAbPhy3G1cz+yZmTzA6CY8Vg/u2L9xRnHjJiAK76m2BIEaSEV+/aU" crossorigin="anonymous">
        -->
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
		   	<div class="contact">
		   	<div class="section group">				
                            <div class="col span_1_of_3">
                                <img src="icon/logo3.png"  class="img img-responsive" />
                                <img src="icon/feedback.jpg"  class="img img-responsive" />
                            </div>	
                            
				<div class="col span_2_of_3">
				  <div class="contact-form">
                                      <br>
                                      
                                        <br>
                                        <form method="post">
                                            <script>
                                            function loadudata(x)
                                            {
                                                var xmlhttp = new XMLHttpRequest();
                                                xmlhttp.onreadystatechange = function() {
                                                    if (this.readyState == 4 && this.status == 200) {
                                                        var data = this.responseText;
                                                        if(data=="0")
                                                        {
                                                            $("#fdk").hide();
                                                            $("#fdk1").show();
                                                        }
                                                        else
                                                        {
                                                            $("#fdk1").hide();
                                                            $("#fdk").show();
                                                            var data1=data.split(",");
                                                            document.getElementById("nm").value=data1[0];
                                                            document.getElementById("hs").value=data1[1];
                                                        }
                                                    }
                                                };
                                                xmlhttp.open("GET", "loadpdata.php?q=" + x, true);
                                                xmlhttp.send();
                                            }
                                            </script>
                                            <table class="table table-bordered table-responsive">
                                                <tr>
                                                    <th colspan="2" style="color: steelblue;font-size: 20px">
                                                      Post Feedback 
                                                    
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th style="color: gray">
                                               Communication ID
                                                    </th>
                                                    <th>
                                                        <input type="text" name="ud" onblur="loadudata(this.value)" class="form-control">
                                                    </th>
                                                </tr>
                                                
                                                <tr>
                                                    <th style="color: gray">
                                               Name
                                                    </th>
                                                    <th>
                                                        <input type="text" name="un" id="nm" class="form-control">
                                                    </th>
                                                </tr>                                               
                                                <tr>
                                                    <th style="color: gray">
                                                        Hospital ID
                                                    </th>
                                                    <th>
                                                        <input type="text" name="hs" id="hs" class="form-control">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td>Post Type</td>
                                                    <td>
                                                        <select name="ptyp" class="form-control">
                                                            <option value="1">Feedback</option>
                                                            <option value="0">Complaints</option>
                                                        </select>
                                                    </td>
                                                </tr> 
                                                <tr>
                                                    <th style="color: gray">
                                                        Write feedback
                                                    </th>
                                                    <th>
                                                        <textarea name="fd" class="form-control"></textarea>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th colspan="2">
                                                        <input type="submit" name="fdk" id="fdk" value="POST NOW" class="btn btn-sm btn-primary">
                                                <div class="btn btn-danger" id="fdk1" style="display: none; padding: 10px">Invalid ID</div>
                                                    </th>
                                                </tr>                                           
                                                                                             
                                                
                                            </table>
                                            <?php
                                            if(isset($_GET['sc']))
                                            {
                                                $suc=$_GET['sc'];
                                                if($suc=="1")
                                                {
                                                    echo "Posted successfully";
                                                }
                                                if($suc=="2")
                                                {
                                                    echo "Error found ! try again";
                                                }
                                            }
                                            
                                            
                                            ?>
                                            <br>
                                            
                                            
                                            
                                        </form>    
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

