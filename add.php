<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Job</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/master.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
</body>

</html>


<?php
require('./crud/add.php');
require('./includes/header.php');
if (isset($_REQUEST)) {
    echo "<form style=\"padding-left:690px;font-size:18px\">";
    echo '<label for="newTitle">Title: </label><br>';
    echo '<input type="text" name="newTitle">';
    echo '<br>';
    echo '<label for="newDesc">Description: <br><textarea name="newDesc"></textarea></label>';
    echo '<br><label for="newCompany">Company: </label><br>';
    echo '<input type="text" name="newCompany">';
    echo '<br>';
    echo '<label for="newSal">Salary: <br></label><br>';
    echo '<input type="text" name="newSal">';
    echo '<br>';
    echo '<label for="newImg">Image: <br></label><br>';
    echo '<input type="text" name="newImg">';
    echo '<br>';
    echo '<label for="newLoc">Location: <br></label><br>';
    echo '<input type="text" name="newLoc">';
    echo '<br>';
    echo '<label for="prof">Profession: <br></label><br>';
    echo '<input type="text" name="prof">';
    echo '<br>';
    echo '<label for="site">Site: </label><br>';
    echo '<input type="text" name="site"><br><br><br>';
    echo '<input type="submit" value="Add announcment">';
    echo '</form>';
    if (count($_REQUEST) > 1) {
        $newTitle = trim(rawurldecode($_REQUEST['newTitle']));
        $newDescription = trim(rawurldecode($_REQUEST['newDesc']));
        $newCompany = trim($_REQUEST['newCompany']);
        $newSalary = trim($_REQUEST['newSal']);
        $newImg = trim($_REQUEST['newImg']);
        $newLoc = trim($_REQUEST['newLoc']);
        $prof = trim($_REQUEST['prof']);
        $site = trim($_REQUEST['site']);
        // if(empty($newTitle)||empty($newDescription)||empty($newCompany)||empty($newSalary=='')||empty($newImg=='')||empty($newLoc=='')||empty($prof=='')||empty($site=='')){
        //     echo '<p style="color: red;font-size:18px;padding-left:690px">All fields are required!</p>';
        //     exit;
        // }
        add($newTitle, $newDescription, $newCompany, $newSalary, $newImg, $newLoc, $prof, $site);
        header("location: details.php?title=$newTitle");
    }
}

require('./includes/footer.php');
?>