<?php
    function is_even(int $n) {
        
        if ($n %2== 0) {
            return "{$n} is even.";    
        }
        else {
            return "{$n} is odd.";
        }
    }

    echo is_even(77);
?>s