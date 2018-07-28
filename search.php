
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("todolist", $con);
$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("mysql", $con);


//$result="select * from info where name like '%".$name."%' ";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $course = $_POST['course'];

    //var_dump($name); die();
    # code...
}


 
    
//course like  &'%".$course."%' subject like &'%".$subject."%' department like &'%".$department."%' gender like &'%".$gender."%' contact like &'%".$contact."%' prelim like &'%".$prelim."%' midterm like &'%".$midterm."%' final like &'%".$final."%' endterm like &'%".$endterm."%' remarks like &'%".$remarks."%'
    

$result = mysql_query("select * from info where name like '%".$name."%' ");
//$result2 = mysql_query($result) or die($myQuery."<br/><br/>".mysql_error());
//var_dump($result);  die();
while($row = mysql_fetch_array($result))

 {

/*
    echo (isset($row['name'])&&!empty($row['name'])) ? $row['name'] : '';
    echo (isset($row['course'])&&!empty($row['course'])) ? $row['course'] : '';
    echo (isset($row['subject'])&&!empty($row['subject'])) ? $row['subject'] : '';
    echo (isset($row['department'])&&!empty($row['department'])) ? $row['department'] : '';
    echo (isset($row['gender'])&&!empty($row['gender'])) ? $row['gender'] : '';
    echo (isset($row['contact'])&&!empty($row['contact'])) ? $row['contact'] : '';
    echo (isset($row['prelim'])&&!empty($row['prelim'])) ? $row['prelim'] : '';
    echo (isset($row['midterm'])&&!empty($row['midterm'])) ? $row['midterm'] : '';
    echo (isset($row['final'])&&!empty($row['final'])) ? $row['final'] : '';
    echo (isset($row['endterm'])&&!empty($row['endterm'])) ? $row['endterm'] : '';
    echo (isset($row['remarks'])&&!empty($row['remarks'])) ? $row['remarks'] : ''; */
    
        $name= $row['name'];
        $course= $row['course'];
        $subject=  $row['subject'];
        $department=  $row['department'];
        $gender = $row['gender'];
        $contact = $row['contact'] ;
        $prelim= $row['prelim'];
        $midterm=  $row['midterm'];
        $final= $row['final'];
        $endterm= $row['endterm'] ;
        $remarks= $row['remarks']; 

}
mysql_close($con);
 
?>




<html>
<body>
<form>
 
  <table  style="color:purple;border-style:groove; height:150px;width:350px" background="3.jpg">
        <tr>
           
            <td style="font-family:Copperplate Gothic Bold">&nbsp;</td>
        </tr>
        <tr>
            <td style="color:red;background-color:aqua;" class="auto-style3">Name:</td>
            <td class="auto-style4">
                <input id="Text1" type="text" value='<?php echo  $name; ?>'/></td>
        </tr>
        <tr>
            <td style="color:red;background-color:aqua;" class="auto-style3">Course</td>
            <td class="auto-style4">
                <input id="Text2" type="text" value='<?php echo  $course; ?>'/></td>
        </tr>
        <tr>
             <td style="color:red;background-color:aqua;" class="auto-style3">Subject:</td>
            <td class="auto-style4">
                <input id="Text3" type="text" value='<?php echo  $subject; ?>' /></td>
        </tr>
        <tr>
             <td style="color:red;background-color:aqua;" class="auto-style3">Department:</td>
            <td class="auto-style4">
                <input id="Text4" type="text" value='<?php echo  $department ?>' /></td>
        </tr>
        <tr>
            <td style="color:red;background-color:aqua;" class="auto-style3">Gender:</td>
            <td class="auto-style4">
                <input id="Text5" type="text" value='<?php echo  $gender; ?>' /></td>
        </tr>
        <tr>
           <td style="color:red;background-color:aqua;" class="auto-style3">Contact:</td>
            <td class="auto-style4">
                <input id="Text6" type="text" value='<?php echo  $contact; ?>' ></td>
        </tr>
        <tr>
             <td style="color:red;background-color:aqua;" class="auto-style3">Prelim:</td>
            <td class="auto-style4">
                <input id="Text7" type="text" value='<?php echo  $prelim; ?>'/></td>
        </tr>
        <tr>
             <td style="color:red;background-color:aqua;" class="auto-style3">Midterm:</td>
            <td class="auto-style4">
                <input id="Text8" type="text" value='<?php echo  $midterm; ?>' /></td>
        </tr>
        <tr>
             <td style="color:red;background-color:aqua;" class="auto-style3">Final:</td>
            <td class="auto-style4">
                <input id="Text9" type="text"  value='<?php echo  $final; ?>'/></td>
        </tr>
        <tr>
             <td style="color:red;background-color:aqua;" class="auto-style3">Endterm:</td>
            <td class="auto-style4">
                <input id="Text10" type="text" value='<?php echo  $endterm; ?>'/></td>
        </tr>
        <tr>
            <td style="color:red;background-color:aqua;" class="auto-style3">Remarks:</td>
            <td class="auto-style4">
                <input id="Text11" type="text" value='<?php echo  $remarks; ?>'/></td>
        </tr>
        
        <tr>
            <td></td>
        </tr>
    </table>
</form>
</body>
</html>