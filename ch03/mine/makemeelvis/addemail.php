<?php
    $dbc = mysqli_connect('localhost', 'razielek', '10masamune01', 'elvis_store')
        or die('Error connecting the database');

    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];

    $query = "INSERT INTO email_list (first_name, last_name, email)" .
        "VALUES ('$first_name', '$last_name', '$email')";

    mysqli_query($dbc, $query) or die ('Error querying the database');

    echo 'Customer added';

    mysqli_close($dbc);
?>
