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
	$user_id = $_SESSION["userid"];
	
	$date1=$_POST['date1'];
    $date2=$_POST['date2']; 
    
	$sql = "SELECT * FROM tabledata where user_id= $user_id && date  >=  '$date1' && date  <=  '$date2'"; //= $_SESSION['userid']; 
	$result = $conn->query($sql);
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
?>

    <br><form align="center" action="shuke.html">
    <div class="input-group">
	     <button type="submit" class="btn" name="submit" align="center"> 集計 </button>
    </div>
    </form>

	<form align="center" action="next.php">
    <div class="input-group">
	     <button type="submit" class="btn" name="submit" align="center"> OK </button>
    </div>
    </form>
