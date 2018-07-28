<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'todolist';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
   echo 'Connected successfully</br>';
  // $sql = 'SELECT a.id, a.name,b.id FROM tutorials_inf a,tutorials_bks b WHERE a.id = b.id';
   $sql = 'SELECT a.id, a.name,b.id FROM tutorials_inf a LEFT JOIN tutorials_bks b ON a.id = b.id';
   
   if($result = mysqli_query($conn, $sql)) {
      if(mysqli_num_rows($result) > 0) {
         echo "<table>";
         echo "<tr>";
         echo "<th>id</th>";
         echo "<th>name</th>";
         echo "<th>id</th>";
         echo "</tr>";
         
         while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
				echo "<td>" . $row['id'] . "</td>";
            echo "</tr>";
         }
         echo "</table>";
         mysqli_free_result($result);
      } else {
         echo "No records matching your query were found.";
      }
   } else {
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
   }
   mysqli_close($conn);
?>