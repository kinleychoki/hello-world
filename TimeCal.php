<style>
th{
	background:#e6ecff;
}
td{
	background:lightgrey;
}
body {
	font-size: 120%;
	background: #e6ecff;
}

.btn {
	padding: 10px;
	font-size: 15px;
	color: white;
	background: #4d79ff;
	border: none;
	border-radius: 5px;
	text-decoration: none;
	
}
</style>

<?php include 'connect.php';
     session_start();
	 
	 $date = $_POST["date"];
	 // echo $date;
	 $dayName = $_POST["dayName"];
	 // echo $dayName;
	 $division = $_POST["division"];
	 // echo $division;
	 $startTime = $_POST["startTime"];
	 // echo $startTime;
	 $endTime = $_POST["endTime"];
	 // echo $endTime;
	 $breakTime = $_POST["breakTime"];
	 // echo $breakTime;
	 $totalTime = $_POST["totalTime"];
	 // echo $totalTime;
	 $extraTime = $_POST["extraTime"];
	 // echo $extraTime;
	 $extraWork = $_POST["extraWork"];
	 // echo $extraWork;
	 $content = $_POST["content"];
	 // echo $content;
	 $Wrecord = $_POST["Wrecord"];
	 // echo $Wrecord;
	 
	 
	 $user_id = $_SESSION["userid"]; //$_SESSION['userid'] 
	 //echo $user_id;
	

	$sql = "INSERT INTO tabledata(date,dayName,division,startTime,endTime,breakTime,
		  totalTime,extraTime,extraWork,content,Wrecord,user_id) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";

	if($query = $conn->prepare($sql)) { // assuming $mysqli is the connection
	    $query->bind_param("sssssssssssi",$date,$dayName,$division,$startTime,$endTime,$breakTime,$totalTime,$extraTime,$extraWork,$content,$Wrecord,$user_id);
	    $query->execute();
		
			
		echo "<script type='text/javascript'>
         alert('INSERT SUCCESSFULL');
         window.location='next.php';
        </script>";
		
	    // printf("%d Row inserted.\n", $query->affected_rows);
	    // any additional code you need would go here.
	}
	
	else {
		
	    $error = $conn->errno . ' ' . $conn->error;
	    echo $error; // 1054 Unknown column 'foo' in 'field list'
	}   
	    
		
		
		
		
		
$conn->close();
		
?>
  