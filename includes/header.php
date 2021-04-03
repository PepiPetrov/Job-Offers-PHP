<div class="site-wrapper">
    <header class="site-header">
        <site style="text-align: center;">
            <h1 class="site-title"><a href="http://localhost/Jobs/index.php" class="site-title" style="text-align: center !important">JOB OFFERS</a></h1>
        </site>
        <site style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="http://localhost/Jobs/search.php" class="site-title" style="font-size: 20px;">Search</a>&nbsp;&nbsp;&nbsp;&nbsp;

            <?php
            require('./crud/checkInCur.php');
            if (check() == 1) {
                echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="site-title" href="http://localhost/Jobs/add.php" style="font-size: 20px;">Add an announcment</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                echo '&nbsp;&nbsp;&nbsp;&nbsp;<a class="site-title" href="http://localhost/Jobs/admin.php" style="font-size: 20px;">My announcments</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                echo '&nbsp;&nbsp;&nbsp;&nbsp;<a class="site-title" href="http://localhost/Jobs/logout.php" style="font-size: 20px;">Logout</a>&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
            } else {
                echo '&nbsp;&nbsp;&nbsp;&nbsp;<a class="site-title" href="http://localhost/Jobs/login.php" style="font-size: 20px;">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                echo '&nbsp;&nbsp;&nbsp;&nbsp;<a class="site-title" href="http://localhost/Jobs/register.php" style="font-size: 20px;">Register</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
            }
            ?>
        </site>
        <br><br><br>


    </header>
</div>