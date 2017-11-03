<?php
	// 1. Create a database connection
	$dbhost = "localhost";
	$dbuser = "account";
	$dbpass = "daniella";
	$dbname = "account";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);










	// 2. Perform database query
	$query  = "SELECT * ";
	$query .= "FROM inclass ";
	$query .= "ORDER BY counter ASC";


	$result = mysqli_query($connection, $query);
	
?>

<!doctype html>
<html>
<head>
	<title>Database table</title>
</head>
<body>

	<h1>Database table</h1>

	<table border>

<?php
	// 3. Use returned data (if any)
	while($inclass = mysqli_fetch_assoc($result)) {
		// output data from each row
?>

		<tr>
			<td><?php echo $pages["counter"]; ?></td>
			<td><?php echo $pages["fname"]; ?></td>
			<td><?php echo $pages["lname"]; ?></td>
			<td><?php echo $pages["email"]; ?></td>

		</tr>

<?php } ?>

	</table>

	<br>
	<a href="contact.html">Back to HTML form</a>

</body>
</html>

<?php
	// 4. Release returned data
	mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>