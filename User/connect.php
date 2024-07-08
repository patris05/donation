<?php 
session_start();

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$userName = $_POST['userName'];
$email = $_POST['email'];
$born = $_POST['born'];
$gender = $_POST['gender'];
$password = $_POST['password'];
$level = $_POST['level']; // Ini input tersembunyi untuk level, tetap diambil dari POST

// Hash password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Menghubungkan ke database
$conn = new mysqli('localhost', 'root', '', 'donation');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // Mempersiapkan statement SQL untuk INSERT
    $stmt = $conn->prepare("INSERT INTO register(firstName, lastName, userName, email, born, gender, password, level) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    
    // Binding parameter ke statement
    $stmt->bind_param("ssssssss", $firstName, $lastName, $userName, $email, $born, $gender, $hashed_password, $level);

    // Mengeksekusi statement
    $execval = $stmt->execute();
    
    if ($execval) {
        // Registrasi berhasil, atur sesi
        $_SESSION['userName'] = $userName;
        $_SESSION['firstName'] = $firstName;
        $_SESSION['lastName'] = $lastName;
        $_SESSION['email'] = $email;
        $_SESSION['born'] = $born;
        $_SESSION['gender'] = $gender;
        $_SESSION['level'] = $level; // Jika diperlukan
        
        echo "Daftar Akun Berhasil. Silahkan <a href='login.php'>login</a> sekarang";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Menutup statement dan koneksi
    $stmt->close();
    $conn->close();
}
?>
