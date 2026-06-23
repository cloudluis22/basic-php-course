<?php
    $child = false;
    $senior = true;
    $ticket = true;

    if ($child && $ticket) {
        echo ("Invalid client");
        return;
    }

    if ($ticket && ($child || $senior)) {
        echo ("You may enter.");
    }
    else {
        echo ("You can't enter");
    }
?>