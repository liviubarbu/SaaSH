<?php
    // Before implementing this code, you should use your own username, password and database name values.

    $mysql_link = mysql_connect("localhost", "videocli_image1", "eeu312sql");   
    mysql_select_db("videocli_image") or die("Could not select database");

    $images_dir = "photos";
?>
