<?php include 'connect.php';
    session_start();
	$user_id = $_SESSION["userid"];
	
	$date1=$_POST['date1'];
    $date2=$_POST['date2']; 
    
	$sql="SELECT count(date) as 'totalD' from tabledata WHERE (date  >=  '$date1' && date  <=  '$date2') && (user_id= $user_id)";
	$res=mysqli_query($conn,$sql);
	$values=mysqli_fetch_assoc($res);
	$num_rows=$values['totalD'];
  
	
    $sql4="SELECT count(division) as 'wR' from tabledata WHERE (date  >=  '$date1' && date  <=  '$date2') && (division='平日') && (user_id= $user_id)";
	$res4=mysqli_query($conn,$sql4);
	$values4=mysqli_fetch_assoc($res4);
	$num_rows4=$values4['wR'];
	
	$sql1="SELECT floor(sum(floor(extraTime)) + sum(extraTime - floor(extraTime)) * 100.0/60) +
       ((sum(floor(extraTime)) + sum(extraTime - floor(extraTime)) * 100.0/60) % 1) * 60.0/100  as 'sumT' from tabledata WHERE (date  >=  '$date1' && date  <=  '$date2') && (user_id= $user_id) ";
	$res1=mysqli_query($conn,$sql1);
	$values1=mysqli_fetch_assoc($res1);
	$num_rows1=$values1['sumT'];
	
	$sql2="SELECT floor(sum(floor(extraWork)) + sum(extraWork - floor(extraWork)) * 100.0/60) +
       ((sum(floor(extraWork)) + sum(extraWork - floor(extraWork)) * 100.0/60) % 1) * 60.0/100  as 'sumD' from tabledata WHERE (date  >=  '$date1' && date  <=  '$date2') && (user_id= $user_id)";
	$res2=mysqli_query($conn,$sql2);
	$values2=mysqli_fetch_assoc($res2);
	$num_rows2=$values2['sumD'];
	
	
	$sql3="SELECT sum(7.45 - totalTime) as 'cL' from tabledata WHERE (date  >=  '$date1' && date  <=  '$date2') && (Wrecord = '遅刻' || Wrecord = '早退') && (user_id= $user_id )";
	$res3=mysqli_query($conn,$sql3);
	$values3=mysqli_fetch_assoc($res3);
	$num_rows3=$values3['cL'];
	
	
	
	$sql5="SELECT count(Wrecord) as 'Wc' from tabledata WHERE (date  >=  '$date1' && date  <=  '$date2') && (Wrecord='有総休暇') && (user_id= $user_id)";
	$res5=mysqli_query($conn,$sql5);
	$values5=mysqli_fetch_assoc($res5);
	$num_rows5=$values5['Wc'];
	
	$sql6="SELECT count(Wrecord) as 'W1' from tabledata WHERE (date  >=  '$date1' && date  <=  '$date2') && (Wrecord='振替休日') && (user_id= $user_id)";
	$res6=mysqli_query($conn,$sql6);
	$values6=mysqli_fetch_assoc($res6);
	$num_rows6=$values6['W1'];
	
	$sql7="SELECT count(Wrecord) as 'W2' from tabledata WHERE (date  >=  '$date1' && date  <=  '$date2') && (Wrecord='特別休暇') && (user_id= $user_id)";
	$res7=mysqli_query($conn,$sql7);
	$values7=mysqli_fetch_assoc($res7);
	$num_rows7=$values7['W2'];
	
	$sql8="SELECT count(Wrecord) as 'W3' from tabledata WHERE (date  >=  '$date1' && date  <=  '$date2') && (Wrecord='欠勤') && (user_id= $user_id)";
	$res8=mysqli_query($conn,$sql8);
	$values8=mysqli_fetch_assoc($res8);
	$num_rows8=$values8['W3'];
 
    
?>	


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
	<link rel="stylesheet"type="text/css" href="register.css"/>
	
</head>
<body>

    <form method="post">
	
	<div class="input-group">
			出勤日数 : <?php echo $num_rows; ?>
	</div>
	<div class="input-group">
			所定労働日数 : <?php echo $num_rows4;?>
	</div>
	<div class="input-group">
			時間外時間 : <?php echo number_format($num_rows1,2);?>
		
	</div>
	<div class="input-group">
		   休日時間 : <?php echo number_format($num_rows2,2);?>
	</div>
	
	<div class="input-group">
		   遅刻 . 早退  : <?php echo number_format($num_rows3,2);?>
			
	</div>
	
	<div class="input-group">
			欠勤 : <?php echo $num_rows8;?>
			
	</div>
	<div class="input-group">
			有総休暇 : <?php echo $num_rows5;?>
			
	</div>
	<div class="input-group">
			振替休日 : <?php echo $num_rows6;?>
			
	</div>
	<div class="input-group">
		   特別休暇 : <?php echo $num_rows7;?>
			
	</div>
	<!--<form align="center" action="login.html">
	<div class="input-group">
		<button type="submit" class="btn" name="submit">OK</button>
	</div>
	</form>	-->
	
	<div>
	<a href="next.php" class="btn">OK</a>
    </div>
	</form>

</body>
</html>

