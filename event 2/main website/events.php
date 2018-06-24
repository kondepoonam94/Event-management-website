
		<?php if(isset($_POST['login'])){
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	
	$login = mysqli_query($conn, "select * from user where email='".$email."' AND pass='".$pass."'");
	$login_data = mysqli_fetch_assoc($login);
	$no = mysqli_num_rows($login);
	 $return_url = (isset($_POST["return_url"]))?urldecode($_POST["return_url"]):''; //return url
	
	if(isset($login) && $no == 1){
		$_SESSION['uid'] = $login_data['id'];
		$_SESSION['logout'] = 'logout.php';
		echo "<script>window.location.href='$return_url'</script>";
	}
	else{
		echo "<script>window.alert('Please Enter Valid Username or Password')</script>";
        echo "<script>window.location.href='$return_url'</script>";
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

<!-- Mirrored from p.w3layouts.com/demos_new/template_demo/20-03-2018/events-demo_Free/1266549478/web/events.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 May 2018 04:06:42 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Events a Wedding Category Bootstrap Responsive website Template | Events :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Events Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">  
<link href="css/font-awesome.css" rel="stylesheet">		<!-- font-awesome icons -->
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

<?php session_start();
include('conn.php'); 
 ?>
<body>  
	<!-- banner -->
	<div class="w3ls-banner-1"> 
		<!-- banner-text --> 
	
	<!-- //banner --> 
			<!-- header -->

<div class="header-w3layouts"> 
			<!-- Navigation -->
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header page-scroll">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Events</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a class="navbar-brand" href="index.php">Events</a></h1>
					</div> 
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav navbar-right">
							<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
							<li class="current"><a class="page-scroll" href="#page-top"></a>	</li>
							<li id="ind"><a class="hvr-sweep-to-right " href="index.php">Home</a></li>
							<li id="abt"><a class="hvr-sweep-to-right" href="about.php">About</a></li>
							<li id="eve"><a class="hvr-sweep-to-right active" href="events.php">Events</a></li>
                         <?php if(isset($_SESSION['uid'])){ 
							$user_data = mysqli_fetch_assoc(mysqli_query($conn, "select * from user where id='".$_SESSION['uid']."'"));?>

							<li><a href="#" class="hvr-sweep-to-right"  style="cursor: pointer;">Welcome&nbsp;<?= $user_data['name']; ?></a>

                          <ul>
                                <li><a class="hvr-sweep-to-right" href="profile_ev.php"  style="color: #fff; font-size: 1em;
    font-weight: 400;
    letter-spacing: 1px;
    text-transform: uppercase;">Profile</a></li>
                                <li><a class="hvr-sweep-to-right" href="logout.php"  style="color: #fff; font-size: 1em;
    font-weight: 400;
    letter-spacing: 1px;
    text-transform: uppercase;">Logout</a></li>                              
                                </ul>
							</li>

								<?php } else {?>
                        <li><a href="#loginModal" class="hvr-sweep-to-right" data-toggle="modal" data-target="#loginModal" style="cursor: pointer;">Login</a></li>
                       <?php } ?>

							<li><a class="hvr-sweep-to-right" href="gallery.php">Gallery</a></li>
							<li id="cont"><a class="hvr-sweep-to-right" href="contact.php">Contact</a></li>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container -->
			</nav>  
		</div>	

	
	
		    <div id="loginModal" class="modal fade" role="dialog" style="margin-top: 50px;">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"> &times;</button>
                <h4>Login</h4>
            </div>
            <div class="modal-body">
                   <form method="Post" action="index.php" align="center onsubmit="return login_valid()">
                   	<frameset>
                   <div class="form-group">
                       <label class="sr-only" for="email">Email</label><input type="text" class="form-control input-sm" placeholder="Email" id="email" name="email">
                       </div>
                        <div class="form-group">  
                          
                           <label class="sr-only" for="password">Password</label>
                                     <input type="password" class="form-control input-sm" placeholder="Password" id="password" name="pass"></div><br>
                       
                      
                       Don't have an account? 
                       <a href="register." style="color: #ff0a80;">SignUp</a>
                    <br>
                      <br>

                    
                      
                        
                       <button type="submit" name="login"  value="submit" class="btn btn-xs" style="color: #ff0a80;">Sign in</button>
                       
                   
                     
               </frameset>
                    </form>
            </div>
<!--


            <div class="modal-footer">
                <div style="padding:10px"></div>
            </div>
-->

        </div>
        </div>
    </div>
		<!-- //header -->
		
	

	</div>	
	<!-- events -->
	<!--Events --> 
		<div class="events-agileits-w3layouts">
		<div class="container">
		<h2 class="heading-agileinfo">Events<span>Events is a professionally managed Event</span></h2>
				<div class="popular-grids">
					<div class="col-md-4 popular-grid">
						<img src="images/g7.jpg" class="img-responsive" alt=""/>
						<div class="popular-text">
							<h5><a href="#" data-toggle="modal" data-target="#myModal2">Birthday 2017</a></h5>
							<div class="detail-bottom">
								<ul>
									<li><i class="fa fa-calendar" aria-hidden="true"></i>30 May</li>
									<li><i class="fa fa-map-marker" aria-hidden="true"></i>Vashi,Navi Mumbai</li>
								</ul>
								<p>Birthday parties are a great boost to any child's self-esteem. Making them feel like kings.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 popular-grid">
						<img src="images/g8.jpg" class="img-responsive" alt=""/>
						<div class="popular-text">
							<h5><a href="#" data-toggle="modal" data-target="#myModal">Weddings</a></h5>
							<div class="detail-bottom">
								<ul>
									<li><i class="fa fa-calendar" aria-hidden="true"></i>15 June</li>
									<li><i class="fa fa-map-marker" aria-hidden="true"></i>Dadar,Mumbai</li>
								</ul>
								<p>Planning a wedding takes time,a lot of coordination to create a dream wedding.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 popular-grid">
						<img src="images/g9.jpg" class="img-responsive" alt=""/>
						<div class="popular-text">
							<h5><a href="#" data-toggle="modal" data-target="#myModal">Photography</a></h5>
							<div class="detail-bottom">
								<ul>
									<li><i class="fa fa-calendar" aria-hidden="true"></i>25June</li>
									<li><i class="fa fa-map-marker" aria-hidden="true"></i>Pimpari,Pune</li>
								</ul>
								<p> photographs are intended to capture a moment to remember the moment.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 popular-grid">
						<img src="images/g6.jpg" class="img-responsive" alt=""/>
						<div class="popular-text">
							<h5><a href="#" data-toggle="modal" data-target="#myModal">Catering</a></h5>
							<div class="detail-bottom">
								<ul>
									<li><i class="fa fa-calendar" aria-hidden="true"></i>01 July</li>
									<li><i class="fa fa-map-marker" aria-hidden="true"></i>Nerul, Navi Mumbai</li>
								</ul>
								<p>Often times, great food can help make an event even more memorable.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 popular-grid">
						<img src="images/g3.jpg" class="img-responsive" alt=""/>
						<div class="popular-text">
							<h5><a href="#" data-toggle="modal" data-target="#myModal">Promotions</a></h5>
							<div class="detail-bottom">
								<ul>
									<li><i class="fa fa-calendar" aria-hidden="true"></i>30 May</li>
									<li><i class="fa fa-map-marker" aria-hidden="true"></i>Chembur, Mumbai</li>
								</ul>
								<p>Consult with one of our event designers to give your event memorable decorations.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 popular-grid">
						<img src="images/g2.jpg" class="img-responsive" alt=""/>
						<div class="popular-text">
							<h5><a href="#" data-toggle="modal" data-target="#myModal">Sangeet</a></h5>
							<div class="detail-bottom">
								<ul>
									<li><i class="fa fa-calendar" aria-hidden="true"></i>15 June</li>
									<li><i class="fa fa-map-marker" aria-hidden="true"></i>Belapur, Navi Mumbai</li>
								</ul>
								<p>Sangeet is used as a term to describe a celebratory event during an Indian wedding.</p>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
		</div>
		</div>
<!-- //Events --> 

	<!-- //events -->
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

<!-- Mirrored from p.w3layouts.com/demos_new/template_demo/20-03-2018/events-demo_Free/1266549478/web/events.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 May 2018 04:06:44 GMT -->
</html>