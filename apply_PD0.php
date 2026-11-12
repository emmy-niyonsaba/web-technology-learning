
<?php

$host = "localhost";
$dbname = "";
$username = "root";
$password = "";

$connection = new PDO(
"mysql:host=$host;dbname=$dbname",
$username,
$password
);


echo "Connected to the database successfully!";

?>