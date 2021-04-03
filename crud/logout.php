<?php
function logout()
{
    $dbc = new mysqli('localhost', 'Pepi', 'pepi', 'jobs');
    // Check connection
    if (!$dbc) {
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_query(
        $dbc,
        "DELETE FROM `current` WHERE 1"
    );
    unset($_ENV['username']);
}


logout();