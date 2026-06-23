<?php
    // String literals
    $name = "José Luis";
    $food = "tacos";
    $email = "cloudluis22@hotmail.com";

    // Integers
    $age = 22;
    $users = 2;
    $quantity = 3;
    
    // Floating point
    $gpa = 91.2;
    $price = 119.99;
    
    // Booleans
    // Boolean values can't be printed directly.
    $employed = True;
    $online = False;    

    $total = null;

    echo "Hello {$name}. <br/>";
    echo "You like {$food}. <br/>";
    echo "Your email is {$email}. <br/>";
    echo "You are {$age} old. <br/>";
    echo "Your GPA is {$gpa} <br/> <br/>";

    echo "There are {$users} users online. <br/>";
    echo "Your order of tacos is \${$price}. <br/> <br/>";

    echo "You have ordered {$quantity} x orders of {$food}. <br/>";
    $total = $quantity * $price;
    echo "Your total is \${$total}";


?>