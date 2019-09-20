<?php
    //Connect with mysql
    $con = mysqli_connect('127.0.0.1','root','');

    //Select Database
    mysqli_select_db($con,'user');

    //Select Query
    $sql = "DELETE FROM users WHERE id='$_GET[ID]'";

    //Execute query
    if(mysqli_query($con,$sql))
    	header("refresh:1; url=index.php");
    else
    	echo "Not Deleted";	   
?>