<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="checkbox" name="foods[]" value="tacos" />
        Tacos <br/>
        <input type="checkbox" name="foods[]" value="enchildas" />
        Enchildas <br/>
        <input type="checkbox" name="foods[]" value="sopes" />
        Sopes <br/>
        <input type="checkbox" name="foods[]" value="chilaquiles" />
        Chilaquiles <br/>
        <input type="submit" name="enter" value="Enter"/>
    </form>
    <br/>
</body>
</html>

<?php

    if(isset($_POST["enter"])) {
        foreach ($_POST["foods"] as $key => $value) {
            echo "You chose {$value}. <br />";
        }
    }

?>