<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h2>Students result</h2>



<form method="post" action=""<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"">


    Name:<input type="text" name="name" placeholder='Enter name'>
    Roll no:<input type="number" name="roll" plcaeholder = 'Ender roll number' >

    <br><br>
    <h4>Input the number</h4>
    Mathematic: <input type="number" name="math" >
    English: <input type="number" name='english'>
    <br><br>
    Science:<input type="number" name="science">
    History:<input type="number" name="history">
    <br><br>
    
    
    <input type="submit" value="Get_Result">


</form>


<?php 

if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $name =$_POST['name'];
        $roll = $_POST['roll'];
    

        $math  = $_POST['math'];
        $science  = $_POST['science'];
        $english  = $_POST['english'];
        $history = $_POST['history'];


        $sum = ($math) -(-$science) -(-$english) -(-$history) ;



        $average=$sum/4.00;


        echo "Name of the student:   " .$name."<br>";
      
        echo "Roll no of the student:".$roll."<br>";
        
        echo "Average mark that acquired by the student:".$average;


    

}





?>

<form action="upload.php" method="post" enctype="multipart/form-data">
Select image to upload:
<input type="file" name="fileToUpload" id="fileToUpload">
<input type="submit" value="Upload Image" name="submit">
    
</form>




</body>
</html>