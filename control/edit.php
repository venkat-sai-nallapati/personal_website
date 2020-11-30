<?php
include('connectdb.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>edit-info</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body style="color:red;">
<h2>EDIT</h2>
<hr>
<div class="cont">
	<div class="innercont">
	<div class="subcontainer">
<form action="" method="POST" id="f1">
		ID : <input type="number" name="id" required> <br><br>
		NAME  : <input type="text" name="name" > <br><br>
		AGE  : <input type="number" name="age" > <br><br>
		GENDER  : <input type="text" name="gender" > <br><br>
		COUNTRY  : <input type="text" name="country" > <br><br>
		EMAIL  : <input type="text" name="email" > <br><br>
		SUBJECT  : <input type="text" name="subject" > <br><br>
	<div class="subcenter">
  	<input type="submit" name="submitted" value="UPDATE">
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
	if($rowcount==0){
		echo '<script>alert("INVALID ID ENTERED  !!!")</script>';
	}
	else{			
			$newinput=array($input1,$input2,$input3,$input4,$input5,$input6,$input7);    /* to be updated  */

			$ins1="SELECT * FROM contactnew WHERE id=$input1";
			$result = $conn->query($ins1);
			$row = $result->fetch_assoc();
			$pastinput=array($row['Id'],$row['Name'],$row['Age'],$row['Gender'],$row['Country'],$row['Email'],$row['Subject']);
			for($i=1;$i<count($newinput);$i++)
			{
				if($newinput[$i]=="")
				{
					$newinput[$i]=$pastinput[$i];
				}
				else{				}
			}

			$ins2="UPDATE contactnew SET Name='$newinput[1]',Age='$newinput[2]',Gender='$newinput[3]',Country='$newinput[4]',Email='$newinput[5]',Subject='$newinput[6]' WHERE Id='$input1' ";
			if($conn->query($ins2)===TRUE)
			{
					echo '<script>alert("Updation successfull.")</script>';
			}
			else{
				/*echo "Error updating record: " . $conn->error;*/
				echo '<script>alert("some error occured.!!!")</script>';
			}					
	}
			

			


}
?>
</body>
</html>