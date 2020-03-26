<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<style>
		h1 {text-align: center; font-family: Calibri;}
	</style>
</head>
<body>

<h1>Queries</h1>
<div align='center'>
	<!--<button type="submit" onclick="location.href='<#?php echo site_url('main/query1')?>'">Total customer orders</button> -->
	<form action=<?php echo site_url('main/query1')?>>
		Stage Number: <input type="text" name="stageNo"><br>
		Date: <input type="text" name="date"><br>
		Member ID: <input type="text" name="memberID"><br>
		<input type="submit" onclick="location.href='<?php echo site_url('main/query1')?>'">
	</form>
</div>
    
</body>
</html>
