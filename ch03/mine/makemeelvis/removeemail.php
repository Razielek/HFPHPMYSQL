<?php
	$dbc = mysqli_connect('localhost', 'razielek', '10masamune01', 'elvis_store')
		or die('Error connecting to database');

	$email = $_POST['email'];
	echo $email;
	$query = "DELETE FROM email_list WHERE email = '$email'";

	$result = mysqli_query($dbc, $query) or die('Error querying the database');

	echo 'Customer removed: ' . $email;

	mysqli_close($dbc);

?>
