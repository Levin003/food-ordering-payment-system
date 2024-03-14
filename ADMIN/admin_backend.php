<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qr_code_food_ordering";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch orders
$sql = "SELECT * FROM orders";
$result = $conn->query($sql);

// Check if there are orders
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Order ID: " . $row["order_id"]. " - Customer ID: " . $row["customer_id"]. " - Table Number: " . $row["table_number"]. "<br>";
        // Output other order details as needed
    }
} else {
    echo "No orders found";
}

// Query to fetch paid meals
$sql = "SELECT * FROM paid_meals";
$result = $conn->query($sql);

// Check if there are paid meals
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Meal ID: " . $row["meal_id"]. " - Customer ID: " . $row["customer_id"]. " - Meal Name: " . $row["meal_name"]. "<br>";
        // Output other meal details as needed
    }
} else {
    echo "No paid meals found";
}

// Query to fetch customer information
$sql = "SELECT * FROM customers";
$result = $conn->query($sql);

// Check if there are customers
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Customer ID: " . $row["customer_id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. " - Phone Number: " . $row["phone_number"]. "<br>";
        // Output other customer details as needed
    }
} else {
    echo "No customers found";
}

$conn->close();
?>
