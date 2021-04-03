<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'Pepi');
define('DB_PASSWORD', 'pepi');
define('DB_NAME', 'jobs');
function edit($title, $newTitle, $newDesc, $newComp, $newSal, $newImg, $newLoc, $newProf, $newSite)
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



    $dbc = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    // Check connection
    if (!$dbc) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT `Title`, `Description`, `Company`, `Salary`, `Date`, `Image`, `Location`, `Prof`, `Site`,`Creator` FROM `jobs` WHERE Title LIKE '$title'";
    $result = mysqli_query($dbc, $sql);
    $data = mysqli_fetch_array($result);
    if ($data !== null && $data['Date'] && $data['Creator']) {
        $date = $data['Date'];
        $username = $data['Creator'];


        mysqli_query(
            $dbc,
            "UPDATE `jobs` SET `Title`='$newTitle',`Description`='$newDesc',`Company`='$newComp',`Salary`='$newSal',
            `Date`='$date',`Image`='$newImg',`Location`='$newLoc',`Prof`='$newProf',`Site`='$newSite',
            `Creator`= '$username'
            WHERE `Title` LIKE '$title' AND `Creator` LIKE '$username'"
        );
    }
}
