<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: ../View/signin.php'); // Redirect to sign-in page if not logged in
    exit();
}
