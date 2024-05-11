<?php
    $conn=pg_connect("host=localhost port=5432 dbname=perpustakaan user=postgres password=");
    /* check connection */
    if (!$conn) {
        echo "<h1>Not Connected</h1>";
    }
?>