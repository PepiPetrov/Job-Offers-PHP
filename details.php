<!DOCTYPE html>
<html lang="en">

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

<body>
</body>

</html>

<?php
include('./crud/getOne.php');
include('./includes/header.php');
$tit=urldecode($_REQUEST['title']);
$res = get($tit);
if(empty($res)){
  echo '<br><br><p style=\'text-align:center;font-size:20px\'>No such announcement</p>';
  exit;
}
$title = $res['Title'];
$desc = $res['Description'];
$comp = $res['Company'];
$salary = $res['Salary'];
$date = $res['Date'];
$image = $res['Image'];
$location = $res['Location'];
$prof = $res['Prof'];
$site = $res['Site'];
$creator=$res['Creator'];
echo '<div class="job-single" style="padding-left:200px">';
echo '<main class="job-main">';
echo '<div class="job-card">';
echo '<div class="job-primary">';
headerTemplate($title, $location, $date, $comp, $salary, $prof,$creator);
jobBody($desc,$image);
echo '</div></div></main>';
aside($image, $site);
echo '</div>';
include('./includes/footer.php');

function headerTemplate($title, $location, $date, $comp, $sal, $prof,$creator)
{
	echo '<header class="job-header">';
	echo "<h2 class=\"job-title\"><a href=\"\">$title</a></h2>";
	echo  '<div class="job-meta">';
	echo "<a class=\"meta-company\" href=\"http://localhost/Jobs/company.php?comp=$comp\">$comp</a>";
	echo "<span class=\"meta-date\">Posted on $date</span>";
	echo '</div>';
	echo '<div class="job-details">';
	echo "<span class=\"job-location\">$location</span>";
	echo '<span class=\'job-type\'>Salary: ' . $sal.'</span>';
	echo '<span class="job-type">Contract staff</span>';
	echo '<p class="job-type">Profession: ' . $prof . '</p>';
	echo '<p class="job-type">Creator: ' . $creator . '</p>';
	echo '</div>';
	echo '</header>';
}

function jobBody($description,$img)
{
	echo '<div class="job-body">';
	echo '<p>';
    echo '<img src="'.$img.'"><br>';
	echo $description;
	echo '</p>';
	echo '</div>';
}
function aside($img, $site)
{
	echo '<aside class="job-secondary">';
	echo '<div class="job-logo">';
	echo '<div class="job-logo-box">';
	echo "<img src=\"$img\" alt=\"\">";
	echo '</div>';
	echo '</div>';
	echo "<a href=\"$site\" class=\"button button-wide\">Apply now</a>";
	echo '</aside>';
}

?>