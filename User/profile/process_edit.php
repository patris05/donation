<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $born = $_POST['born'];
    $gender = $_POST['gender'];

    // Menghubungkan ke database
    $conn = new mysqli('localhost', 'root', '', 'donation');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Update data profil di tabel register
    $stmt = $conn->prepare("UPDATE register SET userName=?, email=?, born=?, gender=? WHERE userName=?");
    if ($stmt === false) {
        die("Error preparing statement: " . htmlspecialchars($conn->error));
    }

    $stmt->bind_param("sssss", $userName, $email, $born, $gender, $_SESSION['userName']);

    if ($stmt->execute() === false) {
        die("Error on execute: " . htmlspecialchars($stmt->error));
    } else {
        // Update session variables with new data
        $_SESSION['userName'] = $userName;
        $_SESSION['email'] = $email;
        $_SESSION['born'] = $born;
        $_SESSION['gender'] = $gender;
        
        echo "Profile updated successfully. <a href='../profile.php'>Go back to profile</a>";
    }

    $stmt->close();
    $conn->close();
}
?>
