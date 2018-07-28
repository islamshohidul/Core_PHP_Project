

<?php
  /* Student Grade System
     Author : Jake R. Pomperada
  Date   : October 5, 2011 Wednesday
  Tool   : PHP/MySQL
 */  

  // Block any possible error from the browser
  error_reporting(0);
?>
<?php 
    
      $name =$_REQUEST['name']; 
      $course = $_REQUEST['course']; 
      $sex = $_REQUEST['sex'];
      $department = $_REQUEST['department'];   
      $subject =$_REQUEST['subject']; 
      $contact =  $_REQUEST['contact']; 
       
     
  if (isset($_REQUEST['solve']))
       {
    
        $prelim = $_REQUEST['prelim'];
        $midterm = $_REQUEST['midterm'];
        $final = $_REQUEST['final']; 
    
      $solve1 = ($_REQUEST['prelim'] * 0.2);
      $solve2 = ($_REQUEST['midterm'] * 0.3);
      $solve3 = ($_REQUEST['final'] * 0.5);
  
      $add = ($solve1 + $solve2 + $solve3);
  
  $endterm = round($add);
  
  if ($add >= 75) 
     {
          $remarks = "PASSED";
        }
       else {
           $remarks = "FAILED";
       } 
 } 
 
 if (isset($_REQUEST['clear']))
       {
        $name = ""; 
        $course = ""; 
        $subject="";
        $department = ""; 
        $contact =  "";  
        $prelim = "";
        $midterm = "";
        $final = ""; 
        $endterm = "";
        $remarks = ""; 
       }
    
 if (isset($_REQUEST['save']))
       {
   
$name = strtoupper($_REQUEST['name']);
$course = strtoupper($_REQUEST['course']);
$deparment = strtoupper($_REQUEST['department']);
$sex = strtoupper($_REQUEST['sex']);
$contact = $_REQUEST['contact'];
$prelim = $_REQUEST['prelim'];
$midterm = $_REQUEST['midterm'];
$gender = $_REQUEST['gender'];
$final = $_REQUEST['final'];
$endterm = $_REQUEST['endterm'];
$remarks = strtoupper($_REQUEST['remarks']);

header("Location: grade_diplay.php");

//CONNECT TO DATABASE--------------------
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("todolist", $con);
   
/*
 *  Specify the field names that are in the form. This is meant 
 *  for security so that someone can't send whatever they want 
 *  to the form.
 */
 $allowedFields = array(
 'name',
 'course',
 'subject',
 'department',
 'contact',
 'prelim',
 'midterm',
 'final',
 'endterm',
 'remarks'
 );
// Specify the field names that you want to require...
$requiredFields = array(
 'name',
 'course',
 'subject',
 'department',
 'contact',
 'prelim',
 'midterm',
 'final'
);

$errors = array();
foreach($_POST AS $key => $value)
{
 // first need to make sure this is an allowed field
 if(in_array($key, $allowedFields))
 {
  $$key = $value;
  
  // is this a required field?
  if(in_array($key, $requiredFields) && $value == '') 
  {
   $errors[] = "The field $key is required.";
  }
 } 
}

// were there any errors?
if(count($errors) > 0)
{
 $errorString = '<p>There was an error processing the form.</p>';
 $errorString .= '<ul>';
 foreach($errors as $error)
 {
  $errorString .= "<li>$error</li>";
 }
 $errorString .= '</ul>';

 echo  $errorString; 
  }
  else {
  $sql = "INSERT INTO info ";
  $sql .= " (name,course,subject,department,gender,contact,prelim";
  $sql .= "  ,midterm,final,endterm,remarks)";
  $sql .= "VALUES";
  $sql .= "('$name', '$course', '$subject', '$department', '$sex'";
  $sql .= " ,'$contact','$prelim','$midterm','$final','$endterm','$remarks')";
  
   if(!$b=mysql_query($sql)){
    echo mysql_error();
   }
   else {
        echo "<center>";
     echo "<h4> Record is Successfully added in the Database.</h4>";
     echo "</center>";
        }
    }
  }
?>
   
<html>
<head>
 <STYLE type="text/css">
     
      h2 { 
        text-align:center;
  color: white;                /* text color is white */ 
        background: green;            /* Content, padding will be blue */
        margin: 12px 12px 12px 30px;
        padding: 12px 0px 12px 12px; /* Note 0px padding right */
        list-style: none             /* no glyphs before a list item */
                                     /* No borders set */
      }
     
    </STYLE>
</head>
<body>
<h2> <marquee direction=left behavior=alternate>
 DK College Student Grading System </marquee> </h2>
<br>
<FORM NAME="form1" METHOD="POST" action="search.php">
<TABLE BORDER="0">
  <tr> </tr> <tr> </tr>
  <TR>
    <TD>Student Name</TD>
    <TD>
      <INPUT TYPE="TEXT" name="name" SIZE="30"MAXLENGTH=30
     value="<?php echo $name; ?>">
   
   
      <TD>  Course</TD>
    <TD>
      <INPUT TYPE="TEXT" NAME="course" SIZE="33" MAXLENGTH=35
   value="<?php echo $course; ?>">
   </TD>
    </TR>
    <tr> </tr> <tr> </tr>
 <tr> </tr> <tr> </tr>
  
  <TR>
    <TD>Prelim Grade</TD>
    <TD><INPUT TYPE="TEXT" NAME="prelim" SIZE="1"  MAXLENGTH=3
    value="<?php echo $prelim; ?>">
    
 </TD>
 <TD>Subject</TD>
    <TD>
      <INPUT TYPE="TEXT" NAME="subject" SIZE="35" MAXLENGTH=35
     value="<?php echo $subject; ?>">
   </TD>
      </TR> 
     <tr> </tr> <tr> </tr>
 <tr> </tr> <tr> </tr>
  <TR>
    <TD>Midterm Grade</TD>
    <TD><INPUT TYPE="TEXT" NAME="midterm" SIZE="1" MAXLENGTH=3
     value="<?php echo $midterm; ?>">
 </TD>
    <TD>Department</TD>
     <TD>
      <INPUT TYPE="TEXT" NAME="department" SIZE="40" MAXLENGTH=40
    value="<?php echo $department; ?>">
    </TD>
    </TR>
     <tr> </tr> <tr> </tr>
 <tr> </tr> <tr> </tr>
 <TR>
    <TD>Final Grade</TD>
    <TD><INPUT TYPE="TEXT" NAME="final" SIZE="1" MAXLENGTH=3
    value="<?php echo $final; ?>">
 </TD>
     <TD>Gender</TD>
  <td> <select name="sex"> 
  <option>Male</option>
  <option>Female</option>
  </select>
      </td>
   </tr>
 <tr> </tr> <tr> </tr>
 <tr> </tr> <tr> </tr>
 <tr>
   <TD>Endterm Grade</TD>
    <TD><INPUT TYPE="TEXT" NAME="endterm" SIZE="1" MAXLENGTH=3
     value="<?php echo $endterm; ?>" READONLY>
 </TD>
    <TD>Contact Number</TD>
    <TD>
      <INPUT TYPE="TEXT" NAME="contact" SIZE="15" MAXLENGTH=15
   value="<?php echo $contact; ?>">
   </TD>
 </tr>
    <tr> </tr> <tr> </tr>
 <tr> </tr> <tr> </tr>
  <tr>
  <TD>Remarks</TD>
    <TD>
      <INPUT TYPE="TEXT" NAME="remarks" SIZE="10" 
    value="<?php echo $remarks; ?>" READONLY>
   </TD>
     </TR>
    </TABLE>
  <!-- End of the Table -->
  
<P><input type="submit" name="solve" value="Compute"> 
<input type="submit" name="clear" value=" Clear ">
<input type="submit" name="save" value=" Save  ">
</P>
</FORM>
</body>
</html>