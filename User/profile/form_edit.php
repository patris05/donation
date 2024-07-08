<?php
session_start();
// Mengambil informasi profil dari session atau database
$userName = $_SESSION['userName'];
$email = $_SESSION['email'];
$born = $_SESSION['born'];
$gender = $_SESSION['gender'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Profile</title>
</head>
<body>
    <h2>Edit Profile</h2>
    <form action="process_edit.php" method="post">
        <label for="userName">Username:</label><br>
        <input type="text" id="userName" name="userName" value="<?php echo htmlspecialchars($userName); ?>" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required><br><br>
        
        <label for="born">Born:</label><br>
        <input type="text" id="born" name="born" value="<?php echo htmlspecialchars($born); ?>" required><br><br>
        
        <label for="gender">Gender:</label><br>
        <input type="text" id="gender" name="gender" value="<?php echo htmlspecialchars($gender); ?>" required><br><br>
        
        <input type="submit" value="Save Changes">
    </form>
</body>
</html>
