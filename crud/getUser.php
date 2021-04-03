<?php
function getUsername()
{
    $dbc = new mysqli('localhost', 'Pepi', 'pepi', 'jobs');
    // Check connection
    if (!$dbc) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $res=mysqli_query($dbc, "SELECT `Username`, `Pass` FROM `current`");
    return mysqli_fetch_array($res)['Username'];
}
?>
