<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<style>

	table {
		border-spacing: 0;
		height: 100%;
		width: 100%;
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
		border-radius: 0.6em 0 0 0;
	}
	/* the last 'th' within the first 'tr' of the 'thead': */
	thead tr:first-child th:last-child {
		border-radius: 0 0.6em 0 0;
	}
	/* the first 'td' within the last 'tr' of the 'tbody': */
	tbody tr:last-child td:first-child {
		border-radius: 0 0 0 0.6em;
	}
	/* the last 'td' within the last 'tr' of the 'tbody': */
	tbody tr:last-child td:last-child {
		border-radius: 0 0 0.6em 0;
	}

		body {
			background: rgb(235,235,235);
			font-family: Helvetica;
		}
		#widgetBlock{
			margin-top: 80px;
			width: 90%;
			margin-left: 10%;
			margin-right: 10%;

		}
		#id1 {
			display: inline-block;
			vertical-align: top;
			background: white;
			border-radius: 15px;
			box-shadow: 1px 1px 4px rgba(0,0,0, 0.2);
			width:20%;
			height: 350px;
			margin-right: 20px;

		}

		h1 {
			text-align: center;
			font-family: Calibri; }


		.button {
			background-color: #337ab7;
			color: white;
			padding: 14px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			display: block;
			margin: 0 auto;
}

	.button:hover{
		background-color: #286090;
	}


	</style>
</head>
<body>

<div id = "widgetBlock">
		<div id ="id1">
		<?php

		$tmpl = array ('table_open' => '<table class="mytable">');
		$this->table->set_template($tmpl);

		$this->db->query('drop table if exists temp');
		$this->db->query('create temporary table temp as (select stageName as "Stage Name", backstageCapacity - quantityLive as "Left" From Stage )');
		$query = $this->db->query('select * from temp;');

		echo $this->table->generate($query);
?>

		</div>
		<div id ="id1">
			<?php

			$tmpl = array ('table_open' => '<table class="mytable">');
			$this->table->set_template($tmpl);

			$this->db->query('drop table if exists temp');
			$this->db->query('create temporary table temp as (select s.stageName as "Stage",COUNT(*) as "Total" from stage s join performance p on s.stageNumber = p.stageNumber GROUP BY s.stageNumber  )');
			$query = $this->db->query('select * from temp;');

			echo $this->table->generate($query);
	?>
		</div>
		<div id ="id1">
			<h1>Shortcuts</h1>
			<?php
			$usersLabel1 = array("Performance","Performance","Member", "Member", "Performance"); #admin, beam, security officer, security guard, BMT
			$activePermission = $this->login_model->permission();
			$button1Label = $usersLabel1[$activePermission];

			?>

<form action="/BEAM/index.php/main/<?php echo  $button1Label ?>/add">
    <input class = "button" type="submit" value= "Add <?php echo  $button1Label ?>">
</form>

		</div>
		<div id ="id1"></div>

</div>

</div>
</body>
</html>
