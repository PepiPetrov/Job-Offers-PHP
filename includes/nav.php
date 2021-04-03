<?php
require('./crud/checkInCur.php');
if(check()==1){
    echo '<a class="site-title" href="http://localhost/Jobs/add.php" style="font-size: 20px;">Add an announcment</a>&nbsp;&nbsp;&nbsp;&nbsp;';
    echo '<a class="site-title" href="http://localhost/Jobs/admin.php" style="font-size: 20px;">My announcments</a>&nbsp;&nbsp;&nbsp;&nbsp;';
    echo '<a class="site-title" href="http://localhost/Jobs/logout.php" style="font-size: 20px;">Logout</a>&nbsp;&nbsp&nbsp;&nbsp;';
    echo '<br><br><br>';
}else{
    echo '<a class="site-title" href="http://localhost/Jobs/login.php" style="font-size: 20px;">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;';
    echo '<a class="site-title" href="http://localhost/Jobs/register.php" style="font-size: 20px;">Register</a>&nbsp;&nbsp;&nbsp;&nbsp;';
    echo '<br><br><br>';
}
?>