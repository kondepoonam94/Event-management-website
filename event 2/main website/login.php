
<script type="js/validation.js"></script>
<!--login-->
<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("reg");

if(isset($_REQUEST["submit"]))
{
//$user=$_REQUEST["user"]	;
$email=$_REQUEST["email"];
$pass=$_REQUEST["pass"];
$query=mysql_query("select * from user where email='$email' && pass='$pass'");
$rowcount=mysql_num_rows($query);
if($rowcount==true)
{
	$_SESSION['email']=$email;
	header('location:index.html');
}
else{
	 $message = "email and/or Password incorrect.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
header( "refresh:3; url=index.html" );
}
}
?>