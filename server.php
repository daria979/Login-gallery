<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "gallery_user";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

//e bun acest if dar ma enerveaza sa apara de fiecare data alert cu "database connected"
/*if($conn)
{
    echo '<script>alert("Database connected")</script>';
}
else
{
    echo '<script>alert("Failed to connect to database!")</script>';
}*/