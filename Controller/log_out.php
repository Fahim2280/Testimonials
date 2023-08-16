<?php
session_start();

// Destroy the session
session_destroy();

// Redirect to the sign-in page
header('Location: ../View/signin.php');
exit();
