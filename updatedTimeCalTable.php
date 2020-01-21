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
	 
	 /*$date = $_POST["date"];
	 $dayName = $_POST["dayName"];
	 $division = $_POST["division"];
	 $startTime = $_POST["startTime"];
	 $endTime = $_POST["endTime"];
	 $breakTime = $_POST["breakTime"];
	 $totalTime = $_POST["totalTime"];
	 $extraTime = $_POST["extraTime"];
	 $extraWork = $_POST["extraWork"];
	 $content = $_POST["content"];
	 $Wrecord = $_POST["Wrecord"]; */
	 
	 
	 
        $user_id = $_SESSION["userid"];	 
 
		$sql = "SELECT * FROM tabledata where user_id= $user_id";
		$result = $conn->query($sql);
         // output data of each row
		
		echo "<table border='1'>
			<tr>
			<th> 日付 </th>
			<th> 曜日 </th>
			<th> 区分 </th>
			<th> 始業時刻 </th>
			<th> 終業時刻 </th>
			<th> 休憩時間 </th>
			<th> 時間内時間 </th>
			<th> 時間外時間 </th>
			<th> 休日時間 </th>
			<th> 業務内容 </th>
			<th> 勤怠 </th>
			
			</tr>";
			if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
				
			echo "<tr>
			 <td>" . $row['date']. "</td>
			 <td>" . $row['dayName'] . "</td>
			 <td>". $row['division']. "</td>
			 <td>" . $row['startTime'] . "</td>
			 <td>" . $row['endTime'] . "</td>
			 <td>". $row['breakTime'] . "</td>
			 <td>" .$row['totalTime'] . "</td>
			 <td>" . $row['extraTime'] . "</td>
			 <td>". $row['extraWork'] . "</td>
			 <td>" . $row['content'] . "</td>
			 <td>" . $row['Wrecord'] . "</td>
			
			<td><a href='populateData.php?id=$row[id]&date=$row[date]&dayName=$row[dayName]&division=$row[division]&
			 startTime=$row[startTime]&endTime=$row[endTime]&breakTime=$row[breakTime]&
			 totalTime=$row[totalTime]&extraTime=$row[extraTime]&extraWork=$row[extraWork]&
			 content=$row[content]&Wrecord=$row[Wrecord]'>EDIT</a></td>
			
			
			</tr>";
			}	
		echo "</table>";
		}
		 else { 
			 echo "0 results"; 
			 }
		$conn->close();
		
		

?>
    <form align="center" action="shuke.html">
    <div class="input-group">
	     <br><button type="submit" class="btn" name="submit" align="center"> 集計 </button>
    </div>
    </form>
	 
	 <form align="center" action="next.php">
	 <div class="input-group">
	       <button type="submit" class="btn" name="submit" align="center"> BACK </button>
     </div>
     </form>