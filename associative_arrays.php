<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label> Enter a Capital </label>
        <input type="text" name="capital"/>
        <input type="submit" />
    </form>
</body>
</html>

<?php
    $capitals = array(
                    "Mérida" => "Yucatan",
                    "Jalisco" => "Guadalajara",
                    "Veracruz" => "Xalapa",
                    "Baja California" => "Mexicali",
                    "Tamaulipas" => "Ciudad Victoria",
                    );
    
    $capital = $_POST["capital"];

    echo $capitals[$capital]
?>