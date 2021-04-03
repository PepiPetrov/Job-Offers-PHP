<?php
function get($title)
{
    define('DB_USER', 'Pepi');
    define('DB_PASSWORD', 'pepi');
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'jobs');

    $dbc = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    // Check connection
    if (!$dbc) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT `Title`, `Description`, `Company`, `Salary`, `Date`, `Image`, `Location`, `Prof`, `Site`, `Creator` FROM `jobs` WHERE Title LIKE '$title'";
    $result = mysqli_query($dbc, $sql);
    $data=mysqli_fetch_array($result);
    return $data;
}

?>