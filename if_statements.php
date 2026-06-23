<?php
    $age = 22;

    if ($age >= 99) { 
        echo "You are too old to enter this site.";
    }
    elseif ($age >= 18) {
        echo "You may enter this site.";
    }
    elseif ($age <= 0) {
        echo "That was an invalid age.";
    }
    else {
        echo "You can't enter this site.";
    }

?>