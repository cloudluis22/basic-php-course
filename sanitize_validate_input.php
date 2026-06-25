<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label> Username </label> <br/>
        <input type="text" name="username" /> <br/>

        <label> E-mail </label> <br/>
        <input type="text" name="email" /> <br/>

        <label> Age </label> <br/>
        <input type="text" name="age" /> <br/>

        <input type="submit" value="Log In" name="login"/>
    </form>
    <br/>
</body>
</html>

<?php

    if(isset($_POST["login"])) {
        
        /* 
            filter_input function either filters or sanitizes your input so malicious or
            unexpected characters can't be introduced by the user.
        */

        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

        if(isset($_POST["login"])) {

            echo "Welcome {$username} <br/>";

            if(empty($email)) {
                echo "Your e-mail is not valid. <br/>";
            }
            else {
                echo "Your e-mail is: {$email} <br/>";
            }
    
            if(empty($age)) {
                echo "Your age is not valid. <br/>";
            }
            else {
                echo "Your age is {$age} years old. <br/>";
            }
        }
    
    }

?>