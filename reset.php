<?php

    session_start();

    include "bin.php";

    // Grab ID from URL, so we can support multiple tabs
    $id = $_GET["id"];
    $_SESSION[$id]["files"] = GetFiles('./');

?>
