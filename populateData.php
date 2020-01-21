<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <title></title>

    <link rel="stylesheet" type="text/css" href ="register.css">
	
	
  <script src="TimeCal.js"></script>

<body>
	<form method="GET"action="update.php">
             
	    <div class="input-group">
			<input type="hidden" name="id" value="<?php echo $_GET['id'];?>" />
		</div>

	
	    <div class="input-group">
			<label> 日付 </label>
			<input type="text" name="date" id="date" value="<?php echo $_GET['date'];?>" />
		</div>
		<div class="input-group">
			<label> 曜日 </label>
			<input type="text" id="day" name="dayName" value="<?php echo $_GET['dayName'];?>" />
		</div>
		<div class="input-group">
			<label> 区分 </label>
			<select id="sel" name="division" value="<?php echo $_GET['division'];?>" />
        			<option></option> 
					<option value="平日"
					<?php if($_GET['division']=='平日') echo "selected";?>>平日</option>
					
					<option value="休日"
					<?php if($_GET['division']=='休日') echo "selected";?>>休日</option>
				    </select>
		</div>
		
		<div class="input-group">
			<label> 始業時刻 </label>
			<input type="text" name="startTime" id="startTime" onkeyup="getTime();" value="<?php echo $_GET['startTime'];?>" >
		</div>
		
		<div class="input-group">
			<label> 終業時刻 </label>
			<input type="text" name="endTime" id="endTime" onkeyup="getTime();" value="<?php echo $_GET['endTime'];?>">
		</div>
			
		<div class="input-group">
			<label> 休憩時間 </label>
			<input type="text" name="breakTime" id="break" value="<?php echo $_GET['breakTime'];?>" />
		</div>	
			
		<div class="input-group">
			<label> 時間内時間 </label>
			<input type="text" name="totalTime" id="total" value="<?php echo $_GET['totalTime'];?> "/>
		</div>	
		 
		<div class="input-group">
			<label> 時間外時間 </label>
			<input type="text" name="extraTime" id="extraTime" value="<?php echo $_GET['extraTime'];?> "/>
		</div>
		
		<div class="input-group">
			<label> 休日時間 </label>
			<input type="text" name="extraWork" id="extraWork" value="<?php echo $_GET['extraWork'];?>"/><br>
		</div>
		
		<div class="input-group">
			<label> 業務内容 </label>
			<textarea name="content" id="content"> <?php echo $_GET['content'];?></textarea>
		</div>
		
		<div class="input-group">
			<label> 勤怠 </label>
			<select id="Wrecord" name="Wrecord" value="<?php echo $_GET['Wrecord'];?>" />
				<option></option> 
				<option value="欠勤"
				<?php if($_GET['Wrecord']=='欠勤') echo "selected";?>>欠勤</option>
				
				<option value="振替休日"
				<?php if($_GET['Wrecord']=='振替休日') echo "selected";?>>振替休日</option>
				
				<option value="休日出勤"
				<?php if($_GET['Wrecord']=='休日出勤') echo "selected";?>>休日出勤</option>
				
				<option value="遅刻"
				<?php if($_GET['Wrecord']=='遅刻') echo "selected";?>>遅刻</option>
				
				<option value="早退"
				<?php if($_GET['Wrecord']=='早退') echo "selected";?>>早退</option>
				
				<option value="有総休暇"
				<?php if($_GET['Wrecord']=='有総休暇') echo "selected";?>>有総休暇</option>
				
				<option value="特別休暇"
				<?php if($_GET['Wrecord']=='特別休暇') echo "selected";?>>特別休暇</option>
				
				<option value="その他"
				<?php if($_GET['Wrecord']=='その他') echo "selected";?>>その他</option>
			</select>
		</div>
		
		<div class="input-group">
			<br><button type="submit" class="btn" name="submit" value="update"> UPDATE </button><br>
		</div>
		
	</form>	
</body>
</html>