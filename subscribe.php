<?php
// Database connection settings
$host = 'localhost';
$dbname = 'zouk_db';
$username = 'root';
$password = '';

// Establish a connection to the database
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Validate the email address
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        try {
            // Insert the email into the database
            $stmt = $conn->prepare("INSERT INTO subscribers (email) VALUES (:email)");
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            // Redirect to a thank you page or display a success message
            echo "Thank you for subscribing!";
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        echo "Please enter a valid email address.";
    }
}

// Close the database connection
$conn = null;
?>
