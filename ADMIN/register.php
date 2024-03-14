<?php
session_start();

$servername = "localhost";
$username = "host";
$password = "";
$dbname = "qr_code_food_ordering";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

// Check if the username is already taken
$sql_check_username = "SELECT * FROM Admin WHERE username='$username'";
$result_check_username = $conn->query($sql_check_username);

if ($result_check_username->num_rows > 0) {
    // Username already exists
    echo "Username already exists. Please choose a different username.";
} else {
    // Insert new admin record into the database
    $sql_insert_admin = "INSERT INTO Admin (username, password) VALUES ('$username', '$password')";
    if ($conn->query($sql_insert_admin) === TRUE) {
        // Admin registered successfully
        echo "Registration successful. You can now login.";
    } else {
        // Error occurred during registration
        echo "Error: " . $sql_insert_admin . "<br>" . $conn->error;
    }
}

$conn->close();
?>
