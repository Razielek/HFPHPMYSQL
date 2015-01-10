<?php
    $from = 'elmer@makeelvis.com';
    $subject = $_POST['subject'];
    $text = $_POST['elvismail'];


    $dbc = mysqli_connect('localhost', 'razielek', '10masamune01', 'elvis_store')
        or die('Error connecting the database');

    $query = "SELECT * FROM email_list";
    $result = mysqli_query($dbc, $query) or die('Error querying the database');

    while($row = mysqli_fetch_array($result))
    {
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $email = $row['email'];

        echo 'Email sent to ' . $first_name . ' ' . $last_name . ' ' . $email . '</br>';
    }
    mysqli_close($dbc);
?>
