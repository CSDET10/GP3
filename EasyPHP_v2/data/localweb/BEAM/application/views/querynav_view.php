<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Queries</title>
	<style>
	h1 { padding-top: 50px;text-align: center; 	font-family: Calibri; padding-top: 50px}

		div {
			background: white;
			margin: auto;
		}

		#id1 {
			display: inline-block;
			margin-right: 20px;
			padding-bottom: 50px;
			font-family: Helvetica Neue, Helvetica, Arial;
		}

	</style>

</head>


<body>

<h1>Queries</h1>
<div align='center'>
	<!--<button type="submit" onclick="location.href='<#?php echo site_url('main/query1')?>'">Total customer orders</button> -->
	<form action=<?php echo site_url('main/query1')?>>
		<ul>
			<li id ="id1"> <strong>Stage Number:</strong> <input type="text" name="stageNo"><br></li>
			<li id ="id1"> <strong>Date:</strong> <input type="date" name="date"><br></li>
			<li id ="id1"> <strong>Member ID:</strong> <input type="text" name="memberID"><br></li>

		<br><input type="submit" onclick="location.href='<?php echo site_url('main/query1')?>'"></br>
		</ul>
	</form>
</div>

</body>
</html>
