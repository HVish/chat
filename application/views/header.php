<!doctype html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo base_url()?>css/bootstrap.css">
		<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"-->
		<link rel="stylesheet" href="<?php echo base_url()?>css/styles.css">
		<script src="<?php echo base_url()?>js/jquery-1.11.3.min.js"></script>
		<script src="<?php echo base_url()?>js/bootstrap.js"></script>
		<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script-->
	</head>
	<body>
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span> 
						</button>
						<a class="navbar-brand" href="<?php echo base_url()?>">IChat</a>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav">
							<li class="active"><a href="<?php echo base_url()?>">Home</a></li>
							<li><a href="#">Page 1</a></li>
							<li><a href="#">Page 2</a></li> 
							<li><a href="#">Page 3</a></li> 
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#"><span class="glyphicon glyphicon-user"></span> 
							<?php if(isset($user_details['username'])) echo $user_details['username']; else echo "Sign Up"?></a></li>
							<li><a href="<?php echo base_url()."index.php/home/";
								if(isset($user_details['username'])) echo "logout";?>"><span class="glyphicon glyphicon-log-in"></span>
							<?php if(isset($user_details['username'])) echo "Log Out"; else echo "Login"?></a></li>
						</ul>
					</div>
				</div>
			</nav>