<?php
session_start(); // Start the session

require_once 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $secondname = $_POST['secondname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Error: The email address is already registered.";
    } else {
        $sql = "INSERT INTO users (firstname, secondname, email, password) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $firstname, $secondname, $email, $password);

        if ($stmt->execute()) {
            // Set success message in session
            $_SESSION['signup_success'] = "Signup successful! Welcome, $firstname!";
            header("Location: index.php"); // Redirect to the homepage
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
    }

    $stmt->close();
}

$conn->close();
?>
