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
   <title>Cupu Travel Home</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <?php include "navbar.php" ?>

   <!-- Logout Confirmation Modal -->
   <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="logoutModalLabel">Konfirmasi Keluar</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               Apakah Anda yakin ingin keluar?
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Batal</button>
               <a href="?logout=true" class="btn text-danger">Keluar</a>
            </div>
         </div>
      </div>
   </div>

   <div class="container-fluid h-100">
      <div class="row h-100">
         <div class="col-12">
            <div class="bg" style="background-image: url('/images/candi.png'); 
                      background-size: cover; 
                      background-position: center; 
                      height: 30rem;">
               <div class="d-flex flex-column justify-content-center 
               container align-items-start h-100 text-start text-white px-5">
                  <h4 class="fw-normal">
                     Pesan tiket wisata dengan mudah dan cepat
                  </h4>
                  <h1>Telusuri setiap Destinasi</h1>
               <?php if (!isset($_SESSION['email'])): ?>
                  <a href="login.php" class="btn btn-light fw-bold mt-4">Cari Tempat Wisata</a>
               <?php else: ?>
                  <a href="cari.php" class="btn btn-light fw-bold mt-4">Cari Tempat Wisata</a>
               <?php endif; ?>
               </div>
            </div>
         </div>
      </div>
   </div>



   <h2 class="my-4 container">
      Telusuri semua tempat:
   </h2>
   <div class="w-100">
      <div class="">
         <div class="container py-3 mx-auto row ">
            <img class="col-6" style="max-height: 20rem; background-position: center; background-size: cover;"
               src="/images//wisata/obelix.png" alt="">
            <div class="col-6 d-flex flex-column justify-content-center">
               <h2 class="fw-bold">Obelix</h2>
               <p>Menawarkan pemandangan sunset menakjubkan, spot foto instagramable, dan suasana santai di ketinggian.
               </p>
            </div>
         </div>
      </div>
      <div class="bg-dark-subtle">

         <div class="container mx-auto row py-3">
            <div class="col-6 d-flex flex-column justify-content-center">
               <h2 class="fw-bold">Jogja Bay</h2>
               <p>Menghadirkan wahana air mendebarkan dan atraksi yang menyenangkan.
               </p>
            </div>
            <img class="col-6" style="max-height: 20rem; background-position: center; background-size: cover;"
               src="/images/wisata/jogja-bay.png" alt="">
         </div>
      </div>

      <div class="">
         <div class="container mx-auto row py-3">
            <img class="col-6" style="max-height: 20rem; background-position: center; background-size: cover;"
               src="/images/wisata/benteng.png" alt="">
            <div class="col-6 d-flex flex-column justify-content-center">
               <h2 class="fw-bold">Benteng Vredeburg</h2>
               <p>Menawarkan pemandangan sunset menakjubkan, spot foto instagramable, dan suasana santai di ketinggian.
               </p>
            </div>
         </div>
      </div>
   </div>

   <div class="bg-dark-subtle">

      <div class="container mx-auto row py-3">
         <h2 class="text-center">Ciri Khas Jawa Tengah ???</h2>
         <div class="py-5">

            <div class="row">

               <div class="col-4 px-3 d-flex flex-column align-items-center justify-content-center">
                  <div class="w-100 rounded-3 overflow-hidden pb-3 mx-auto " style="max-height: 10rem;">
                     <img class="w-100" src="/images/makanan/gudeg.png" alt="">
                  </div>
                  Gudeg
               </div>
               <div class="col-4 px-3 d-flex flex-column align-items-center justify-content-center">
                  <div class="w-100 rounded-3 overflow-hidden pb-3 mx-auto " style="max-height: 10rem;">
                     <img class="w-100" src="/images/makanan/bakpia.png" alt="">
                  </div>
                  Bakpia
               </div>
               <div class="col-4 px-3 d-flex flex-column align-items-center justify-content-center">
                  <div class="w-100 rounded-3 overflow-hidden pb-3 mx-auto " style="max-height: 10rem;">
                     <img class="w-100" src="/images/makanan/jadah.png" alt="">
                  </div>
                  Jadah Tempe
               </div>
            </div>
            <div class="py-3"></div>
            <div class="row">

               <div class="col-4 px-3 d-flex flex-column align-items-center justify-content-center">
                  <div class="w-100 rounded-3 overflow-hidden pb-3 mx-auto " style="max-height: 10rem;">
                     <img class="w-100" src="/images/makanan/tamansari.png" alt="">
                  </div>
                  Taman Sari
               </div>
               <div class="col-4 px-3 d-flex flex-column align-items-center justify-content-center">
                  <div class="w-100 rounded-3 overflow-hidden pb-3 mx-auto " style="max-height: 10rem;">
                     <img class="w-100" src="/images/makanan/prambanan.png" alt="">
                  </div>
                  Candi Prambanan
               </div>
               <div class="col-4 px-3 d-flex flex-column align-items-center justify-content-center">
                  <div class="w-100 rounded-3 overflow-hidden pb-3 mx-auto " style="max-height: 10rem;">
                     <img class="w-100" src="/images/makanan/keraton.png" alt="">
                  </div>
                  Keraton Yogyakarta
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="container my-5">
      <p class="px-5 text-center fs-4">"Jelajahi pesona Jawa Tengah, dari keagungan Candi Borobudur hingga keindahan
         alam Dataran Tinggi Dieng.
         Temukan keajaiban sejarah, budaya, dan alam dalam satu perjalanan tak terlupakan!"</p>

      <div class="d-flex justify-content-center">
         <div class="d-flex align-items-center px-5">
            <img height="49" src="/images/logo.png" alt="">
         </div>
         <div class="px-5">
            <div class="d-flex">
               <svg width="26" height="27" viewBox="0 0 26 27" fill="none" xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink">
                  <rect x="0.834061" y="0.589844" width="25" height="25" transform="rotate(1.91188 0.834061 0.589844)"
                     fill="url(#pattern0_23_153)" />
                  <defs>
                     <pattern id="pattern0_23_153" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_23_153" transform="scale(0.0104167)" />
                     </pattern>
                     <image id="image0_23_153" width="96" height="96"
                        xlink:href="data:image/png;base64,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" />
                  </defs>
               </svg>
               <p class="px-2">0851-8888-9999</p>
            </div>
            <div class="d-flex">
               <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink">
                  <rect y="0.409912" width="25" height="25" fill="url(#pattern0_23_172)" />
                  <defs>
                     <pattern id="pattern0_23_172" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_23_172" transform="scale(0.00390625)" />
                     </pattern>
                     <image id="image0_23_172" width="256" height="256"
                        xlink:href="data:image/png;base64,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" />
                  </defs>
               </svg>

               <p class="px-2">cuputravel@gmail.com</p>
            </div>
            <div class="d-flex">
               <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink">
                  <rect y="0.409912" width="25" height="25" fill="url(#pattern0_23_179)" />
                  <defs>
                     <pattern id="pattern0_23_179" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_23_179" transform="scale(0.0416667)" />
                     </pattern>
                     <image id="image0_23_179" width="24" height="24"
                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAABjElEQVRIDd2USy5FQRCGPyNW4DFDWIDHLrALrwRjQxIidiAEO0EQu8DYa+Ix535RnZzb955z7mFEJZXurur669HVBf+ZZoENYLOGvTPTpBCTwA3w2ZCvgYk6R4K/AA/AIjBUZxB3loFH4LnOiZELPtoDcH5lLJxc5Yp0tuaWZSkJelwNyvJIK4ExHee2xcfSwWCb9PuwAFwAH8HnwHzcEzxFPRwYa10w2AplX6bcC/ktcBjs3mB2s7vaKherg7ZDWVQYuQbHQH9B4f4kdCmTpPa+WB3UzYFlMdoieDIcAO6AsySItZGD91YbHmQAxaMleysKIqueM9CBIGV0BLxmykYZ2C1VJbr/bYl8QCPyQa15IvenoZtLwlhLMyhrU1tRIx/UclkWI1e2k4FXtul6GHWbP2Zit/gmsvs8cn1VfjRHrlE5uH5Kq4ExVQbgt3cqOria0jjwBFxWGTrPHbk6cXCZch2NtCawkQsu66iSdOLwslxN2MhrwYueHbk+vF20X8LqnJylNS8C/s39F5Hchqmq3fYhAAAAAElFTkSuQmCC" />
                  </defs>
               </svg>


               <p class="px-2">cuputravel_Jateng</p>
            </div>

         </div>
      </div>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
</body>

</html>