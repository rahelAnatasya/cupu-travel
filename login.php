<?php
session_start();
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['email'] = $email;
        header('Location: index.php');
    } else {
        $error = "Invalid email or password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Halaman Masuk</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-dark"
   style="background: url(/images/tugu.png); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh;">
   <div class="container text-center text-white my-5 py-5" style="max-width: 30rem;">
      <h2 class="mb-4">HALAMAN MASUK</h2>
      <?php if (isset($error)) { echo "<p class='text-danger'>$error</p>"; } ?>
      <form method="POST" action="">
         <div class="mb-3 text-start">
            <label for="email" class="form-label">Email Address:</label>
            <input type="email" class="form-control bg-black bg-opacity-10 text-white" id="email" name="email" placeholder="example@gmail.com">
         </div>
         <div class="mb-3 text-start">
            <label for="password" class="form-label">Password:</label>
            <input type="password" class="form-control bg-black bg-opacity-10 text-white" id="password" name="password" placeholder="**********">
         </div>
         <div class="d-flex justify-content-between mb-3">
            <div>
               <input type="checkbox" id="remember" class="form-check-input">
               <label for="remember" class="form-check-label">Remember me</label>
            </div>
            <a class="text-white text-decoration-none fw-bold" href="#">Forgot Password?</a>
         </div>
         <button type="submit" class="btn btn-light fw-bold w-100 mb-3">Masuk</button>
         <p>Or connect with</p>
         <div class="w-100 overflow-hidden mb-3">
            <img class="px-2" width="80" src="https://upload.wikimedia.org/wikipedia/commons/4/4a/Logo_2013_Google.png" alt="Google">
            <img class="px-2" width="60" src="https://upload.wikimedia.org/wikipedia/commons/1/1b/Facebook_icon.svg" alt="Facebook">
         </div>
         <p>
            Belum punya Akun?
            <a href="daftar.php" style="color: red;">Daftar</a>
         </p>
      </form>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>