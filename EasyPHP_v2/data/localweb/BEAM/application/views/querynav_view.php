<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Authorization System</title>
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
<h1>Authorization System</h1>
<div align='center'>
	<!--<button type="submit" onclick="location.href='<#?php echo site_url('main/query1')?>'">Total customer orders</button> -->
	<form action=<?php echo site_url('main/query1')?>>





			<div id ="id1"> <strong>Date:</strong> <input type="date" name="date" ><br></div>
			<div id ="id1" >
				<strong>Stage:</strong>
				<select name="stage">
				<option >Stage</option>
				<?php
				// A sample product array
				$result = mysql_query("SELECT stageName FROM stage");

				$columnValues = Array();

				while ( $row = mysql_fetch_assoc($result) ) {
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
<div id ="id1"> <strong>Member ID:</strong> <input type="text" name="memberID" placeholder="member ID"><br></div>




<div align='center'>
			<br><input value='Submit' type="submit" onclick="location.href='<?php echo site_url('main/query1')?>'"></br>
	</form>
</div>

</body>
</html>
