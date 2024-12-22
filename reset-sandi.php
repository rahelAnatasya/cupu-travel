<?php
session_start();
include "database.php";

$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['new_password'])) {
        if (!isset($_POST['email'])) {
            header('Location: lupa-password.php');
        }
        $email = $_POST['email'];

        $new_password = $_POST['new_password'];
        $ulang_password = $_POST['ulang_password'];

        if ($new_password === $ulang_password) {
            $query = "UPDATE users SET password='$new_password' WHERE email='$_POST[email]'";
            ;
            if (mysqli_query($conn, $query)) {
                $message = "Password berhasil direset.";
                header("Location: login.php?reset-success=true");
            }
        } else {
            $message = "Password tidak cocok.";
        }
    } else {
        header("input-otp.php");
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
        <?php if ($message): ?>
            <p><?= $message; ?></p>
        <?php endif; ?>
        <form action="" method="POST">
            <!-- Kirim email ke reset_sandi_process.php -->
            <input type="hidden" name="email" value="<?= $_POST['email'] ?>">
            <label for="new_password">Kata Sandi Baru :</label>
            <input type="password" id="new_password" name="new_password" required>
            <label for="ulang_password">Masukkan Ulang Kata Sandi :</label>
            <input type="password" id="ulang_password" name="ulang_password" required>
            <button type="submit">Masuk</button>
        </form>
    </div>
</body>

</html>