<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <style>
        .profile-container {
            margin-top: 50px;
        }
        .profile-header {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
        }
        .profile-content {
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container profile-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="profile-header text-right">
                    <p>Welcome, <?php echo $_SESSION['userName']; ?></p>
                </div>
                <div class="profile-content">
                    <h2>User Profile</h2>
                    <table class="table table-bordered">
                        <tr>
                            <th>First Name</th>
                            <td><?php echo $_SESSION['firstName']; ?></td>
                        </tr>
                        <tr>
                            <th>Last Name</th>
                            <td><?php echo $_SESSION['lastName']; ?></td>
                        </tr>
                        <tr>
                            <th>Username</th>
                            <td><?php echo $_SESSION['userName']; ?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><?php echo $_SESSION['email']; ?></td>
                        </tr>
                        <tr>
                            <th>Born</th>
                            <td><?php echo $_SESSION['born']; ?></td>
                        </tr>
                        <tr>
                            <th>Gender</th>
                            <td><?php echo $_SESSION['gender']; ?></td>
                        </tr>
                    </table>
                    <a href="profile/form_edit.php" class="btn btn-primary">Edit Profile</a> <br><br>
                    <a href="profile/delete.php" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin untuk menghapus profil Anda?')">Delete Profile</a>
                    <a href="../index.php" class="btn btn-secondary text-dark">Logout</a> <br><br>

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
