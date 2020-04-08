<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<style>
	h1 { padding-top: 50px;text-align: center; font-family: Calibri; padding-top: 50px}

		div {
			background: #ededed;
			margin: auto;
		}

		#id1 {
			display: inline-grid;
			text-align: center;
			margin-right: 50px;
			padding-bottom: 10px;
			padding-top: 20px;
			font-family: Helvetica Neue, Helvetica, Arial;
			color: #646362;
		}

		input[type=submit] {
			width: 10%;
	  background-color: #337ab7;
	  color: white;
	  padding: 14px 20px;
	  margin: 8px 0;
	  border: none;
	  border-radius: 4px;
	  cursor: pointer;
}

input[type=submit]:hover {
	background-color: #286090;
}
input[type=text], select{
		  width: 200px;
		  padding: 12px 20px;
		  margin: 8px 0;
		  display: inline-block;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-sizing: border-box;
			height: 40px;
		}
input[type=date], select{
		  width: 200px;
		  padding: 12px 20px;
		  margin: 8px 0;
		  display: inline-block;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-sizing: border-box;
			height: 40px;
		}

		.stage{
			width: 200px;
		  padding: 12px 20px;
		  margin: 8px 0;
		  display: inline-block;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-sizing: border-box;
			height: 40px;

		}
	</style>
</head>

<body>
<h1>In/Out System</h1>

<div align='center'>
	<form action="query2" method="GET">
		<div id ="id1">
			<strong>Date:</strong>
			<select name="date">
			<option>Date</option>
			<?php
			// Drop-down date for In/Out System
			$result = mysql_query("SELECT DISTINCT date FROM performance");
			// Drop-down date with correct UK date format
			//$result = mysql_query("SELECT DATE_FORMAT(date, '%d/%m/%Y') AS date FROM performance GROUP BY date");
			$columnValues = Array();

			while ($row = mysql_fetch_assoc($result) ) {
				$columnValues[] = $row['date'];
			}
			
			foreach($columnValues as $value){
				?>
				<option value="<?php echo strtolower($value); ?>"><?php echo $value; ?></option>
				<?php
			}
				?>
			</select>
		</div>
	
		<div id ="id1">
			<strong>Stage:</strong>
			<select name="stage">
			<option>Stage</option>
				<?php
				$result = mysql_query("SELECT stageName FROM stage");
				$columnValues = Array();

				while ($row = mysql_fetch_assoc($result) ) {
					$columnValues[] = $row['stageName'];
				}
				
				foreach($columnValues as $value){
					?>
					<option value="<?php echo strtolower($value); ?>"><?php echo $value; ?></option>
					<?php
				}
					?>
			</select>
		</div>
	
		<div id ="id1">
			<strong>Member ID:</strong>
			<input type="text" name="memberID" placeholder="member ID"><br>
		</div>

		<div align='center'>
			<br><input type="submit" name="in_button" value="Member In">
		</div>
		
		<div align='center'>
			<input type="submit" name="out_button" value="Member Out">
		</div>
		
		<div align='center'>
			<input type="submit" name="reset_button" value="Reset Counter"></br>
		</div>
	</form>
</div>

</body>
</html>
