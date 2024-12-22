<?php
session_start();  // Mulai session
include "database.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) != 1) {
        // Redirect back to lupa-password.php with error
        header("Location: lupa-password.php?error=404&email=$email");
    } else {
        // Assuming OTP is sent successfully
        $otp_sent = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input OTP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="otp-container">
        <h1>MASUKKAN KODE OTP</h1>
        <?php if (isset($otp_sent) && $otp_sent): ?>
            <p>Kode OTP berhasil dikirim ke email, silahkan cek.</p>
        <?php endif; ?>
        <form action="reset-sandi.php" method="POST">
            <!-- Kirim email sebagai hidden input -->
            <input type="hidden" name="email" value="<?= $_POST['email'] ?>">
            <div class="otp-inputs">
                <input type="text" name="otp1" maxlength="1" style="margin-left: 120px;" required>
                <input type="text" name="otp2" maxlength="1" required>
                <input type="text" name="otp3" maxlength="1" required>
                <input type="text" name="otp4" maxlength="1" required>
                <input type="text" name="otp5" maxlength="1" required>
                <input type="text" name="otp6" maxlength="1" required>
            </div>
            <button type="submit" style="margin-left: 300px;">Konfirmasi</button>
        </form>
    </div>
</body>
</html>
