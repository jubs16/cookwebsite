<?php
$servername = "db730617388.db.1and1.com";
$username = "dbo730617388";
$password = "STEVE_jobs2011";
$dbname = "db730617388";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
date_default_timezone_set("Asia/Kolkata");
?>




