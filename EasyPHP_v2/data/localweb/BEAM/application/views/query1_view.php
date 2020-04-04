<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<style>
	body { font-family: helvetica;}
		h1, h2 { text-align: center; font-family: Calibri; }
table {
    border-spacing: 0;
}
th, td {
    border: 1px solid #ededed;
    padding: 0.5em 1em;
}
th{
	background-color: #ededed;
}
td{
	background-color: #f9f9f9;
}
/* the first 'th' within the first 'tr' of the 'thead': */
thead tr:first-child th:first-child {
    border-radius: 0.3em 0 0 0;
}
/* the last 'th' within the first 'tr' of the 'thead': */
thead tr:first-child th:last-child {
    border-radius: 0 0.3em 0 0;
}
/* the first 'td' within the last 'tr' of the 'tbody': */
tbody tr:last-child td:first-child {
    border-radius: 0 0 0 0.3em;
}
/* the last 'td' within the last 'tr' of the 'tbody': */
tbody tr:last-child td:last-child {
    border-radius: 0 0 0.3em 0;
}

	</style>
</head>
<body>

<h1>Authorization System</h1>
<div align='center'>
	<!--<button type="submit" onclick="location.href='<#?php echo site_url('main/query1')?>'">Total customer orders</button>-->
	<!--<button type="submit" onclick="location.href='<#?php echo site_url('main/query2')?>'">Ranked items by sales</button>-->
<?php


	$stageName = $_GET["stage"];
	$date = $_GET["date"];
	$memberID = $_GET["memberID"];
	$tmpl = array ('table_open' => '<table class="mytable">');
	$this->table->set_template($tmpl);

	$this->db->query('drop table if exists temp');
	$this->db->query('create temporary table temp as (select s.stageName, p.date, m.band from performance p join stage s on p.stageNumber = s.stageNumber join member m on p.bandName = m.band where m.memberID = "'.$memberID.'" and s.stageName = "'.$stageName.'" and p.date = "'.$date.'" )');
	$query = $this->db->query('select * from temp;');
	$capacityQuery = $this->db->query("SELECT * FROM Stage WHERE stageName = '$stageName'");

	foreach ($capacityQuery->result() as $row)
	{
   $CurrentOccupation =  $row->quantityLive;
	 $capacity = $row->backstageCapacity;
	}


	if($query->num_rows == 0)
	{
		echo ' <script type="text/javascript">
	            alert("You don\'t have access to this stage.");
	            window.location.href = "/BEAM/index.php/main/querynav";

	</script>';
	}
	else
	{
		if($capacity > $CurrentOccupation){
			$stageName = ucfirst($stageName);
			echo "ALLOWED";
			$this->db->query("UPDATE Stage SET quantityLive = quantityLive + 1 WHERE stageName = '$stageName'");
			echo $this->table->generate($query); //do we really need the table?
		}
		else{
			echo ' <script type="text/javascript">
		            alert("This stage has reached maximum capacity");
		            window.location.href = "/BEAM/index.php/main/querynav";

		</script>';
		}


	}
?>


</div>

</body>
</html>
