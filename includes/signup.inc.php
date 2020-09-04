<?php
    if (isset($_POST["signup-submit"])){
        require 'dbh.inc.php';

        $name= $_POST['name'];
        $lastname= $_POST['lName'];
        $email= $_POST['Email'];
        $username= $_POST['username'];
        $password= $_POST['pwd'];
        $passwordrepeat= $_POST['pwd-repeat'];

        if (empty($name)||empty($lastname) ||empty($email)||empty($username)||empty($password)|| empty($passwordrepeat)){
           header("location: ../signup.php?error=emptyfields&uid=" .$username. "&mmail=" .$email);
            
        }

    }