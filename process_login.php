<?php
session_start();

$servername = "localhost";
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "sms"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $psw = $_POST['psw'];

    $sql = "SELECT * FROM alogin WHERE email='$email' AND password='$psw'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Save the user info to session
        $_SESSION['email'] = $email;
        header("Location: uloginwel.php");
    } else {
        echo "Invalid email or password";
    }
}

$conn->close();
?>
