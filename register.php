<?php  include 'connect.php';
      session_start();
   //if(isset($_POST['register'])){
	   $username = $_POST['username'];
	   $password=md5($_POST['password']);
	   $cpassword=md5($_POST['cpassword']);
	   $sign_up=$_POST['sign_up'];
	   
	   if(isset($sign_up)){
	   if(empty($username)||empty($password)||empty($cpassword)){
		   $error="fill all the fields";
		   header("Refresh:1; url=register.html");
	   }
	   //validate password & confirm Password
	   if($password!=$cpassword){
		   $error="passwords do not match";
		   header("Refresh:1; url=register.html");
	   }
	   if(strlen($_POST["password"])<='8'){
		   $error="password length should be atleast 8";
		   header("Refresh:1; url=register.html");
	   }
	   if(!isset($error)){
		   $sthandler = $conn->prepare("SELECT username FROM register WHERE username = ?");
		   $sthandler->bind_param('s', $username);
           $sthandler->execute();
		   $row = $sthandler->fetch();
	        	  
			if($row > 0){
				session_start();
				echo "user already exist";
				header("Refresh:1; url=register.html");
			}else{
				$sql = $conn->prepare("INSERT INTO register (username, password,cpassword) VALUES (? ,?,? )");
				$sql->bind_param("sss",$username,$password,$cpassword);
				$sql->execute();
				echo("SUCESSFUL CREATED");	
				header("Refresh:1; url=login.html");
			}
	   }
	   else{
		   echo "error occured:".$error;
		   exit();
	   }
	  }	
	   
	   
  // }


?>
	

	
	   

