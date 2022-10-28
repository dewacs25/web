<?php

// Create connection
$conect = mysqli_connect("localhost", "root", "", "db-wan");
// Check connection
if (!$conect) {
    die("Connection failed: " . mysqli_connect_error());
}


?>