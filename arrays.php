<?php

    $foods = array("tacos", "enchiladas", "chilaquiles", "sopes");

    // Push elements to existing array.
    array_push($foods, "mole", "carnitas");

    // Remove last element
    array_pop($foods);

    // Remove first element
    array_shift($foods);

    // Reverse array (must create a new array).
    $reversed_foods = array_reverse($foods);

    foreach($reversed_foods as $food) {
        echo "{$food} <br/>";
    }

?>