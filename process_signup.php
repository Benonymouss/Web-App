<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
$firstName = $_POST['fname'];
$lastName = $_POST['nname'];
$email = $_POST['email'];
$password = $_POST['psw'];
$birthday = $_POST['bdate'];
$gender = $_POST['gender'];

// Password hashing for security


// Prepare and bind
$stmt = $conn->prepare("INSERT INTO employee (firstName, lastName, email, password, birthday, gender) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $firstName, $lastName, $email, $password, $birthday, $gender);

// Execute the statement
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
