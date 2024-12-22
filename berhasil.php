<?php
session_start();
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'];
    $phone = $_POST['phone'] ?? '';
    $ticket_count = $_POST['ticket_count'];
    $selected_date = date('Y-m-d', strtotime($_POST['selected_date']));
    $total_payment = $_POST['total_payment'];
    $payment_method = $_POST['payment_method'];
    $destinasi_id = $_POST['destinasi_id'];

    $sql = "INSERT INTO transaksi (name, email, phone, ticket_count, selected_date, total_payment, payment_method, destinasi_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssisdsi", $name, $email, $phone, $ticket_count, $selected_date, $total_payment, $payment_method, $destinasi_id);
    $stmt->execute();
    $insert_id = $conn->insert_id;
    $stmt->close();
    $conn->close();
} else {
    header("Location: pesan.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Transaksi</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card text-center shadow">
            <div class="card-header bg-light d-flex justify-content-between align-items-center">
                <a href="index.php" class="text-decoration-none text-dark">
                    <i class="bi bi-arrow-left"></i>
                </a>
                <span class="fw-bold"><?= $payment_method ?></span>
                <span class="text-muted">ID Transaksi #<?= $insert_id ?></span>
            </div>
            <div class="card-body">
                <h5 class="card-title text-success fw-bold">TRANSAKSI TELAH DI PROSES !</h5>
                <p class="card-text"><?= date("d F Y") ?></p>
                <h2 class="text-dark fw-bold">Rp <?= number_format($total_payment, 0, ',', '.') ?></h2>
                <div class="row mt-4">
                    <div class="col text-muted">Metode Pembayaran</div>
                    <div class="col text-muted"><?= $payment_method ?></div>
                </div>
            </div>
        </div>
        <div class="w-100 text-center my-5">
            <a href="berhasil-detail.php?id=<?= $insert_id ?>" class="w-100 text-center my-5">
                Lihat Detail
            </a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
