<?php

    session_start();

    include "bin.php";

    $newfiles = GetFiles('./');
    $changelist = [];

    // Grab ID from URL, so we can support multiple tabs
    $id = $_GET["id"];

    if (! isset($_SESSION[$id]["files"])) {
        $_SESSION[$id]["files"] = $newfiles;
    }

    $files = $_SESSION[$id]["files"];

    $dates = array_values($files);
    rsort($dates);

    // Loop through files to see if dates have changed
    // Add any updated files to a JSON array
    foreach($newfiles as $newfile => $newdate) {
        $date = $files[$newfile];

        if ($newdate !== $date) {
            $changelist[$newfile] = $newdate;
        }
    }

    if (count($changelist) > 0) {
        // Reset Modification Date
        // $_SESSION[$id]["files"] = $newfiles;

        header('Content-Type: application/json');
        print json_encode($changelist, JSON_UNESCAPED_SLASHES, JSON_PRETTY_PRINT);
    } else {
        header('abc: HeaderValue');
        header("HTTP/1.1 200 OK");
    }

?>
