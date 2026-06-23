<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label> Radius: </label>
        <br/>
        <input type="number" step="any" name="r" />
        <br/>
        <br/>
        <input type="submit" value="Submit"/>
    </form>
    <br/>

</body>
</html>

<?php

    $r = $_POST["r"];
    
    $c = 2 * pi() * $r;
    $a = pi() * pow($r, 2);
    $v = (4/3) * pi() * pow($r,3);

    echo "Circumference: " . round($c, 2) . "u<br/>";
    echo "Area: " . round($a, 2) . "u²<br/>"; 
    echo "Volume: " . round($v, 2) . "u³<br/>"; 
?>