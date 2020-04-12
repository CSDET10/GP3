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
<h1>In/Out System</h1>

<div align='center'>
<?php
	if (isset($_GET['in_button'])) {
		$stageName = $_GET["stage"];
		$date = $_GET["date"];
		$memberID = $_GET["memberID"];
		$tmpl = array ('table_open' => '<table class="mytable">');
		$this->table->set_template($tmpl);

		$this->db->query('drop temporary table if exists temp');
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
	            window.location.href = "/BEAM/index.php/main/querynav1";
				</script>';
		} else {
			if($capacity > $CurrentOccupation){
				$stageName = ucfirst($stageName);
				echo "ENTRY ALLOWED";
				$this->db->query("UPDATE Stage SET quantityLive = quantityLive + 1 WHERE stageName = '$stageName'");
				echo $this->table->generate($query); //do we really need the table?
			} else {
				echo ' <script type="text/javascript">
		            alert("This stage has reached maximum capacity");
		            window.location.href = "/BEAM/index.php/main/querynav1";
					</script>';
			}
		}

	} else if (isset($_GET['out_button'])) {
		$stageName = $_GET["stage"];
		$date = $_GET["date"];
		$memberID = $_GET["memberID"];
		$tmpl = array ('table_open' => '<table class="mytable">');
		$this->table->set_template($tmpl);

		$this->db->query('drop temporary table if exists temp');
		$this->db->query('create temporary table temp as (select s.stageName, p.date, m.band from performance p join stage s on p.stageNumber = s.stageNumber join member m on p.bandName = m.band where m.memberID = "'.$memberID.'" and s.stageName = "'.$stageName.'" and p.date = "'.$date.'" )');
		$query = $this->db->query('select * from temp;');
		$capacityQuery = $this->db->query("SELECT * FROM Stage WHERE stageName = '$stageName'");

		if($query->num_rows == 0)
		{
			echo '<script type="text/javascript">
	            alert("You are not in this stage.");
	            window.location.href = "/BEAM/index.php/main/querynav1";
				</script>';
		} else {
				$stageName = ucfirst($stageName);
				$this->db->query("UPDATE Stage SET quantityLive = quantityLive - 1 WHERE stageName = '$stageName'");
				echo '<script type="text/javascript">
					alert("EXIT ALLOWED");
		            window.location.href = "/BEAM/index.php/main/querynav1";
					</script>';
		}

	} else if (isset($_GET['reset_button'])) {
		$this->db->query('drop temporary table if exists temp');
		$this->db->query('create temporary table temp as (select quantityLive from stage where quantityLive <> 0)');
		$query = $this->db->query('select * from temp;');

		if($query->num_rows == 0) {
			echo ' <script type="text/javascript">
	            alert("All stages are empty.");
	            window.location.href = "/BEAM/index.php/main/querynav1";
				</script>';
		} else {
			echo '<script type="text/javascript">
		            alert("Resetting all entries...");
		            window.location.href = "/BEAM/index.php/main/querynav1";
					</script>';
			$this->db->query("UPDATE Stage SET quantityLive = 0");
		}
	} else {
		//no button pressed
	}
?>
</div>

</body>
</html>
