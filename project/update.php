<?php 
	$con = mysqli_connect('127.0.0.1', 'root', ''); 
	
	mysqli_select_db($con, 'user'); 
	
	$sql = "UPDATE users SET name ='$_POST[name]', surname ='$_POST[surname]', email ='$_POST[email]', id ='$_POST[id]',"; 
	
	if (mysqli_query($con, $sql))
	 	header("refresh:1; url = index.php");
	else
		echo "Not Update";

?> 