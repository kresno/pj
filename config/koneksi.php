<?php
$servername = "localhost";
$username = "ruangaci";
$password = "085310526076atisser221292";
$dbname = "ruangaci_pj";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($con);
?> 