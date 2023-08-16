<?php
if (isset($_POST['signin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Load existing users from JSON file
    $users = [];
    if (file_exists('../Model/users.json')) {
        $users = json_decode(file_get_contents('../Model/users.json'), true);
    }

    // Check if the username and password match
    foreach ($users as $user) {
        if ($user['username'] === $username && password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['username'] = $username;
            header('Location: ../View/index.php'); // Redirect to index.php after successful login
            exit();
        }
    }

    // Show error message if credentials are invalid
    echo 'Invalid username or password. Please try again.';
}
