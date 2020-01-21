<?php include 'connect.php';
    session_start(); 

	if($_SERVER['REQUEST_METHOD']=='POST'){
		$username=$_POST['uname'];
		$password=md5($_POST['passwd']);
		
		//$userId= $_POST['userId'];
		$sql = "SELECT * FROM register WHERE username = '$username' and password ='$password'";
		
		$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
		
		//---------------------------------------
		//$userIdData= mysqli_query($conn,$sqlquery) or die(mysqli_error($conn));
		
		$sqlquery = "SELECT user_id FROM register WHERE username = '$username' and password ='$password'";
		$userIdData = $conn->query($sqlquery);
		$rows = $userIdData->fetch_assoc();
		
		$count = mysqli_num_rows($result);
		//---------------------------------------
		
		if ($count == 1){
			$_SESSION['username'] = $username;
			$_SESSION['userid'] = $rows['user_id'];//9;
			//$_SESSION['userid'] = $username;
		}
		else{
			//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
			echo("username or password doesnt match."."</br>");
		}
	}
		//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
		
	if (isset($_SESSION['username'])){
		$login_username = $_SESSION['username'];
		$uid= $_SESSION['userid'];
		
		echo $_SESSION['username'];
		echo("SUCESSFUL LOGIN");
		
		header("Refresh:1; url=next.php");
		
	}
	else{
		echo("LOGIN FAILED");
		header("Refresh:1; url=Login.html");
	}

?>