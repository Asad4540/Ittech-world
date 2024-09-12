<?php
session_start();

// Database connection settings
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "162.241.85.155";
$username = "a1642cow_curv_me";
$password = "NCY^s3^h^s$5";
$dbname = "a1642cow_curvemetrics";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $reason = $_POST['reason'];
    
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";

    // Get the hostname
    $host = $_SERVER['HTTP_HOST'];
    
    // Get the current URI
    $uri = $_SERVER['REQUEST_URI'];
    
    // Concatenate all parts to form the full URL
    $url = $protocol . "://" . $host . $uri;

    $sql = "INSERT INTO usubscribed_users (`fname`, `lname`, `email`, `website`, `reason`) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if($stmt) {
        $stmt->bind_param("sssss", $firstName,$lastName,$email,$host,$reason);
        $stmt->execute();

        if($stmt->affected_rows > 0) {
            $_SESSION['user_email'] = $email;

            // Reload the current page
            header("Location: unsubscribed.php");
            echo "<script>alert('Un-subscribed successully!');</script>";
            exit();
        }else{
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    }else {
        echo 'Error: ' . $conn->error;
    }

    $conn->close();
    exit();
} else {
    echo "Invalid request.";
}


?>