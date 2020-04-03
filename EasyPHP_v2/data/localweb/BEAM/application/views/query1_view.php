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


	$stageNo = $_GET["stageNo"];
	$date = $_GET["date"];
	$memberID = $_GET["memberID"];
	$tmpl = array ('table_open' => '<table class="mytable">');
	$this->table->set_template($tmpl);

	$this->db->query('drop table if exists temp');
	$this->db->query('create temporary table temp as (select s.stageName, p.date, m.band from performance p join stage s on p.stageNumber = s.stageNumber join member m on p.bandName = m.band where m.memberID = "'.$memberID.'" and p.stageNumber = "'.$stageNo.'" and p.date = "'.$date.'" )');
	$query = $this->db->query('select * from temp;');

	if($query->num_rows == 0)
	{
		echo "DENIED";
	}
	else
	{
		echo "ALLOWED";

		echo $this->table->generate($query); //do we really need the table?

	}
?>


</div>

</body>
</html>
