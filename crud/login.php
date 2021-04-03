<?php
function login($username, $password)
{
    $dbc = new mysqli('localhost', 'Pepi', 'pepi', 'jobs');
    // Check connection
    if (!$dbc) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if (mysqli_query($dbc, "SELECT `Username`, `Pass` FROM `users` WHERE Username LIKE '$username' AND Pass LIKE '$password'")) {
        mysqli_query(
            $dbc,
            "INSERT INTO `current`(`Username`,`Pass`) VALUES ('$username','$password')"
        );
        $_ENV['username'] = $username;
    }
}
