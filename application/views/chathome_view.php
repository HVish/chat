<div class="container">
	<div class="well">
		<h3>Hello <strong><?php echo $user_details['username'];?></strong></h3>
	</div>
	<div class="row userbody">
		<div class="col-sm-3 panel panel-primary ">
			<div class="panel-heading">
				<h3>Messages</h3>
			</div>
			<div class="panel-body list-group message">
				<?php 
					foreach($message_names as $row){ 
						echo '<a class="list-group-item"><span class="badge"></span>'."$row[username]".'</a>';
					}
				?>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="well well-sm row">
				<h3>Vishnu Singh</h3>
			</div>
			<div class="row chat">
				<div class="panel-body list-group">
					<a class="list-group-item"><span class="badge">12</span> New</a>
					<a class="list-group-item"><span class="badge">5</span> Deleted</a> 
					<a class="list-group-item"><span class="badge">3</span> Warnings</a> 
					<a class="list-group-item"><span class="badge">12</span> New</a>
					<a class="list-group-item"><span class="badge">5</span> Deleted</a> 
					<a class="list-group-item"><span class="badge">3</span> Warnings</a> 
					<a class="list-group-item"><span class="badge">12</span> New</a>
					<a class="list-group-item"><span class="badge">5</span> Deleted</a> 
					<a class="list-group-item"><span class="badge">3</span> Warnings</a>
					<a class="list-group-item"><span class="badge">12</span> New</a>
					<a class="list-group-item"><span class="badge">5</span> Deleted</a> 
					<a class="list-group-item"><span class="badge">3</span> Warnings</a> 
				</div>
			</div>
			<div class="row">
				<textarea class="col-sm-12 userinput" name="" id="" rows="4" placeholder="Type a message..."></textarea>
			</div>
		</div>
		<div class="col-sm-3 panel panel-primary ">
			<div class="panel-heading">
				<h3>Online</h3>
			</div>
			<div class="panel-body list-group online">
				<a class="list-group-item"><span class="badge">12</span> New</a>
				<a class="list-group-item"><span class="badge">5</span> Deleted</a> 
				<a class="list-group-item"><span class="badge">3</span> Warnings</a> 
				<a class="list-group-item"><span class="badge">12</span> New</a>
				<a class="list-group-item"><span class="badge">5</span> Deleted</a> 
				<a class="list-group-item"><span class="badge">3</span> Warnings</a> 
				<a class="list-group-item"><span class="badge">12</span> New</a>
				<a class="list-group-item"><span class="badge">5</span> Deleted</a> 
				<a class="list-group-item"><span class="badge">3</span> Warnings</a>
				<a class="list-group-item"><span class="badge">12</span> New</a>
				<a class="list-group-item"><span class="badge">5</span> Deleted</a> 
				<a class="list-group-item"><span class="badge">3</span> Warnings</a> 
			</div>
		</div>
	</div>
</div>