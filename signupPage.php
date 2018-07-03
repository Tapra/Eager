<?php
/**
 * Created by PhpStorm.
 * User: Tapra
 * Date: 27/6/18
 * Time: 13:00
 */

$email = $con_email= "";
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
<div class="col-lg-*" style="align-items: center">
    <div class="col-md-3 form-group" id="container">
        <h3 style="text-align: center; text-decoration: underline">Sign Up</h3>
        <form method="post">
            <table class="table-borderless" style="alignment: center">
                <tr>
                    <td>
                        <p><label for="usr">Enter your First name : </label>
                            <input type="text"></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><label for="">Enter you Last name : </label>
                            <input type="text"></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><label for="eml">Enter Email Address : </label>
                            <input type="email" name="<?php $email ?>" value=""></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><label for="eml">Confirm Email Address : </label>
                            <input type="email" name="<?php con_email ?>"></p>
                        <?php
                        if($email<>$con_email){
                            $error = 'Email does not match';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><label for="pwd">Enter password : </label>
                            <input type="text"></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><label for="pwd">Confirm password : </label>
                            <input type="text"></p>
                    </td>
                </tr>
            </table>
            <span><?php $error?></span><tr>
                <td>
                    <div class="btn-group btn-group-md" style="align-items: center">
                        <p style="align: center">
                            <button type="submit" class="btn btn-primary" value="click" name="submit">Submit</button>
                            <button type="reset" class="btn btn-primary">reset</button>
                        </p>
                    </div>
                </td>
            </tr>
        </form>
    </div>
</div>
</body>
