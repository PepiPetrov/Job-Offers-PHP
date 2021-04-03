<?php
function check()
{
    $dbc = new mysqli('localhost', 'Pepi', 'pepi', 'jobs');
    // Check connection
    if (!$dbc) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $res=mysqli_query($dbc, "SELECT `Username`, `Pass` FROM `current`");
    if(empty(mysqli_fetch_array($res))){
        return 0;
        exit;
    }
    return 1;
    exit;
}
