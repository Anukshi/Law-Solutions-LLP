<?php
// Database credentials
$servername = "localhost";
$username = "root"; // Default username for XAMPP/MAMP
$password = "";
$dbname = "assesment";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve data
$sql = "SELECT * FROM client_leads";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Email: " . $row["email"] . " - Phone: " . $row["phone"] . " - Message: " . $row["message"] . "<br>";
    }
} else {
    echo "No records found.";
}

// Close connection
$conn->close();
?>
