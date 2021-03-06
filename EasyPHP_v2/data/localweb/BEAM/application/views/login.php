<!-- It's RESPONSIVE TOO! -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Login Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<style>

body:before {
	content:"";
	position:fixed;
	left:0;
	top:0;
	right:0;
	bottom:0;
	z-index:-1;
	background: linear-gradient(to bottom, #649699 50%, #ededed 50%) ;
}
			h1{
				color: #505050;
			}
			.modal-footer {   border-top: 0px; }

			.modal-dialog{
				width: 300px;

			}
			.modal-content{
				height: 400px;
				border-radius: 20px;
			}
			.modal-body{
				padding-top: 30px;
			}

			.form-group{
				padding-top: 10px;
			}





		</style>
	</head>
	<body>
	<!--login form-->
		<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
			<div id="logoBanner" align="center">
			<img  src="../assets/images/gf-logo.png" alt="Glastonbury Festival" width="200" height="auto" >
</div>

	  <div class="modal-dialog">
	  <div class="modal-content">
	      <div class="modal-header">
	          <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
	          <h1 class="text-center">Login</h1>
	      </div>
	      <div class="modal-body">
	          <form class="form col-md-12 center-block" action="<?=base_url();?>index.php/Login/makeLogin" method="post">
	            <div class="form-group">
	              <input type="text" name="username" class="form-control input-lg" placeholder="Username">
	            </div>
	            <div class="form-group">
	              <input type="password" name="password" class="form-control input-lg" placeholder="Password">
	            </div>
	            <div class="form-group">
	              <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
	              <span class="pull-right"><?php if(isset($error)) echo "<b><span style='color:red;'>$error</span></b>"; ?></span>
	            </div>
	          </form>
	      </div>
	      <div class="modal-footer ">
	          <div class="col-md-12">
	          <button class="btn hidden" data-dismiss="modal" aria-hidden="true">&nbsp;</button>

			  </div>
	      </div>
	  </div>
	  </div>

	</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	</body>
</html>
