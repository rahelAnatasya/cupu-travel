<?php 
session_start();    
if (!isset($_SESSION['email'])) {
    header('Location: index.php');
    exit();
}

include 'database.php';

$email = $_SESSION['email'];
$sql = "SELECT * FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

$stmt->close();
$conn->close();

$name = $user['name'] ?? '';
$phone = $user['phone'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Akun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include "navbar.php" ?>

    <div class="container mt-5">
        <div class="card mx-auto" style="max-width: 600px;">
            <div class="card-body">
                <div class="text-center mb-4">
                    <img src="https://unsplash.it/400/400" alt="Foto Profil" class="rounded-circle img-thumbnail" style="width: 150px; height: 150px;">
                </div>
                <form action="update_akun.php" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama" value="<?= htmlspecialchars($name) ?>">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Nomor HP</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Masukkan Nomor HP" value="<?= htmlspecialchars($phone) ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" value="<?= htmlspecialchars($email) ?>" readonly>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
