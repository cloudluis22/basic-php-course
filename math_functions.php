<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label> X: </label>
        <br/>
        <input type="number" step="any" name="x" />
        <br/>

        <label> Y: </label> <br/>
        <input type="number" name="y" />
        <br/>

        <label> Z: </label> <br/>
        <input type="number" name="z" />
        <br/>

        <input type="submit" value="Submit"/>
    </form>
</body>
</html>

<?php

    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];

    $total = null;

    // Returns absolute value of a number (removes sign if present).
    $total = abs($x);

    // Rounds value depending on decimal value.
    $total = round($x);

    // Rounds value always down.
    $total = floor($x);

    // Rounds value always up.
    $total = ceil($x);

    // Power function.
    $total = pow($x, $y);

    // Square root.
    $total = sqrt($x);

    // Gives the highest value number among all numbers passed.
    $total = max($x, $y, $z);

    // Gives the lowest value number among all numbers passed.
    $total = min($x, $y, $z);

    // Gets PI value.
    $total = pi();

    // Random number between minimum and a maximun (inclusive)
    $total = rand($x, $y);

    echo "Result: {$total}"

?>