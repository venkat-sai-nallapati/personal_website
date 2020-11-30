<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Contact</title>
</head>
<body>
<div class="container">
	<div class="header">
		<div class="left_head">
			<h3>VENKATA SAI</h3>
		</div>
		<div class="right_head">
		<ul>
			<li><a href="index.php"    id="btn1">Home</a></li>
			<li><a href="myblog.php"    id="btn1">Myblog</a></li>
			<li><a href="admin.php"   id="btn1">Admin</a></li>
			<li><a href="contact.php" class='active-page' 		id="btn1">Contact</a></li>			
		</ul>
		</div>
	</div>
	<div id="mid_content">
	<div id="inner_content">
	<div id="cont">
		<div id="head">
			<h1>Contact Me</h1>
			<p>Swing by for a cup of coffee, or leave me a message</p>
		</div>
		<div id="fillform">
			<div id="inner_form">
				<form action="" method="POST">
					Name : <input type="text" name="name" required><br><br>
					Age : <input type="number" name="age" required><br><br>
					Gender : <select  name="gender" required>
							 <option style="display:none">
							 <option value="male">Male</option>
	          				 <option value="female">Female</option>
	          				 <option value="others">Others</option>
	          				 </select><br><br>
					Country : <select  name="country" required>
							 <option disabled selected value> select your country </option>
							 <option value="india">India</option>
	          				 <option value="pakistan">Pakistan</option>
	          				 <option value="america">America</option>
	          				 <option value="australia">Australia</option>
	          				 <option value="germany">Germany</option>
	          				 <option value="egypt">Egypt</option>
	          				 </select><br><br>
	          		Email : <input type="email" name="email" required><br><br>
					Subject : <textarea name="subject" placeholder="Write something.." style="height:170px" required></textarea><br><br>
					<input type="submit" name="submit">
				</form>
			</div>
			<div id="msg">
				 <?php
					if(isset($_POST['submit']))
					{
				        $input1 = $_POST["name"]; 
				        $input2 = $_POST["age"];
				        $input3 = $_POST["gender"];  
				        $input4 = $_POST["country"]; 
				        $input5 = $_POST["email"]; 
				        $input6 = $_POST["subject"];  
				        $conn= new mysqli("localhost","root","","contactme");
						if($conn->connect_error)
						{
						  	echo '<script>alert("Server access Error. \nCant connect to database.")</script>';}			
						$ins="INSERT INTO contactnew VALUES(default,'$input1','$input2','$input3','$input4','$input5','$input6')";
						if($conn->query($ins)===TRUE){
						    echo '<script>alert("Thank you. Data submission successfull...")</script>';}
						else{
							echo '<script>alert("Some error has occured. \nPlease fill the form again.")</script>';}
					}				
				  ?>
			</div>
		</div>
	</div>

	<div id="icon">
		<a href="https://www.facebook.com/nallapati.venkatsai/" class="fa fa-facebook"></a>
		<a href="#" class="fa fa-twitter"></a>
		<a href="#" class="fa fa-google"></a>
		<a href="https://www.linkedin.com/in/nallapati-venkata-sai-96a716171/" class="fa fa-linkedin"></a>
		<a href="#" class="fa fa-youtube"></a>
		<a href="https://www.instagram.com/nallapativenkatsai/?hl=en" class="fa fa-instagram"></a>
	</div>
</div>
</div>

	<div id="footer">
		<p>copyright &copy; VenkatSai </p>
	</div>
</div>
</body>
</html>