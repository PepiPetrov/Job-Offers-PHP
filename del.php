<?php
include('./crud/delete.php');
$title=$_REQUEST['old'];
remove($title);
header('location: admin.php');
?>