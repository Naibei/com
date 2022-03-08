<?php
include "db_connect_Login.php";
$sql = "INSERT INTO users (firstname, lastname, email)
VALUES ('David', 'Naibei', 'naibeidavid@gmail.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
