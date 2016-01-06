<div class="container">
	<script>
		var user=null;
		function showmsg(str){
			user=str;
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					document.getElementById("msgbody").innerHTML = xmlhttp.responseText;
					document.getElementById("chatboxheading").innerHTML = str;
				}
			};
			xmlhttp.open("POST", '<?php echo base_url()."index.php/home/getmessages/"?>' + str, true);
			xmlhttp.send();
		}
		
		setInterval(function (){
			$.ajax({
				type:"POST",
        		cache:false,
				url: "<?php echo base_url()."index.php/home/onlineusers/$user_details[username]";?>", 
				success: function(result){
					$(".online").html(result);
				}});
		}, 3000);
		setInterval(function(){
			if(user != null){
				$.ajax({
					type:"POST",
        			cache:false,
					url:"<?php echo base_url()."index.php/home/getmessages/"?>" + user,
					success: function(result){
						$("#msgbody").html(result);
					}});
			}
		},3000);
		function sendmsg(id,msg,e){
			if(e.keyCode == 13){
				//alert("Enter pressed");
				if(user != null){
					$.ajax({
						type:"POST",
	        			cache:false,
						data: {to:user,msg:msg},
						url:"<?php echo base_url().'index.php/home/sendmsg'?>",
						success: function(result){
							id.value = "";
							if(result == "falied"){
								alert("failed to send msg!");
							}
						},
						error: function(errors){
							alert("failed to send msg! Check your internet connection...");	
						}});
				}
				else{
					id.value = "";
					alert("select a conversation");
				}
			}
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
				<h3 id="chatboxheading">No message is selected...</h3>
			</div>
			<div class="row chat" id="msgbody">
				
			</div>
			<div class="row">
				<textarea class="col-sm-12 userinput" name="" id="msgtype" rows="4" 
					placeholder="Type a message..." onkeydown="sendmsg(this,this.value,event)"></textarea>
			</div>
		</div>
		<div class="col-sm-3 panel panel-primary ">
			<div class="panel-heading">
				<h3>Online</h3>
			</div>
			<div class="panel-body list-group online">
				<?php foreach($online as $ol) { ?>
					<a class="list-group-item"><?php echo $ol['username'];?></a>
				<?php } ?>
			</div>
		</div>
	</div>
</div>