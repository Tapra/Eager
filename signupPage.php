<?php
/**
 * Created by PhpStorm.
 * User: Tapra
 * Date: 27/6/18
 * Time: 13:00
 */

$error = '';
?>
<!--start of HTML Document-->
<!DOCTYPE html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plan !t</title>

    <!--link to bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="default.css">
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php"><img src="logo1.png" height="25" alt="Plan !T"></a>
        </div>
        <ul class="nav navbar-nav">
            <li><a class="nav-link" href="signupPage.php">signup</a></li>
            <li><a class="nav-link" href="loginPage.php">login</a></li>
        </ul>
    </div>
</nav>
<div class="col-lg-2" id="container">
    <form>
        <p>
            Choose your Screen name
            <input type="text" placeholder="Username">
            Enter Email Address
            <input type="text">
            Confirm Email Address
            <input type="text">
            Enter password
            <input type="text">
            confirm password
            <input type="text">

        </p>
        <span><?php $error?></span>
    </form>
</div>
</body>
