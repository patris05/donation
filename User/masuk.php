<?php
session_start(); // Mulai session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Memeriksa apakah variabel $_POST sudah ada sebelum mengaksesnya
    if (isset($_POST['userName'], $_POST['password'])) {
        $userName = $_POST['userName'];
        $password = $_POST['password'];

        // Menghubungkan ke database
        $conn = new mysqli('localhost', 'root', '', 'donation');

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Memeriksa kredensial pengguna
        $stmt = $conn->prepare("SELECT id, password, level FROM register WHERE userName = ?");
        
        if ($stmt === false) {
            die("Error preparing statement: " . $conn->error);
        }

        $stmt->bind_param("s", $userName);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $hashed_password, $level);
            $stmt->fetch();

            // Verifikasi password
            if (password_verify($password, $hashed_password)) {
                // Password benar, login berhasil
                $_SESSION['userName'] = $userName;
                $_SESSION['id'] = $id;
                $_SESSION['level'] = $level;

                echo "Login successful. Welcome!";
                // Redirect ke halaman lain atau tampilkan pesan sukses
                header("Location: dashboard.php");

            }if ($level == 'admin') {
                echo "Login successful. Welcome!";
                // Redirect ke halaman lain atau tampilkan pesan sukses
                header("Location: ../Admin/index.php");                
                exit();
            } else {
                echo "Password salah.";
            }
        } else {
            echo "Akun tidak ditemukan.";
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "Form data tidak lengkap.";
    }
} else {
    header("Location: signup.php");
    exit();
}
?>


