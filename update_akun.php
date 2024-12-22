<?php
session_start();
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_SESSION['email'];

    $sql = "UPDATE users SET name = ?, phone = ? WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $phone, $email);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    header("Location: akun.php");
    exit();
} else {
    header("Location: index.php");
    exit();
}
?>
