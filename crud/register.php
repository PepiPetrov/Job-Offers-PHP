<?php
function register($username, $password)
{

    $dbc = new mysqli('localhost', 'Pepi', 'pepi', 'jobs');
    // Check connection
    if (!$dbc) {
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_query(
        $dbc,
        "INSERT INTO `users`(`Username`, `Pass`) VALUES ('$username','$password')"
    );
    mysqli_query(
        $dbc,
        "INSERT INTO `current`(`Username`,`Pass`) VALUES ('$username','$password')"
    );
    $_ENV['username'] = $username;
}
