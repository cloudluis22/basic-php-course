<?php
    // Cookies are a way to store non sensitive user information that
    // may be used by the backend.

    // local storage is for front-end, cookies for back-end.

    setcookie("fav_food", "tacos", time() + (8600 * 32), "/");
    setcookie("fav_drink", "coffee", time() + (8600 * 3), "/");
?>