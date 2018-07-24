<!DOCTYPE html>
<html>
<body>

<?php

	function sum($x, $y){

		$z = $x +$y;
		return $z;
	}
echo sum(5,10);
echo sum(7,10);
	echo "<br>";

$cars = array('volvo' ,'bmw' ,'toyota');
echo "I like ".$cars[0]. ",".$cars[1].",".$cars[2];
	echo "<br>";

$arrlength = count($cars);
	echo "<br>";
for($x = 0; $x<$arrlength; $x++){
	echo $cars[$x];
	echo "<br>";


}

$age =  array('Peter' =>'35' , 'Ben' =>"37","Joe" =>"43" );
echo "peter is ". $age['Peter']. " years old.";


//Associative array 

foreach ($age as $key => $value) {

	echo "Key=".$key.", value =".$value;
	echo "<br>";
	# code...
}


//sorting arrys 
//sort -sort arrays in ascending order
//rsort() -sort arrays 9n desending order
//asort() - sort associative arrays in assending order ,according to the value

 echo $_SERVER['PHP_SELF'];
 echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];


?>

<form method ='post', action="<?php echo $_SERVER['PHP_SELF'];?>">
	

	Name: <input type ="text" name="fname">
	<input type="submit">
</form>


<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
	$name =$_REQUEST['fname']; //collecting value of the input field
	if(empty($name)){
		echo "Name is empty";
	}else{
		echo $name;
	}
	# code...
}

?>
<form action="index.php" method="post"> 
Nmae: <input type="text" name="name">
E-mail: <input type="text" name="email">
<input type="submit">


</form>



</body>
</html>