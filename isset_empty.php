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
        <input type="text" name="username" /> <br/> <br/>

        <label> Password </label> <br/>
        <input type="password" name="password" /> <br/> <br/>

        <input type="submit" value="Log In" name="login" />
    </form>
    <br/>    
</body>
</html>

<?php

    //  isset() return TRUE if variable is declared and contains a value different than null.
    /*
        empty returns true if a variable does not exit, is null or contains a "falsy" value
        such as:
            - Empty strings
            - 0 integers or floats (0.0)
            - string containing ("0")
            - boolean value of false
            - an empty array 
    */

    if(isset($_POST["login"])) { // Check if "login" button has been pressed.

        if(empty($_POST["username"])) {
            echo "Username is missing.";

        }
        elseif (empty($_POST["password"])) {
            echo "Password is missing.";
        }
        else{
            echo "Welcome {$_POST["username"]}";
        }
    }

?>