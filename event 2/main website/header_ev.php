		
<!--<div class="header-top"></div>-->

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

   <script>
			
					
	$(document).ready(function () {

            $("li").click(function () {
                var id = $(this);

                $(".current").removeClass("current");
                $(id).addClass("current");
                localStorage.setItem("selectedolditem", $(id).text());

            });

            var selectedolditem = localStorage.getItem('selectedolditem');

            if (selectedolditem !== null) {

                $("li:contains('" + selectedolditem + "')").addClass("current");
            }
        });	



	
		
$(function(){
    var current = location.pathname;
	console.log(current);
    $('li').each(function(){
        var $this = $(this);
        // if the current path is like this link, make it active
        if($this.attr('href').indexOf(current) !== -1){
            $this.addClass('current');
        }
    })
})												
					
			 </script>     
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
							<!--<li><a class="page-scroll" href="#page-top"></a>	</li>-->
							<li id="home"><a class="hvr-sweep-to-right " href="index.php">Home</a></li>
							<li id="ab"><a class="hvr-sweep-to-right" href="about.php">About</a></li>
							<li id="eve"><a class="hvr-sweep-to-right" href="events.php">Events</a></li>
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
                   <form  name="myForm" method="Post" action="index.php" align="center onsubmit="return login_valid()">
                   	<frameset>
                   <div class="form-group">
                       <label class="sr-only" for="email">Email</label>
                       <input type="text" class="form-control input-sm" placeholder="Email" id="email" name="email"  onBlur="email_valid()">
                       <span id="em_err"></span>
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
		<script type="text/javascript">
			<!-- Validation Login Form --> 
function login_valid()
{
	
	
	var a=document.login.email.value.length;	
	//var reg = /^([a-z0-9])+\@([a-z])+\.([a-z])+$/;
   	if(a=="")
	{
		document.getElementById('email_error_login').innerHTML="* Required";
		document.register.email.focus();
		return false;
	}
	
	var c = document.login.password.value.length;
	//var x = /^[0-9]+$/;	
	//var x = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
	if(c == "")
		{
		document.getElementById('password_error_login').innerHTML = "* Required";
		document.register.password.focus();
		return false;
		}
		
		return true;
		
}


		</script>