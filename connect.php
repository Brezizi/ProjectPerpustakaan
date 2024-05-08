<?php
    $conn=pg_connect("host=host port=5432 dbname=perpustakaan user=postgres password=");
    /* check connection */
    if (!$conn) {
        echo "<h1>Not Connected</h1>";
    }
?>