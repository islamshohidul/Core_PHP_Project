<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php include 'connection.php';?>

	<div class="container">
		<form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
			<div class="form-group">
				<label for="title" > Title:</label>
				<input type="text" class="form-control" name="title">
				
			</div>

			<div class="form-group">
  				<label for="comment">Description:</label>
  				<textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
			</div>

			<button type="submit" class="btn btn-primary" name="save" >Save</button>


		</form>

	</div>


	 <?php
    	if(isset($_POST['save'])){


    		$title = $_POST['title'];
    		$comment = $_POST['comment'];

        $sql = mysqli_query($conn, "INSERT INTO ToDoList (Title, Description)
        VALUES ('$title','$comment')");
 		header("Location: ToDoTable.php");
    }


    ?>

    
 


</body>
</html>