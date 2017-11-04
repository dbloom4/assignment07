<?php
	// 1. Create a database connection
	$dbhost = "localhost";
	$dbuser = "account";
	$dbpass = "daniella";
	$dbname = "account";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	
	

	// Often these are form values in $_POST
	$fname = Trim(stripslashes($_POST['first']));
	$lname = Trim(stripslashes($_POST['last']));
	$email = Trim(stripslashes($_POST['email']));
	
	// Escape all strings
	$fname = mysqli_real_escape_string($connection, $fname);
	$lname = mysqli_real_escape_string($connection, $lname);
	$email = mysqli_real_escape_string($connection, $email);
	

	// 2. Perform database query
	$query  = "INSERT INTO inclass (";
	$query .= "  fname, lname, email";
	$query .= ") VALUES (";
	$query .= "  '{$fname}', '{$lname}', '{$email}' ";
	$query .= ")";

	$result = mysqli_query($connection, $query);

?>


<!doctype html>
<html>
<head>
	<title>In class table</title>
</head>
<body>
<?php
	
	if ($result) {
		echo "Success! - the query didn't error-out";

?>
	<h1>Contact List</h1>


<?php

	} else {
		die("Database query failed.");
	}
?>

	<a href="contacts-list.php">Content</a>

</body>
</html>





<?php
	// 5. Close database connection
	mysqli_close($connection);
?>