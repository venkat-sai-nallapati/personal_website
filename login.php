<?php
session_start();
$input1=$_POST["usrname"];
$input2=$_POST["pass"];
$ans="sai";
$error="invalid credentials";
if($input1==$ans and $input2==$ans)						/*successfull */
{
	$_SESSION["user"] = $input1;
	header("Location: dashboard.php", true, 301);
}
else																					/* UN successfull */
{
	$_SESSION["isvalidated"]=$error;
	header("Location: admin.php", true, 301);
}
/*
$conn= new mysqli("localhost","root","","gym");
$sql="SELECT * FROM members WHERE username='$input1' and pswd = '$input2' ";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($result=mysqli_query($conn,$sql))
{
  $rowcount=mysqli_num_rows($result);
  if($rowcount==0){
    echo 'Invalid credentials...';                 /* for failure 
    $_SESSION["isvalidated"]=$error;
    header("Location: ../index.php", true, 301);
    }
  else{
    if($row['role_mem']=='admin'){
      echo 'login successfull';                     /* for admin login
      $_SESSION["user"] = $input1;
      header("Location: ../dashboard.php", true, 301);
    }
    else{
      echo 'login successfull';                     /* for member login
      $_SESSION["user"] = $input1;
      header("Location: ../user.php", true, 301);
    }
    }
}
else
{
 echo 'query error !!!';
}
mysqli_close($conn);
*/

?>