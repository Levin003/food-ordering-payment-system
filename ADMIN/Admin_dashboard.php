<?php
session_start();

// Check if admin is authenticated
if (!isset($_SESSION['admin_username'])) {
    header("Location: login.html"); // Redirect to login page
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Admin Dashboard</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#orders">Orders</a></li>
            <li><a href="#paid_meals">Paid Meals</a></li>
            <li><a href="#tables">Tables</a></li>
            <li><a href="#customers">Customers</a></li>
        </ul>
    </nav>
    <section id="orders">
        <h2>Orders</h2>
        <!-- Add orders content here -->
    </section>
    <section id="paid_meals">
        <h2>Paid Meals</h2>
        <!-- Add paid meals content here -->
    </section>
    <section id="tables">
        <h2>Tables</h2>
        <!-- Add tables content here -->
    </section>
    <section id="customers">
        <h2>Customers</h2>
        <!-- Add customers content here -->
    </section>
    <!-- Add your custom section here -->
    <section id="another_section">
        <h2>Another Section</h2>
        <!-- Add content for the new section here -->
    </section>
    <!-- Additional sections can be added similarly -->
</body>
</html>
