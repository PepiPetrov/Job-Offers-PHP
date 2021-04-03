<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/master.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<?php

include('./includes/header.php');
include('./includes/card.php');
include('./crud/search.php');
echo '<form style="text-align: center">';
echo '<input style="color: blue" type="text" name="prof" placeholder="Search by profession">';
echo '<input style="color: blue" type="submit" value="Search">';
echo '</form>';
echo "<ul class=\"jobs-listing\" style=\"padding-left:420px;\">";
echo '<br>';
echo '<br>';
echo '<br>';
if (!empty($_REQUEST)) {
    $prof = $_REQUEST['prof'];
    $res = get($prof);
    if (is_array($res)) {
        for ($i = 0; $i < count($res); $i++) {
            card($res[$i]);
        }
    } else {
        echo $res;
    }
}
echo "</ul>";


include('./includes/footer.php');
?>