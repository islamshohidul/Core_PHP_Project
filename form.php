
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	.error {color: #FF0000;}


	</style>
</head>

<?php
$namerr=$emailerr =$gendererr=$websiteerr="";
$name=$email=$gender=$comment=$website="";


if ($_SERVER["REQUEST_METHOD"]=="POST") {
	if (empty($_POST['name'])) {
		$namerr = "Name is required";
		# code...
	}else{
		$name = test_input($_POST['name']);
	}
	if (empty($_POST['email'])) {
		$emailerr = "Email is required";
		# code...
	}else{
		$name = test_input($_POST['email']);
	}

	# code...
}


function test_input($data){
	$data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;


}


?>



<body>
	<h2>PHP form validation Example</h2>
	<p><span class ="error">* required field</span></p>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
	Name: <input type="text" name="name">
	<span class="error">* <?php echo $namerr;?></span>
	<br><br>
	E-mail: <input type="text" name="email">
	<span class="error">* <?php echo $emailerr;?></span>
	<br><br>
	Website: <input type="text" name="website">
	<span class="error">* <?php echo $websiteerr;?></span>
	<br><br>
	Comment: <textarea name="comment" rows="5" cols="40"></textarea>
	  <br><br>
	  Gender:
	  <input type="radio" name="gender" value="female">Female
	  <input type="radio" name="gender" value="male">Male
	  <input type="radio" name="gender" value="other">Other
	  <span class="error">* <?php echo $gendererr;?></span>
	  <br><br>
	  <input type="submit" name="submit" value="Submit">  



	</form>






</body>
</html>