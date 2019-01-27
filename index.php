<?php
    $version = 2019;
    //header('Location: 2019/index.php');
    $db = parse_url(getenv("HEROKU_POSTGRESQL_BLUE_URL"));
    $db["path"] = ltrim($db["path"], "/");

    if ($conn = pg_connect(getenv("HEROKU_POSTGRESQL_BLUE_URL"))) {
        echo "Connection Successful<br>"; 
    } else {
        echo "connection failed";
    }

    echo pg_version();
?>