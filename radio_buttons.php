<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label> Select your credit card </label> <br/>
        <input type="radio" name="credit-card" value="Visa" />
        Visa <br/>
        <input type="radio" name="credit-card" value="Mastercard" />
        Mastercard <br/>
        <input type="radio" name="credit-card" value="American Express" />
        American Express <br/>
        <input type="submit" value="Confirm" name="confirm"/>
    </form>
    <br/>    
</body>
</html>

<?php

    if(isset($_POST["confirm"])) {

        if(empty($_POST["credit-card"])) {
            echo "Please select a card";
            return;    
        }

        $credit_card = $_POST["credit-card"];
        echo "You selected {$credit_card}.";
    }

?>