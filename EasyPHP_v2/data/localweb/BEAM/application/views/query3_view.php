<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<style>
		h1, h2 { text-align: center; font-family: Calibri; }
		table#counter { text-align: center; width: 580px; font-family: Calibri; border: 5px solid black; }
		table#counter td,th { border: 1px solid black; }
		th { background-color: #f2e4d5; }
	</style>
</head>
<body>

<h1>Queries</h1>
<div align='center'>
	<button type="submit" onclick="location.href='<?php echo site_url('main/query1')?>'">Total customer orders</button>
	<button type="submit" onclick="location.href='<?php echo site_url('main/query2')?>'">Ranked items by sales</button>
	<button type="submit" onclick="location.href='<?php echo site_url('main/query3')?>'">Counter</button>
</div>

<h2>Stage Counter</h2>

<script type="text/javascript">
    var stage1i = 0, stage2i = 0, stage3i = 0, stage4i = 0, stage5i = 0, stage6i = 0;
	
    function counterUp(opt) {
		switch (opt) {
			case stage1:
			stage1i++;
			document.getElementById('stage1').value = stage1i;
			break;
			case stage2:
			stage2i++;
			document.getElementById('stage2').value = stage2i;
			break;
			case stage3:
			stage3i++;
			document.getElementById('stage3').value = stage3i;
			break;
			case stage4:
			stage4i++;
			document.getElementById('stage4').value = stage4i;
			break;
			case stage5:
			stage5i++;
			document.getElementById('stage5').value = stage5i;
			break;
			case stage6:
			stage6i++;
			document.getElementById('stage6').value = stage6i;
			break;
		}
	}
	
    function counterDown(opt) {
		switch (opt) {
			case stage1:
			--stage1i;
			document.getElementById('stage1').value = stage1i;
			break;
			case stage2:
			--stage2i;
			document.getElementById('stage2').value = stage2i;
			break;
			case stage3:
			--stage3i;
			document.getElementById('stage3').value = stage3i;
			break;
			case stage4:
			--stage4i;
			document.getElementById('stage4').value = stage4i;
			break;
			case stage5:
			--stage5i;
			document.getElementById('stage5').value = stage5i;
			break;
			case stage6:
			--stage6i;
			document.getElementById('stage6').value = stage6i;
			break;
		}
	}
	
</script>

<div align='center'>

<table id="counter">
<tr>
<th scope="col">Stage</th>
<th>Capacity</th>
<th>Member Inside</th>
<th>Increase</th>
<th>Decrease</th>
</tr>

<tr>
<td>The Oasis</td>
<td>20</td>
<td><input type="text" id="stage1" size="2" value="0"></input></td>
<td><button onclick="counterUp(stage1)">  +  </button></td>
<td><button onclick="counterDown(stage1)">  -  </button></td>
</tr>

<tr>
<td>Main</td>
<td>30</td>
<td><input type="text" id="stage2" size="2" value="0"></td>
<td><button onclick="counterUp(stage2)">  +  </button></td>
<td><button onclick="counterDown(stage2)">  -  </button></td>
</tr>

<tr>
<td>The Bowl</td>
<td>10</td>
<td><input type="text" id="stage3" size="2" value="0"></td>
<td><button onclick="counterUp(stage3)">  +  </button></td>
<td><button onclick="counterDown(stage3)">  -  </button></td>
</tr>

<tr>
<td>John Peel</td>
<td>20</td>
<td><input type="text" id="stage4" size="2" value="0"></td>
<td><button onclick="counterUp(stage4)">  +  </button></td>
<td><button onclick="counterDown(stage4)">  -  </button></td>
</tr>

<tr>
<td>Jam Session</td>
<td>3</td>
<td><input type="text" id="stage5" size="2" value="0"></td>
<td><button onclick="counterUp(stage5)">  +  </button></td>
<td><button onclick="counterDown(stage5)">  -  </button></td>
</tr>

<tr>
<td>Premium</td>
<td>50</td>
<td><input type="text" id="stage6" size="2" value="0"></td>
<td><button onclick="counterUp(stage6)">  +  </button></td>
<td><button onclick="counterDown(stage6)">  -  </button></td>
</tr>
</table>

</div>
</body>
</html>