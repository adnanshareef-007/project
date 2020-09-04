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
                    <p>First Name</p>
                    <input type="text" name="name" placeholder="Enter your First Name">

                    <p>Last Name</p>
                    <input type="text" name="lname" placeholder="Enter your Last Name">

                    <p>E-mail</p>
                    <input type="text" name="email" placeholder="Enter your Email">

                    <p>Username</p>
                    <input type="text" name="username" placeholder="Enter Username">

                    <p>Password</p>
                    <input type="password" name="password" placeholder="Enter Password">

                    <p>Repeat Your Password</p>
                    <input type="password" name="pwd" placeholder="Repeat your Password">

                    <button type="submit" name="pwd-repeat"> Signup</button>  
                    </form>
                
                
                </div>
            
            </body>
        </html>