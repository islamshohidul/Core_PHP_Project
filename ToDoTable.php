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
<?php include 'connection.php';?>


	<table class="data-table">
		
		<thead>
			<tr>
				<th>NO</th>
				<th>TITLE</th>
				<th>COMMENT</th>
				
				<th><font color='Red'>Delete</font></th>
				<th><font color='Red'>Edit</font></th>
				
			</tr>
		</thead>
		<tbody>
		<?php

		$sql = 'SELECT * FROM ToDoList';
		
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        echo "<tr><td>".$row['ID']."</td> 
					<td>".$row['Title']."</td>
					<td>".$row['Description']."</td> 
					<td > <a href='delete.php?ID=".$row["ID"]."' onclick='return ConfirmDelete();'>Delete</a> </td>
					<td > <a href='edit.php?Title = ".$row["Title"]." &Description = ".$row["Description"]."&ID=".$row["ID"]."'>Edit</a> </td></tr>";



		    }
		} else {
		    echo "0 results";
		}

//,Description = ".$row["Description"]."  Title = ".$row["Title"].",
		
		?>






		</tbody>

		

		

</body>
</html>