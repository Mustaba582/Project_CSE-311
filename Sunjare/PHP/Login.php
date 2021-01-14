<?php
include "connection.php";

?>


<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Online Library</title>
    <link rel="stylesheet" type="text/css" href="Login_Style.css">
</head>

<body>
    <div class="center">
        <h1>Login</h1>
        <form method="post">
            <div class="txt_field">
                <input type="text" name = 'user_id' required = ''>
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" name = 'password' required = ''>
                <span></span>
                <label>Password</label>
            </div>

            <button type="submit">Login</button>


            <div class="signup_link">
                Not a member? <a href="create_new_account.php">Signup</a>
            </div>
        </form>
    </div>




    <?php

        $user_id = $_POST['user_id'];

    ?>



</body>

</html>