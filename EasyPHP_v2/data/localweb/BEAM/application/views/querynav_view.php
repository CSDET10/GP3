<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Queries</title>
	<style>
		
		h1 {
			text-align: center; 
			font-family: Helvetica Neue, Helvetica, Arial;
		}

		div {
			background: white;
			margin: auto;
		}

		ul {
			margin: 0;
			padding: 0;
			list-style-type: none;
		}

		li {
			display: inline-block;
			margin-right: 20px;
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
			<li> <strong>Stage Number:</strong> <input type="text" name="stageNo"><br></li>
			<li> <strong>Date:</strong> <input type="date" name="date"><br></li>
			<li> <strong>Member ID:</strong> <input type="text" name="memberID"><br></li>
		<br><input type="submit" onclick="location.href='<?php echo site_url('main/query1')?>'"></br>
		</ul>
	</form>
</div>
    
</body>
</html>
