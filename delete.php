<?php include 'connection.php';?>
<?php

$id=$_REQUEST['ID'];
$query = "DELETE FROM ToDoList WHERE ID=$id"; 
$result = mysqli_query($conn,$query) ;
header("Location: ToDoTable.php");

?>