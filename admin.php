<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css"> 
	<title>Admin</title>
</head>
<body>
<div class="container">

	<div class="header">
		<div class="left_head">
			<h3>VENKATA SAI</h3>
		</div>
		<div class="right_head">
		<ul>
			<li><a href="index.php"     id="btn1">Home</a></li>
			<li><a href="myblog.php"    id="btn1">Myblog</a></li>
			<li><a href="admin.php"   class='active-page' 		id="btn1">Admin</a></li>
			<li><a href="contact.php" 	id="btn1">Contact</a></li>			
		</ul>
		</div>
	</div>

	<div id="mid_content">
		<div id="inner_content">
			<div id="inhead">
				<div id="l1">	
					<h2>Admin Page</h2>
				</div>
				<div id="r1">
						<a class="nav-link" id="sai" href="#" onclick="document.getElementById('id01').style.display='block'">LOGIN</a>
				</div>

				<div id="gap">
				</div>

				
				<div id="id01" class="modal">
					<form name="form1" class="modal-content animate" action="login.php" method="POST">
							<div class="imgcontainer">
								<span onclick="document.getElementById('id01').style.display='none'" class="close">&times;</span>
								<img src="images/dummy.png" alt="UserAvatar" class="avatar">
							</div>
	
							<?php
								if(isset($_SESSION["isvalidated"])){
									echo '<script>alert("incorrect details")</script>';
									unset($_SESSION["isvalidated"]);
									session_unset();
									session_destroy();
								}
							?>
	
							<div class="subcontainer">
								<b>Username</b>
								<input type="text" placeholder="Enter Username" name="usrname" required>
	
								<b>Password</b>
								<input type="password" placeholder="Enter Password" name="pass" required>
								<div id="cent">
									<button type="submit">Login</button>				
									<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
								</div>
							</div>
					</form>
				</div>
			</div>
		</div>
	</div>


	<div id="footer">
		<p>copyright &copy; VenkatSai</p> 
	</div>

</div>

<script>
	var modal = document.getElementById('id01');
	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
			if (event.target == modal) {
					modal.style.display = "none";
			}
	}
</script>

</body>
</html>