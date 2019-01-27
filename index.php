<?php
    $version = 2019;
    //header('Location: 2019/index.php');
    $db = parse_url(getenv("DATABASE_URL"));
    $db["path"] = ltrim($db["path"], "/");

    if ($conn = pg_connect(getenv("DATABASE_URL"))) {
        echo "Connection Successful"; 
    } else {
        echo "connection failed";
    }
?>