<?php

    $hours = 50;
    $rate = 15;
    $hours_limit = 40;
    $overtime = null;
    $weekly = null;
    
    if ($hours > $hours_limit) {
        
        $weekly = $rate * $hours_limit;
        $overtime = $hours - $hours_limit;
        $weekly+= ($rate * 1.5) * $overtime;

    }
    else {
        $weekly = $rate * $hours;
    }

    echo "Pay: \${$weekly}";

?>