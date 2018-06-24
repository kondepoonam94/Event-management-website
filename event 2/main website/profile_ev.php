<?php session_start();
include('conn.php');



 
$uid = $_SESSION['uid'];

 $user = mysqli_query($conn,"select * from user where id='".$uid."'");
 $data = mysqli_fetch_assoc($user);
 
 
if(isset($_POST['update']))

{
  $profile_name = $_POST['profile_name'];
  $profile_lname = $_POST['profile_lname'];
  $profile_email = $_POST['profile_email'];
  $profile_phone = $_POST['profile_phone'];
  $profile_address = $_POST['profile_address'];
  
 
  $update = mysqli_query($conn,"update user set name ='".$profile_name."',lname ='".$profile_lname."',email ='".$profile_email."',contact ='".$profile_phone."',address ='".$profile_address."'  where id='".$uid."'");
  
  if($update>0)
  {
     echo "<script>window.location.href='profile_ev.php'</script>";
  }
}



?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from p.w3layouts.com/demos_new/template_demo/20-03-2018/events-demo_Free/1266549478/web/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 May 2018 04:06:44 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Events a Wedding Category Bootstrap Responsive website Template | Gallery :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Events Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">  
<link href="css/font-awesome.css" rel="stylesheet">		<!-- font-awesome icons -->
<link rel="stylesheet" href="css/lightbox.css">
<!-- //Custom Theme files --> 
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>  
<!-- //js -->
<!-- web-fonts -->  
<link href="http://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<!-- //web-fonts -->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<script src='../../../../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script src="../../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
  	}
})();
</script><script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
  	}
})();
</script><script type="text/javascript" src="../../../../../../../publisher.eboundservices.com/adsInternalReferral/adsInternalReferral7946.js?ver=20180503"><script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../../../../www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-30027142-1', 'w3layouts.com');
  ga('send', 'pageview');
</script>
<body>  
	<!-- banner -->
	<div class="w3ls-banner-1"> 
		<!-- banner-text --> 
	
	<!-- //banner --> 
			<!-- header -->
		
			<?php 
       include("header_ev.php");
   ?>

	</div>	


<!--page content-->
<div class="page-content">
	<div class="container application_content content">
	
	
    
	 <div class="widget-contact-form application_form" id="order">
			<div class="panel panel-event">
  <div class="panel-heading"><?php echo $data['name']; ?> Details</div>
  
  <div class="panel-body">
  
  <table class="table tbl_order">
							      
							<tbody>
							
                                <tr>
									<th>First Name</th>
									<td><?php echo $data['name']; ?></td>
								</tr>
                                 <tr>
									<th>Last Name</th>
									<td><?php echo $data['lname']; ?></td>
								</tr>
                                <tr>
									<th>Email</th>
									<td><?php echo $data['email']; ?></td>
								</tr>
                                <tr>
									<th> Contact Number</th>
									<td><?php echo $data['contact']; ?></td>
								</tr>
                                <tr>
									<th>Address</th>
									<td><?php echo $data['address']; ?></td>
								</tr>
                                 
                               <tr>
                               	<td></td>
                               <td> <a href="#edit_profile" data-toggle="modal" data-target="#edit_profile" class="btn-style-one" style="    border: none;
    padding: 0.7em 2.5em;
    font-size: 15px;
    outline: none;
    text-transform: uppercase;
    letter-spacing: 1px;
    background: #ff0a80;
    color: #fff;">Update</a> </td>
    <td>
    </td>
                                 
                               </tr>
			  
              </tbody>
						</table>
                        </div>
              
        
</div>
		
			
		</div>
        
        
            </div>
            
		</div>


        <!-- edit_profile Modal -->
<div id="edit_profile" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content main_model4">
      <div class="hotel-left">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">Update Profile</h4>
      </div>
      <div class="modal-body">
        <form name="profile" class="form-horizontal cform-1 book_now" method="post" onsubmit="return profile_valid()" >
							
                           <div class="form-group">
                                <div class="col-sm-12">
                            <label>First Name</label>
                           <input type="hidden" name="user_id" value="" />
                            <input type="text" name="profile_name" class="form-control" placeholder="First Name"  value="<?php echo $data['name']; ?>" onBlur="pro_name()"/>
                            <span id="profile_name_error" style="color:#f00;"></span>
                            </div>
                            </div>
                           <div class="form-group">
                                <div class="col-sm-12">
                                <label>Last Name</label>
                            <input type="text" name="profile_lname" class="form-control" placeholder="Last Name" value="<?php echo $data['lname']; ?>" onBlur="pro_last_name()"/>
                            <span id="profile_lname_error" style="color:#f00;"></span>
                            </div>
                            </div>
                            
                            
						
                            <div class="clear"></div>
                           <div class="form-group">
                                <div class="col-sm-12">
                            <label>Email</label>
                            <input type="email" name="profile_email" class="form-control" placeholder="Email" value="<?php echo $data['email']; ?>" onBlur="pro_email()">
                            <span id="pro_email_error" style="color:#f00;"></span>
                            </div>
                            </div>
                                                        
                            <div class="form-group">
                             <div class="col-sm-12">
                             <label>Contact Number</label>
                            <input type="text" name="profile_phone" class="form-control" value="<?php echo $data['contact']; ?>" placeholder="Phone Number" onBlur="pro_contact()" >
                            <span id="profile_phone_error" style="color:#f00;"></span>
                            </div></div>
                            <div class="form-group">
                             <div class="col-sm-12">
                             <label>Address</label>
                            <textarea name="profile_address" class="form-control" placeholder="Address" onBlur="pro_address()"><?php echo $data['address']; ?></textarea>
                            <span id="pro_address_error" style="color:#f00;"></span>
                            </div></div>
                          
                            <div class="form-group">
			                    <div class="col-sm-12 text-center">
			                          <input type="submit" name="update" value="update" class="btn-style-one">
                                   
                                   
                                    <input type="hidden" name="return_url" value="<?php 
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
echo $current_url; ?>" />   

		                      </div>
			                </div>
						</form>
      </div>
      </div>
    </div>

  </div>
</div>


<!-- footer-top -->	
	<div class="footer-top">
		<div class="container">
			<div class="col-md-3 foot-left">
				<h3>About Us</h3>
			
				<p>Every moment and every event of every man's life on earth plants something in his soul.</p>
			</div>
			<div class="col-md-3 foot-left">
					<h3>Get In Touch</h3>
					
				
						<div class="contact-btm">
							<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
							<p>Sec-8, Nerul(west)</p>
						</div>
						<div class="contact-btm">
							<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
							<p>8678903216</p>
						<div class="contact-btm">
						</div>
							<span class="fa fa-envelope-o" aria-hidden="true"></span>
							<p><a href="abhydas28@gmail.com">abhydas28@gmail.com</a></p>
						</div>
						<div class="clearfix"></div>

			</div>
			<div class="col-md-6 foot-left">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.4626778751212!2d73.0127885144673!3d19.04338458710666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c3e7a76df6cf%3A0xbad4ecb57bc47e50!2sIndia+Post!5e0!3m2!1sen!2sin!4v1527294354939" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
				<div class="clearfix"></div>
			</div>
			
				<div class="clearfix"></div>
		</div>
	</div>
<!-- /footer-top -->							

<!-- footer -->
			<div class="copy-right">
				<div class="container">
				<div class="col-md-6 col-sm-6 col-xs-6 copy-right-grids">
						<div class="copy-left">
						<p>&copy; 2018 Events. All rights reserved | Design by <a href="http://www.maxgentechnologies.com/">Maxgen Technologies</a></p>
						</div>
					</div>
				<div class="col-md-6 col-sm-6 col-xs-6 top-middle">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-vimeo"></i></a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
					</div>
			</div>
			
<!-- //footer -->
<!-- bootstrap-modal-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Events
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
					<div class="modal-body">
						<img src="images/g8.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
			</div>
		</div>
	</div>
<!-- //bootstrap-modal-pop-up --> 
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<script src="js/jquery-2.2.3.min.js"></script> 
	
<!-- skills -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>

<!-- Mirrored from p.w3layouts.com/demos_new/template_demo/20-03-2018/events-demo_Free/1266549478/web/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 May 2018 04:06:46 GMT -->
</html>