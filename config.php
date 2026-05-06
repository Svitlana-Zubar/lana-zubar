<?php
/**
 * Database Configuration File
 * Update these credentials with your actual database information
 */

// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$database = "blog_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set charset to UTF-8
$conn->set_charset("UTF8");

?>
