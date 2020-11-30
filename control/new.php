<?php
include('connectdb.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>new-info</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body style="color:red;">
<h2>ADD</h2>
<hr>
<div class="cont">
	<div class="innercont">
	<div class="subcontainer">
	<form action="" method="POST" id="f1">
		ID : <input type="number" name="id" required> <br><br>
		NAME  : <input type="text" name="name" required> <br><br>
		AGE  : <input type="number" name="age" required> <br><br>
		GENDER  : <input type="text" name="gender" required> <br><br>
		COUNTRY  : <input type="text" name="country" required> <br><br>
		EMAIL  : <input type="text" name="email" required> <br><br>
		SUBJECT  : <input type="text" name="subject" required> <br><br>
		<div class="subcenter">
		<input type="submit" name="submitted" value="ADD">
</div>
	</form>
</div>
	</div>
</div>

<?php		
if(isset($_POST['submitted']))
{
	$input1 = $_POST["id"]; 
	$input2 = $_POST["name"];
	$input3 = $_POST["age"];  
	$input4 = $_POST["gender"];
	$input5 = $_POST["country"]; 
	$input6 = $_POST["email"]; 
	$input7 = $_POST["subject"]; 

	$sql="SELECT * FROM contactnew WHERE id='$input1' ";
	$result=mysqli_query($conn,$sql);
  $rowcount=mysqli_num_rows($result);
	if($rowcount==0)
	{
		$ins="INSERT INTO contactnew VALUES('$input1','$input2','$input3','$input4','$input5','$input6','$input7')";
		if($conn->query($ins)===TRUE)
		{
				echo '<script>alert("Data insertion successfull.")</script>';
		}
		else{
			/*echo "Error updating record: " . $conn->error;*/
			echo '<script>alert("some error occured.!!!")</script>';
		}	
	}
	else{
		echo '<script>alert("ID already exists !!!")</script>';
	}



}
?>
</body>
</html>