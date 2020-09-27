<?php
    require "header.php";
?>
<!DOCTYPE HTML>
<html>
        <head lang=en>
            <title> Online Banking System </title>
            <link rel="stylesheet" type="text/css" href="css/Style.css">   
        </head>
            <body>
                
                <h2  id=top_text> WELCOME TO ONLINE BANKING</h2>
            <div class="login-box">
            <img src="images/avatar.png" class="avatar" alt="bank logo here">
                <h1>Login Here</h1>
                    <form>
                    <p>Username</p>
                    <input type="text" name="username" placeholder="Enter Username">
                    <p>Password</p>
                    <input type="password" name="password" placeholder="Enter Password">
                    <input type="submit" name="submit" value="Login">
                    <a href="forgotpwd.php">Forgot Password</a>    <br>
                        <a href="createaccount.php">Create Account</a>    
                    </form>
                
                
                </div>
            
            </body>
        </html>