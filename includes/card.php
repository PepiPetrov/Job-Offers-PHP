<?php
function card($job = array('', '', '', '', '', '', '', ''))
{
    $title = $job['Title'];
    $company = $job['Company'];
    $date = $job['Date'];
    $image = $job['Image'];
    $location = $job['Location'];
    echo "<li class=\"job-card\" style=\"width:750px\">";
    echo "<div class=\"job-primary\">";
    echo "<h2 class=\"job-title\"><a href=\"http://localhost/Jobs/details.php?title=${title}\">${title}</a></h2>";
    echo "<div class=\"job-meta\">";
    echo "<a class=\"meta-company\" href=\"http://localhost/Jobs/company.php?comp=$company\">${company}</a>";
    echo "<span class=\"meta-date\">Posted on $date</span>";
    echo "</div>";
    echo "<div class=\"job-details\">";
    echo "<span class=\"job-location\">${location}</span>";
    echo "<span class=\"job-type\">Contract staff</span>";
    echo "</div>";
    echo "</div>";
    echo "<div class=\"job-logo\">";
    echo "<div class=\"job-logo-box\">";
    echo "<img src=\"${image}\" alt=\"\">";
    echo "</div>";
    echo "</div>";
    echo "</li>";
}
