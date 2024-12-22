<?php
session_start();
include "database.php";

$token = isset($_GET['token']) ? $_GET['token'] : '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $new_password = $_POST['new_password'];
    $ulang_password = $_POST['ulang_password'];

    if ($new_password === $ulang_password) {
        $query = "UPDATE users SET password='$new_password', reset_token=NULL WHERE email='$email'";
        mysqli_query($conn, $query);
        echo "Password berhasil direset.";
    } else {
        echo "Password tidak cocok.";
    }
} else {
    $query = "SELECT email FROM users WHERE reset_token='$token'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $email = $row['email'];
    } else {
        echo "Token tidak valid.";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Sandi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>RESET KATA SANDI</h1>
        <form action="reset_sandi_process.php" method="POST">
            <!-- Kirim email ke reset_sandi_process.php -->
            <input type="hidden" name="email" value="<?php echo $email; ?>">  
            <label for="new_password">Kata Sandi Baru :</label>
            <input type="password" id="new_password" name="new_password" required>
            <label for="ulang_password">Masukkan Ulang Kata Sandi :</label>
            <input type="password" id="ulang_password" name="ulang_password" required>
            <button type="submit">Masuk</button>
        </form>
    </div>
</body>
</html>
