<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<style>
	#Home  a:link  {height:50px; background-color:#2d93b9; }
	#Performance  a:link    {height:60px; background-color: #2db98b ; }
	#Band  a:link    {height:70px; background-color: #61a543 ; }
	#Stage  a:link    {height:50px; background-color: #f19500;}
	#Agent  a:link    {height:60px; background-color: #c36fcb; }
	#Member  a:link    {height:80px; background-color: #ff4f33; }
	#Logout  a:link    {height:60px; background-color: #a1b92d; }
	#EntrySystem  a:link   {height:80px; background-color: #2d85b9; }

	#Home  a:hover {height:90px; background-color:#2d93b9; }
	#Performance a:hover {height:90px; background-color: #2db98b ; }
	#Band a:hover {height:90px; background-color: #61a543 ; }
	#Stage a:hover {height:90px; background-color: #f19500;}
	#Agent a:hover {height:90px; background-color: #c36fcb; }
	#Member a:hover {height:90px; background-color: #ff4f33; }
	#Logout a:hover {height:90px; background-color: #a1b92d; }
	#EntrySystem a:hover {height:90px; background-color: #2d85b9; }

	#nav { font-family: Arial; font-size: 14px; width: 94%; float: left;  list-style: none; }
	#nav {list-style: none; border:0; margin: 0 0 0 0; }
	#nav li { float: left; align:center;}
	#nav li a { margin: 0 0 0 0; font-size: 30px; display: block; padding: 8px 15px; text-decoration: none; font-family:Impact; font-weight:Bold; box-shadow: 2px 5px 10px #AAAAAA; color:#ffffff}


	#rightnav { list-style: none;}
	#rightnav li { float: right; }


	#colorBan {background-color: #93A8BA; height:60px; z-index:1; }
	#logoBanner{background-color: #649699;}
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

				<li id="Logout"><a href='<?php echo site_url('login/logout')?>'>Logout</a></li>
				<li id="EntrySystem"><a href='<?php echo site_url('main/querynav')?>'>Entry system</a></li>

			</ul>
		</ul>
	</div>
	<div id="colorBan">
	</div >
</body>
</html>
