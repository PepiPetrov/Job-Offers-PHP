<html>

<head>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    function cardAdmin($ad)
    {
        $title = $ad['Title'];
        $company = $ad['Company'];
        $date = $ad['Date'];
        $encoded=rawurlencode($title);
        echo '<li class="job-card">';
        echo '<div class="job-primary">';
        echo "<h2 class=\"job-title\"><a href=\"http://localhost/Jobs/details.php?title=$title\">$title</a></h2>";
        echo '<div class="job-meta">';
        echo "<a class=\"meta-company\" href=\"http://localhost/Jobs/company.php?comp=$company\">$company</a>";
        echo '<span class="meta-date">Posted on ' . $date . ' </span>';
        echo '</div>';
        echo '<div class="job-edit">';
        echo "<a href=\"http://localhost/Jobs/edit.php?old=$encoded\">Edit</a>";
        echo "<a href=\"http://localhost/Jobs/del.php?old=$title\">Delete</a>";
        echo '</div>';
        echo '</li>';
    }
    if (isset($_GET['pageno'])) {
        $pageno = $_GET['pageno'];
    } else {
        $pageno = 1;
    }
    $no_of_records_per_page = 3;
    $offset = ($pageno - 1) * $no_of_records_per_page;

    $conn = mysqli_connect("localhost", "Pepi", "pepi", "jobs");
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        die();
    }
    $res = mysqli_query($dbc, "SELECT `Username`, `Pass` FROM `current`");
    $user= mysqli_fetch_array($res)['Username'];

    $total_pages_sql = "SELECT COUNT(*) FROM jobs";
    $result = mysqli_query($conn, $total_pages_sql);
    $total_rows = mysqli_fetch_array($result)[0];
    $total_pages = ceil($total_rows / $no_of_records_per_page);

    $sql = "SELECT * FROM jobs WHERE Creator LIKE '$user' LIMIT $offset, $no_of_records_per_page";
    $res_data = mysqli_query($conn, $sql);
    echo "<ul class=\"jobs-listing\" style=\"padding-left:420px;padding-right:420px\">";
    while ($row = mysqli_fetch_array($res_data)) {
        cardAdmin($row);
    }
    echo "</ul>";
    mysqli_close($conn);
    ?>
    <ul class="pagination" style="padding-left:420px;padding-right:420px">
        <li><a href="?pageno=1">First</a></li>
        <li class="<?php if ($pageno <= 1) {
                        echo 'disabled';
                    } ?>">
            <a href="<?php if ($pageno <= 1) {
                            echo '#';
                        } else {
                            echo "?pageno=" . ($pageno - 1);
                        } ?>">Prev</a>
        </li>
        <li class="<?php if ($pageno >= $total_pages) {
                        echo 'disabled';
                    } ?>">
            <a href="<?php if ($pageno >= $total_pages) {
                            echo '#';
                        } else {
                            echo "?pageno=" . ($pageno + 1);
                        } ?>">Next</a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul>
</body>

</html>