<?php
include('connectdb.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>view-info</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<h2>VIEW</h2>
<hr>
<?php
   $ins="SELECT Id,Name,Age,Gender,Country,Email,Subject FROM contactnew";
   $result = $conn->query($ins);
   if ($result->num_rows > 0) 
   {
       echo "<table><tr><th>ID</th><th>NAME</th><th>Age</th><th>Gender</th><th>Country</th><th>Subject</th></tr>";
       while($row = $result->fetch_assoc()) 
       {
           echo "<tr><td>" . $row["Id"]. "</td><td>" . $row["Name"]. "</td><td>" . $row["Age"]. "</td><td>" . $row["Gender"]. "</td><td>" . $row["Country"]. "</td><td>" . $row["Subject"]. "</td></tr>";
       }
       echo "</table>";
     }
    else 
    {
      echo '<script>alert("No results found...!")</script>';
    }
?>


</body>
</html>