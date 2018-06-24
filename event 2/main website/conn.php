<?php

$conn = mysqli_connect("localhost", "root", "", "reg");

if(!$conn){
	echo "<script>window.alert('Connection Not Establish')</script>";
}
?>