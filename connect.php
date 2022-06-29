<?php
$servername = "localhost";
$username = "amadeu_talles";
$password = "Tagima@735";
$dbname = "amadeu_curr";

// Create connection
$link = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
