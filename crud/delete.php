<?php
define('DB_USER', 'Pepi');
define('DB_PASSWORD', 'pepi');
define('DB_HOST', 'localhost');
define('DB_NAME', 'jobs');
function remove($title)
{
    function getUsername()
    {
        $dbc = new mysqli('localhost', 'Pepi', 'pepi', 'jobs');
        // Check connection
        if (!$dbc) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $res = mysqli_query($dbc, "SELECT `Username`, `Pass` FROM `current`");
        return mysqli_fetch_array($res)['Username'];
    }
    
    $username = getUsername();

    $dbc = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    // Check connection
    if (!$dbc) {
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_query(
        $dbc,
        "DELETE FROM `jobs` WHERE Title LIKE '$title' AND Creator LIKE '$username'"
    );
}
