<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/master.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        .error {
            color: red;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <?php
    require('./includes/header.php');
    ?>
    <form style="padding-left: 670px;">
        <h1 class="site-title">Register: </h1>
        <input type="text" name="username" placeholder="Enter username">
        <br>
        <br>
        <input type="password" name="password" placeholder="Enter password">
        <br>
        <br>
        <input type="password" name="rePass" placeholder="Repeat password">
        <br>
        <br>
        <input type="submit" value="Register">
        <p>Already have an account? Then just <a href="login.php">sign in</a> here.</p>
    </form>
    <?php
    require('./crud/register.php');
    if (!empty($_REQUEST)) {
        $username = trim($_REQUEST['username']);
        $pass = trim($_REQUEST['password']);
        $rePass = trim($_REQUEST['rePass']);

        if ($username == '' || $pass == '' || $rePass == '') {
            echo '<p class="error">All fields are required!</p>';
            exit();
        }
        if ($pass !== $rePass) {
            echo '<p class="error">Passwords don\'t match!</p>';
            exit();
        }
        register($username, $pass);
        header("location: index.php");
    }
    ?>
    <?php
    require('./includes/footer.php');
    ?>
</body>

</html>