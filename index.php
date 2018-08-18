<?php
    session_start();
    if (isset($_SESSION['id'])){
        header('Location: dashboard.php');
    }
    require_once './vendor/autoload.php';
    use App\classes\Authentication;

    $access =new Authentication();
    if (isset($_POST['login'])){
        $queryResult=$access->LoginByEmail();
    }
?>


<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>XYZTraders</title>
    <link rel="stylesheet" href="asset/css/bootstrap.css">
    <link rel="stylesheet" href="asset/css/fontawesome-all.css">
    <link rel="stylesheet" href="asset/css/style.php">
</head>

<body>
<div class="wrapper">
    <div class="container">
        <h1>Welcome To Admin Portal</h1>
        <form class="form" action="" method="post">
            <input type="text" placeholder="Username or Email" name="user">
            <input type="password" placeholder="Password" name="password">
            <input type="submit" name="login" value="Login" class="btn btn-light"/>
        </form>
    </div>
    <ul class="bg-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
<script src="asset/js/jquery-3.3.1.js"></script>
<script src="asset/js/bootstrap.js"></script>
<script src="asset/js/script.js"></script>
</body>
</html>
