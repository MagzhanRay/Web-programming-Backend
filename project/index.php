<!DOCTYPE html> 
<html> 
    <head> 
        <title>Update and Delete</title> 
    </head> 
<body> 
<?php 
    $con = mysqli_connect('127.0.0.1', 'root', ''); 
    mysqli_select_db($con, 'user'); 
    $sql = "SELECT * FROM users"; 
    $records = mysqli_query($con, $sql); 
?> 
<table> 
    <tr> 
        <th>name</th> 
        <th>surname</th> 
        <th>email</th> 
        <th>id</th> 
        <th>submit</th>
        <th>delete</th>
</tr> 
<?php 
    while ($row = mysqli_fetch_array($records)) { 
        echo "<tr><form action=update.php method=post>"; 
        echo "<td><input type=varchar name=name value='".$row['name']."'></td>"; 
        echo "<td><input type=varchar name=surname value='".$row['surname']."'></td>"; 
        echo "<td><input type=varchar name=email value='".$row['email']."'></td>"; 
        echo "<td><input type=int name=id value='".$row['id']."'></td>"; 
        echo "<td><input type=submit>";
        echo "<td><a href=delete.php?ID=".$row['id'].">Delete</a></td>";
        echo "</form></tr>"; 

} 
?> 
</table> 
</body> 
</html>