<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<style>
	#nav { font-family: Arial; font-size: 14px; width: 94%; float: left;  list-style: none; }
	#nav {list-style: none; border:0; margin: 0 0 0 0; }
	#rightnav { list-style: none;}
	#nav li { float: left; align:center;}
	#rightnav li { float: right; }
	#nav li a { margin: 0 0 0 0; font-size: 30px; display: block; padding: 8px 15px; text-decoration: none; font-family:Impact; font-weight:Bold; box-shadow: 2px 5px 10px #AAAAAA; color:#ffffff}
	#nav li a:hover { height:90px; color:#ffffff }
	#nav a:link, a:visited { }
	#Home  a:link, a:visited {height:50px; background-color:#2d93b9; }
	#Performance  a:link, a:visited {height:60px; background-color: #2db98b ; }
	#Band  a:link, a:visited {height:70px; background-color: #61a543 ; }
	#Stage  a:link, a:visited {height:50px; background-color: #f19500;}
	#Agent  a:link, a:visited {height:60px; background-color: #c36fcb; }
	#Member  a:link, a:visited {height:80px; background-color: #ff4f33; }
	#Blank  a:link, a:visited {height:60px; background-color: #c36fcb; }
	#Queries  a:link, a:visited {height:80px; background-color: #ff4f33; }
	#colorBan {background-color: #60969b; height:60px; z-index:1; }
	#bar {z-index:2;  }
	body {margin:0 0 0 0}
	</style>
</head>
<body>

	<div id="bar">

		<ul id="nav">
			<li id="Home"><a href='<?php echo site_url('')?>'>HOME</a></li>
			<li id="Performance"><a href='<?php echo site_url('main/Performance')?>'>PERFORMANCE</a></li>
			<li id="Band"><a href='<?php echo site_url('main/Band')?>'>BAND</a></li>
			<li id="Stage"><a href='<?php echo site_url('main/Stage')?>'>STAGE</a></li>
			<li id="Agent"><a href='<?php echo site_url('main/Agent')?>'>AGENT</a></li>
			<li id="Member"><a href='<?php echo site_url('main/Member')?>'>MEMBER</a></li>
			<ul id="rightnav">
				<li id="Blank"><a href='<?php echo site_url('main/blank')?>'>Blank Page</a></li>
				<li id="Queries"><a href='<?php echo site_url('main/querynav')?>'>Queries</a></li>
			</ul>
		</ul>
	</div>
	<div id="colorBan">
	</div>
</body>
</html>
