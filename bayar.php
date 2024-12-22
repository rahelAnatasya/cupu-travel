<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'];
    $phone = $_POST['phone'] ?? '';
    $ticket_count = $_POST['ticket_count'];
    $selected_date = $_POST['selected_date'];
    $destinasi_id = $_POST['destinasi_id'];
    $total_payment = $ticket_count * 75000; // Example calculation
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
    <title>Pembayaran Tiket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .payment-method {
            border: 2px solid transparent;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
            transition: border 0.3s;
        }

        .payment-method.selected {
            border: 2px solid #007bff;
        }

        .payment-logo {
            width: 80px;
            height: auto;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Halaman Pembayaran Tiket</h1>
        <form action="berhasil.php" method="POST" onsubmit="return validatePaymentMethod()">
            <div class="row justify-content-center mt-4">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Pemesan</label>
                        <input type="text" class="form-control" id="name" name="name" readonly
                            value="<?= $name ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" readonly
                            value="<?= $email ?>">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" id="phone" name="phone" readonly
                            value="<?= $phone ?>">
                    </div>
                    <div class="mb-3">
                        <label for="ticket_count" class="form-label">Jumlah Tiket</label>
                        <input type="number" class="form-control" id="ticket_count" name="ticket_count" readonly
                            value="<?= $ticket_count ?>">
                    </div>
                    <div class="mb-3">
                        <label for="selected_date" class="form-label">Tanggal Kunjungan</label>
                        <input type="text" class="form-control" id="selected_date" name="selected_date" readonly
                            value="<?= $selected_date ?>">
                    </div>
                    <div class="mb-3">
                        <label for="total_payment" class="form-label">Total Pembayaran</label>
                        <input type="text" class="form-control" id="total_payment" name="total_payment" readonly
                            value="<?= $total_payment ?>">
                    </div>
                    <input type="hidden" name="destinasi_id" value="<?= $destinasi_id ?>">
                    <input type="hidden" name="total_payment" value="<?= $total_payment ?>">
                    <input type="hidden" name="name" value="<?= $name ?>">
                    <input type="hidden" name="email" value="<?= $email ?>">
                    <input type="hidden" name="phone" value="<?= $phone ?>">
                    <input type="hidden" name="ticket_count" value="<?= $ticket_count ?>">
                    <input type="hidden" name="selected_date" value="<?= $selected_date ?>">
                </div>
                <div class="col-md-6">
                    <h3 class="text-center mb-4">Pilih Metode Pembayaran</h3>
                    <div class="row text-center">
                        <!-- DANA -->
                        <div class="col-6 col-md-4 mb-3">
                            <div class="payment-method" onclick="selectPayment('DANA')">
                                <img src="dana-logo.png" alt="DANA" class="payment-logo">
                            </div>
                        </div>
                        <!-- BRI -->
                        <div class="col-6 col-md-4 mb-3">
                            <div class="payment-method" onclick="selectPayment('BRI')">
                                <img src="bri-logo.png" alt="BRI" class="payment-logo">
                            </div>
                        </div>
                        <!-- OVO -->
                        <div class="col-6 col-md-4 mb-3">
                            <div class="payment-method" onclick="selectPayment('OVO')">
                                <img src="ovo-logo.png" alt="OVO" class="payment-logo">
                            </div>
                        </div>
                        <!-- Mandiri -->
                        <div class="col-6 col-md-4 mb-3">
                            <div class="payment-method" onclick="selectPayment('Mandiri')">
                                <img src="mandiri-logo.png" alt="Mandiri" class="payment-logo">
                            </div>
                        </div>
                        <!-- GoPay -->
                        <div class="col-6 col-md-4 mb-3">
                            <div class="payment-method" onclick="selectPayment('GoPay')">
                                <img src="gopay-logo.png" alt="GoPay" class="payment-logo">
                            </div>
                        </div>
                        <!-- BCA -->
                        <div class="col-6 col-md-4 mb-3">
                            <div class="payment-method" onclick="selectPayment('BCA')">
                                <img src="bca-logo.png" alt="BCA" class="payment-logo">
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="payment_method" id="paymentMethod">
                    <div class="text-center mt-4">
                        <button type="submit" class="btn col-6 btn-primary">Bayar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        function selectPayment(method) {
            // Remove selected class from all methods
            document.querySelectorAll('.payment-method').forEach(el => el.classList.remove('selected'));

            // Add selected class to clicked method
            const selected = Array.from(document.querySelectorAll('.payment-method'))
                .find(el => el.innerText.includes(method) || el.querySelector('img')?.alt === method);
            selected?.classList.add('selected');

            // Set hidden input value
            document.getElementById('paymentMethod').value = method;
        }

        function validatePaymentMethod() {
            const paymentMethod = document.getElementById('paymentMethod').value;
            if (!paymentMethod) {
                alert('Silakan pilih metode pembayaran sebelum melanjutkan.');
                return false;
            }
            return true;
        }
    </script>
</body>

</html>
