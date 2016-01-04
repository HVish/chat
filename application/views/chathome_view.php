<div class="container">
	<script>
		function showmsg(str){
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					document.getElementById("msgbody").innerHTML = xmlhttp.responseText;
				}
			};
			xmlhttp.open("POST", '<?php echo base_url()."index.php/home/getmessages/"?>' + str, true);
			xmlhttp.send();
		}
	</script>
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
					$counter = 0;
					foreach($message_names as $row){ 
						echo '<a class="list-group-item" id="msgsender'."$counter".'" onclick="showmsg($(this).text())">'."$row[username]".'</a>';
					}
				?>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="well well-sm row">
				<h3>Vishnu Singh</h3>
			</div>
			<div class="row chat" id="msgbody">
				<h4><strong>vishnu</strong></h4>
				<p>hi kesa h....!</p> 
				<hr>
				<h4><strong>admin</strong></h4>
				<p>mast hu tu bata...</p>
				<hr>
				<h4><strong>vishnu</strong></h4>
				<p>hi kesa h....!</p> 
				<hr>
				<h4><strong>admin</strong></h4>
				<p>mast hu tu bata...</p>
				<hr>
				<h4><strong>vishnu</strong></h4>
				<p>hi kesa h....!</p> 
				<hr>
				<h4><strong>admin</strong></h4>
				<p>mast hu tu bata...</p>
				<hr>
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