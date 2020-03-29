<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Queries</title>
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
			padding-bottom: 50px;
			font-family: Helvetica Neue, Helvetica, Arial;
			color: #646362;
		}

		#id2 {
			background-color: #e6e6e6;
			height: 30px;
			color: #555;
			font-weight: normal;
			font-family: Verdana, Arial, sans-serif;
  			font-size: 12px;
			border: 1px solid #d3d3d3;
			border-bottom-right-radius: 4px;
			border-bottom-left-radius: 4px;
			border-top-right-radius: 4px;
			border-top-left-radius: 4px;
			display: inline-block;
    		position: relative;
    		line-height: normal;
    		margin-right: .1em;
    		cursor: pointer;
    		vertical-align: middle;
    		text-align: center;
    		overflow: visible;
  	
		}

		#id3 {
			height: 20px;

		}

		#id4 {
			background: white;
		}

	</style>

</head>


<body>

<h1>Queries</h1>
<div align='center'>
	<!--<button type="submit" onclick="location.href='<#?php echo site_url('main/query1')?>'">Total customer orders</button> -->
	<form action=<?php echo site_url('main/query1')?>>
			<div id ="id3"></div>
			<div id ="id1"> <strong>Stage Number:</strong> <input type="text" name="stageNo"><br></div>
			<div id ="id1"> <strong>Date:</strong> <input type="date" name="date"><br></div>
			<div id ="id1"> <strong>Member ID:</strong> <input type="text" name="memberID"><br></div>
</div>
<div align='center' id="id4">
			<br><input id ="id2" value='Submit' type="submit" onclick="location.href='<?php echo site_url('main/query1')?>'"></br>
	</form>
</div>

</body>
</html>
