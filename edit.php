<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Job</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/master.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
</body>

</html>


<?php
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
require('./crud/getOne.php');
require('./includes/header.php');
if (!empty($_REQUEST)) {
    $old = @rawurldecode($_REQUEST['old']);
    $ad = @get($old);
    $title = @urldecode($ad['Title']);
    $desc = @urldecode($ad['Description']);
    $comp = @urldecode($ad['Company']);
    $sal = @urldecode($ad['Salary']);
    $img = @urldecode($ad['Image']);
    $loc = @urldecode($ad['Location']);
    $prof = @urldecode($ad['Prof']);
    $site = @urldecode($ad['Site']);
    $creator = @$ad['Creator'];
    echo '<form style="padding-left:670px">';
    echo "<input type=\"hidden\" value=\"$old\" name=\"old\">";
    echo "<input type=\"hidden\" value=$creator name=\"creator\">";
    echo "<label for=\"newTitle\">New Title: </label><br>";
    echo "<input type=\"text\" name=\"newTitle\" value=\"$old\">";
    echo '<br>';
    echo "<label for=\"newDesc\">New Description: <br><textarea name=\"newDesc\">$desc</textarea></label>";
    echo '<br>';
    echo "<label for=\"newCompany\">New Company: </label><br>";
    echo "<input type=\"text\" name=\"newCompany\" value=\"$comp\">";
    echo '<br>';
    echo "<label for=\"newSal\">New Salary: </label><br>";
    echo "<input type=\"text\" name=\"newSal\" value=\"$sal\">";
    echo '<br>';
    echo "<label for=\"newImg\">New Image: </label><br>";
    echo "<input type=\"text\" name=\"newImg\" value=\"$img\">";
    echo '<br>';
    echo "<label for=\"newLoc\">New Location: </label><br>";
    echo "<input type=\"text\" name=\"newLoc\" value=\"$loc\">";
    echo '<br>';
    echo "<label for=\"newProf\">New Profession: </label><br>";
    echo "<input type=\"text\" name=\"newProf\" value=\"$prof\">";
    echo '<br>';
    echo "<label for=\"newSite\">New Site: </label><br>";
    echo "<input type=\"text\" name=\"newSite\" value=\"$site\"><br>";
    echo '<br>';
    echo "<input type=\"submit\" value=\"Edit announcment\">";
    echo '</form>';
    echo '<br><br>';
    if (count($_REQUEST) > 1) {
        $creator = @trim(urldecode($_REQUEST['creator']));
        $oldTitle = @trim(urldecode($_REQUEST['old']));
        $newTitle = @trim(urldecode($_REQUEST['newTitle']));
        $newDescription = @trim(urldecode($_REQUEST['newDesc']));
        $newCompany = @trim(urldecode($_REQUEST['newCompany']));
        $newSalary = @trim(urldecode($_REQUEST['newSal']));
        $newImg = @trim(urldecode($_REQUEST['newImg']));
        $newLoc = @trim(urldecode($_REQUEST['newLoc']));
        $newProf = @trim(urldecode($_REQUEST['newProf']));
        $newSite = @trim(urldecode($_REQUEST['newSite']));
        // if(empty($newTitle)||empty($newDescription)||empty($newCompany)||empty($newSalary=='')||empty($newImg=='')||empty($newLoc=='')||empty($prof=='')||empty($site=='')){
        //     echo '<p style="color: red;font-size:18px;padding-left:670px">All fields are required!</p>';
        //     exit;
        // }
        edit($oldTitle, $newTitle, $newDescription, $newCompany, $newSalary, $newImg, $newLoc, $newProf, $newSite, $creator);
        header("location: details.php?title=$newTitle");
    }
}

require('./includes/footer.php');
?>