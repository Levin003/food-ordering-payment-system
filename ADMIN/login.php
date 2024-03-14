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

$username = $_POST['host'];
$password = $_POST[''];

$sql = "SELECT * FROM Admin WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Admin authenticated
    $_SESSION['admin_username'] = $username;
    header("Location: admin_dashboard.php"); // Redirect to admin dashboard
} else {
    // Invalid credentials
    echo "Invalid username or password";
}

$conn->close();
?>
