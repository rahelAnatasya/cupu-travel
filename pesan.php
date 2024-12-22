<?php
session_start();
if (isset($_GET['logout'])) {
   session_unset();
   session_destroy();
   header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Pemesanan Tiket</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
<?php include "navbar.php" ?>

   <div class="container mt-5">
      <h1 class="text-center mb-5">Menu Pembelian Tiket Wisata Gembira Loka</h1>
      <form action="bayar.php" method="POST">
         <div class="row mt-4">
            <div class="col-md-6">
               <!-- <h5 class="text-center">Informasi Pembelian</h5> -->
               <div class="mb-3">
                  <label for="name" class="form-label">Masukkan Pemesan</label>
                  <input type="text" class="form-control" id="name" name="name" required>
               </div>
               <div class="mb-3">
                  <label for="email" class="form-label">Masukkan Email</label>
                  <input type="email" class="form-control" id="email" name="email" required>
               </div>
               <div class="mb-3">
                  <label for="phone" class="form-label">Masukkan Nomor Telepon</label>
                  <input type="text" class="form-control" id="phone" name="phone" required>
               </div>
               <div class="mb-3">
                  <label for="ticket_count" class="form-label">Jumlah Pembelian Tiket</label>
                  <input type="number" class="form-control" id="ticket_count" name="ticket_count" required>
               </div>
               <div class="mb-5">
                  <label for="selected_date" class="form-label">Tanggal yang Dipilih</label>
                  <input type="text" class="form-control" id="selected_date" name="selected_date" readonly>
               </div>
               <input type="hidden" name="destinasi_id" value="<?= $_GET['id'] ?>">
               <button type="submit" class="btn w-100 btn-primary">Beli Tiket</button>
            </div>
            <div class="col-md-6">
               <h5 class="text-center" id="calendar-title">Desember 2024</h5>
               <div class="d-flex justify-content-between mb-2">
                  <button class="btn btn-sm btn-secondary" id="prev-month">&laquo; Bulan Sebelumnya</button>
                  <button class="btn btn-sm btn-secondary" id="next-month">Bulan Berikutnya &raquo;</button>
               </div>
               <table class="table table-bordered text-center">
                  <thead>
                     <tr>
                        <th>SU</th>
                        <th>MO</th>
                        <th>TU</th>
                        <th>WE</th>
                        <th>TH</th>
                        <th>FR</th>
                        <th>SA</th>
                     </tr>
                  </thead>
                  <tbody id="calendar-body">
                     <!-- Calendar dates will be dynamically generated here -->
                  </tbody>
               </table>

            </div>
         </div>
      </form>

   </div>

   <script>
      $(document).ready(function () {
         let currentDate = new Date(2024, 11); // Start with December 2024

         function renderCalendar() {
            const year = currentDate.getFullYear();
            const month = currentDate.getMonth();
            const monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

            $('#calendar-title').text(`${monthNames[month]} ${year}`);

            const firstDay = new Date(year, month, 1).getDay();
            const daysInMonth = new Date(year, month + 1, 0).getDate();

            let calendarHTML = "";
            let date = 1;

            for (let i = 0; i < 6; i++) {
               let row = "<tr>";
               for (let j = 0; j < 7; j++) {
                  if (i === 0 && j < firstDay) {
                     row += "<td></td>";
                  } else if (date > daysInMonth) {
                     break;
                  } else {
                     row += `<td class="date-cell" data-date="${date}-${month + 1}-${year}">${date}</td>`;
                     date++;
                  }
               }
               row += "</tr>";
               calendarHTML += row;
            }

            $('#calendar-body').html(calendarHTML);

            $('.date-cell').on('click', function () {
               $('.date-cell').removeClass('bg-primary text-white');
               $(this).addClass('bg-primary text-white');
               const selectedDate = $(this).data('date');
               $('#selected_date').val(selectedDate);
            });
         }

         $('#prev-month').on('click', function () {
            currentDate.setMonth(currentDate.getMonth() - 1);
            renderCalendar();
         });

         $('#next-month').on('click', function () {
            currentDate.setMonth(currentDate.getMonth() + 1);
            renderCalendar();
         });

         renderCalendar();
      });
   </script>
</body>

</html>