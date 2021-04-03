<?php
include('./delete.php');
$title=$_REQUEST['old'];
remove($title);
header('location: index.php');
?>