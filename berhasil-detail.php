<?php
session_start();
include 'database.php';

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit();
}

$transaction_id = $_GET['id'];

$sql = "SELECT * FROM transaksi WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $transaction_id);
$stmt->execute();
$result = $stmt->get_result();
$transaction = $result->fetch_assoc();

$stmt->close();
$conn->close();

if (!$transaction) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi <?= $transaction['payment_method'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="card shadow mx-auto" style="max-width: 600px;">
            <div class="card-body">
                <div class="text-center mb-4">
                    <img src="<?= $transaction['payment_method'] ?>" alt=" <?= $transaction['payment_method'] ?>" class="img-fluid">
                    <p class="text-muted mt-2"><?= date("d F Y", strtotime($transaction['created_at'])) ?> &nbsp; | &nbsp; ID Transaksi #<?= $transaction['id'] ?></p>
                </div>
                <hr>
                <div class="text-center mb-3">
                    <h5 class="text-success"><i class="bi bi-check-circle"></i> Transaksi Berhasil</h5>
                    <p>Pembelian Tiket <b>Rp <?= number_format($transaction['total_payment'], 0, ',', '.') ?></b></p>
                    <div class="bg-primary text-white py-2 rounded">
                        <h4>Total Bayar: Rp <?= number_format($transaction['total_payment'], 0, ',', '.') ?></h4>
                    </div>
                    <p class="text-muted mt-2">Metode Pembayaran: <?= $transaction['payment_method'] ?></p>
                </div>
                <hr>
                <div>
                    <h6 class="fw-bold">Detail Pemesan</h6>
                    <table class="table table-borderless">
                        <tr>
                            <td style="width: 40%">Nama</td>
                            <td>: <?= $transaction['name'] ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>: <?= $transaction['email'] ?></td>
                        </tr>
                        <tr>
                            <td>Nomor Telepon</td>
                            <td>: <?= $transaction['phone'] ?></td>
                        </tr>
                    </table>
                    <h6 class="fw-bold">Detail Transaksi</h6>
                    <table class="table table-borderless">
                        <tr>
                            <td style="width: 40%">ID Transaksi</td>
                            <td>: <?= $transaction['id'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Kunjungan</td>
                            <td>: <?= date("d F Y", strtotime($transaction['selected_date'])) ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Tiket</td>
                            <td>: <?= $transaction['ticket_count'] ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="cari.php" class="btn btn-link text-danger">Kembali ke Menu</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>