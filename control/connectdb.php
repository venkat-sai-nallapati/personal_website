<?php

	$conn= new mysqli("localhost","root","","contactme");
	if($conn->connect_error)
	{
			echo 'Cant connect to database';
		
	}			
?>