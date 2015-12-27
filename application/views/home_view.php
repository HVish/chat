<div class="container">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h4>Log In</h4>
				</div>
				<div class="panel-body">
					<form action="<?php echo base_url()?>index.php/home/submit" method="post" role="form">
						<div class="form-group">
							<label for="user">Username</label>
							<input type="text" name="user" class="form-control" placeholder="Enter Username">
						</div>
						<div class="form-group">
							<label for="pass">Password</label>
							<input type="password" name="pass" class="form-control" placeholder="Enter your password">
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-md btn-default">
						</div>
					</form>
					<a href="<?php echo base_url()?>index.php/signup">Signup here</a>
				</div>
			</div>
		</div>
		<div class="col-sm-4"></div>
	</div>
</div>