

<?php include "connection.php";?>




<html>
<body>
<form action="search.php" method="post">
 
   <table style="color:purple;border-style:groove; height:150px;width:350px" background="backimage.jpg">
            <tr>
                <td style=" height:25px; font-family:'Copperplate Gothic Bold'">&nbsp;</td>
            </tr>
            <tr>
                <td style="color:red;background-color:aqua;height:25px">Enter name&nbsp;&nbsp;&nbsp;&nbsp;
                    <input name="name" id="name" type="text"/></td>
            </tr>
            <tr>
                <td style="height:25px"> 
                           <input type="submit" name="submit" value="Submit" style="color:white;background-color:brown; height:30px" /></td>
           
        </table>
</form>
</body>
</html>




<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>

			<script type="text/javascript">

			function ConfirmDelete() {
 		 		return confirm("Are you sure you want to delete?");
			}



		</script>
</head>
<body>



	<table class="data-table">
		
		<thead>
			<tr>
				<th>NAME</th>
				<th>COURSE</th>
				<th>SUBJECT</th>
				
				<th><font color='Red'>DEPARTMENT</font></th>
				<th><font color='Red'>GENDER</font></th>
				<th><font color='Red'>CONTACT</font></th>
				<th>PRELIM</th>
				<th>MIDTERM</th>
				<th>FINAL</th>
				<th>ENDTERM</th>
				<th>REMARKS</th>
				
			</tr>
		</thead>
		<tbody>
		<?php

		$sql = 'SELECT * FROM info';
		
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        echo "<tr><td>".$row['name']."</td> 
		        	<td>".$row['course']."</td>
		        	<td>".$row['subject']."</td>
		        	<td>".$row['department']."</td>
					<td>".$row['gender']."</td>
					<td>".$row['contact']."</td> 
					<td>".$row['prelim']."</td> 
					<td>".$row['midterm']."</td> 
					<td>".$row['final']."</td> 
					<td>".$row['endterm']."</td> 
					<td>".$row['remarks']."</td> 

					</tr>";



		    }
		} else {
		    echo "0 results";
		}

//,Description = ".$row["Description"]."  Title = ".$row["Title"].",
		
		?>






		</tbody>

		

		

</body>
</html>


