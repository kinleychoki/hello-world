<?php
session_start();
//session_unset();

if(isset($_SESSION["userid"])){

session_destroy(); //destroy the session

header("Location: home.php"); // Redirecting To Home Page
die();

}
else{
	header("location: home.php");//Redirecting To Home Page
	die();
}

?>