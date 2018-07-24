
<?php
// including the database connection file
include_once("connection.php");
 
if(isset($_POST['save']))
{    
    $id = $_POST["ID"];
    
    $title=$_POST["title"];
    $comment=$_POST["comment"];
       
    
    // checking empty fields
    if(empty($title) || empty($comment) ) {            
        if(empty($title)) {
            echo "<font color='red'>Title field is empty.</font><br/>";
        }
        
        if(empty($comment)) {
            echo "<font color='red'>Description field is empty.</font><br/>";
        }
        
              
    } else {    
        //updating the table
        $result = mysqli_query($conn, "UPDATE ToDoList SET Title='$title',Description='$comment' WHERE ID=$id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: ToDoTable.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['ID'];
 
//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM ToDoList WHERE ID=$id");
 
while($res = mysqli_fetch_array($result))
{
    $id = $res['ID'];
    $title = $res['Title'];
    $comment = $res['Description'];
}
?>

        


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>



	<div class="container">
		<form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
			<div class="form-group">
				
				
				
				<label for="title" > Title:</label>
				
				<input type="text" class="form-control" name="title" value="<?php echo $title; ?>">
				
			</div>

			<div class="form-group">
  				<label for="comment">Description:</label>
  				<textarea class="form-control" rows="5" id="comment" name="comment" value="<?php echo $comment; ?>" ></textarea>
			</div>
		
               <input type="hidden" name="ID" value="<?php echo $_GET['ID'];?>">
                
			<button type="submit" class="btn btn-primary" name="save" >Save</button>


		</form>

	</div>


	
 


</body>
</html>