<?php
/**
 * Created by PhpStorm.
 * User: Tapra
 * Date: 26/6/18
 * Time: 12:20
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
    <div class="jumbotron text-center" style="margin-bottom: 0;background-color: #cccccc">
        <a class="container">
            <a href="index.php"><img src="logo1.png" class="float-left"  height="175px"></a>
            <p style="color: #fff"><strong>Login Below</strong></p>
        </div>
    </div>
    <div id="container" class="row-md-2 form-group">
        <form method="post" action="login.php">
            <div class="form-group">
            <fieldset name ="LOGIN">
                <table class="table-borderless" align="center">
                    <tr>
                        <td>
                            <div class="col-*-*">
                                <label for="name">Username : </label>
                                <input class="form-control" id="name" name="username" placeholder="username" type="email" required>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-*-*">
                                <label for="password">Password : </label>
                                <input class="form-control" id="password" name="password" placeholder="********" type="password" required>
                                <p style="text-align: right"><a href="resetPasswordPage.php" style="font-size: 12px; text-align: right">forgot password</a></p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-*-*">
                                <p>Don't have an account? Sign up <a href="signupPage.php">here</a></p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="btn-group btn-group-md" style="align-items: center">
                                <p style="align: center">
                                <button type="submit" class="btn btn-primary" value="click" name="submit">login</button>
                                <button type="reset" class="btn btn-primary">reset</button>
                                </p>
                            </div>
                        </td>
                    </tr>
                </table>
            </fieldset>
            </div>
        </form>
        <span><?php $error ?></span>
    </div>
    <div>

    </div>
</body>