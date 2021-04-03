<?php
function get($prof,)
{
    $dbc = new mysqli('localhost', 'Pepi', 'pepi', 'jobs');

    // Check connection
    if (!$dbc) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT `Title`,`Description`,`Company`,`Salary`,`Date`,`Image`,`Location`,`Prof`,`Creator` FROM jobs WHERE `Prof` LIKE '$prof'";
    $result = mysqli_query($dbc, $sql);
    $res = array();
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($res, $row);
        }
    }else{
        return 'No announcments';
    }
    return $res;
}

?>
