<?php
// require('getUser.php');
// define('DB_USER', 'Pepi');
// define('DB_PASSWORD', 'pepi');
// define('DB_HOST', 'localhost');
// define('DB_NAME', 'jobs');
function add($title, $desc, $comp, $sal, $img, $loc, $prof, $site)
{

    $dbc = new mysqli('localhost', 'Pepi', 'pepi', 'jobs');
    // Check connection
    if (!$dbc) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $res=mysqli_query($dbc, "SELECT `Username`, `Pass` FROM `current`");
    $user=mysqli_fetch_array($res)['Username'];
    if(
    mysqli_query(
        $dbc,
        "INSERT INTO `jobs`(`Title`, `Description`, `Company`, `Salary`, `Date`, `Image`, `Location`, `Prof`, `Site`, `Creator`) VALUES ('$title','$desc','$comp','$sal',NOW(),'$img','$loc','$prof','$site','$user')"
    )){
        echo 'Success';
    }
}
