
<?php

$host = "localhost";
$dbname = "student_db";
$username = "root";
$password = "";


    $connection = new PDO(
        "mysql:host=$host;dbname=$dbname",
        $username,
        $password
    );

    $sql = "INSERT INTO student_info (id, name, email)
            VALUES (?, ?, ?)";


    $statement = $connection->prepare($sql);

    $statement->execute([
        2,
        "Emmanuel",
        "emmanuel@gmail.com"
    ]);

    echo "Student inserted successfully!";



?>
