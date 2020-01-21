 <?php include 'connect.php';
         
         /*
		 $id=$_POST['id'];
		 $date=$_POST['date'];
		 $dayName=$_POST['dayName'];
		 $division=$_POST['division'];
		 $startTime=$_POST['startTime'];
		 $endTime=$_POST['endTime'];
		 $breakTime=$_POST['breakTime'];
		 $totalTime=$_POST['totalTime'];
		 $extraTime=$_POST['extraTime'];
		 $extraWork=$_POST['extraWork'];
		 $content=$_POST['content'];
		 $Wrecord=$_POST['Wrecord'];*/
		 
		 $id=$_GET['id'];
		 $date=$_GET['date'];
		 $dayName=$_GET['dayName'];
		 $division=$_GET['division'];
		 $startTime=$_GET['startTime'];
		 $endTime=$_GET['endTime'];
		 $breakTime=$_GET['breakTime'];
		 $totalTime=$_GET['totalTime'];
		 $extraTime=$_GET['extraTime'];
		 $extraWork=$_GET['extraWork'];
		 $content=$_GET['content'];
		 $Wrecord=$_GET['Wrecord'];
 
     	 $query = "UPDATE tabledata SET date='$date',dayName='$dayName',division='$division',startTime='$startTime',
         endTime='$endTime',breakTime='$breakTime',totalTime='$totalTime',extraTime='$extraTime',extraWork='$extraWork',
		 content='$content',Wrecord='$Wrecord' WHERE id=$id";
		 
		 try{
			 
			 $data=$conn->query($query);
			 
		 }
		 Catch(Exception $e){
			 echo $e;
			 
		 }
	    
		//echo "<br><a href='TimeCal.html'>back</a><br>";
		if($data){
			//echo "update successful";
			header("Location: updatedTimeCalTable.php");
			
		 }
		 else{
			 echo "update failed";
			 
		 }
		 $conn->close();
	
	
		 
	?>	
		
	 
	 