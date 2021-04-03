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
include('./crud/getMy.php');
include('./crud/delete.php');
require('./includes/admin-paginator.php');
echo '<ul class="jobs-listing" style="padding-left:420px;">';
$dbc = new mysqli('localhost', 'Pepi', 'pepi', 'jobs');
$sql = "SELECT `Title`,`Description`,`Company`,`Salary`,`Date`,`Image`,`Location`,`Site`, `Creator` FROM jobs WHERE Creator LIKE '$user'";
$result = mysqli_query($dbc, $sql);
$res = array();
if (mysqli_num_rows($result) > 0) {
	// output data of each row
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($res, $row);
	}
}

echo '</ul>';
include('./includes/footer.php');

?>