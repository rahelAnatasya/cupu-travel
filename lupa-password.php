<?php
session_start();
include "database.php";

$message = '';
$email = '';
if (isset($_GET['error']) && $_GET['error'] == '404') {
    $message = "Email tidak ditemukan.";
    if (isset($GET['email'])) {
        $email = $GET['email'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>LUPA PASSWORD</h1>
        <?php if ($message): ?>
            <p><?php echo $message; ?></p>
        <?php endif; ?>
        <form action="input-otp.php" method="POST">
            <label for="email">Email :</label>
            <input type="email" id="email" value="<?= isset($_GET['email'])? $_GET['email']: '' ?>" name="email"
                required>
            <button type="submit">Kirim ke e-mail</button>
        </form>
    </div>
</body>

</html>