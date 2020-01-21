<?php 
    
	$servername="localhost";
	$dbuser="root";
	$pwd="";
	$dbname="timesheet";
	   
	$conn=new mysqli($servername,$dbuser,$pwd,$dbname);
	   
	 if($conn->connect_error){
		die('connection failed:'.$conn->connect_error);
	}
	
	?>