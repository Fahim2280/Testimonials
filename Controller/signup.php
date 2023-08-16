<?php
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Load existing users from JSON file
    $users = [];
    if (file_exists('../Model/users.json')) {
        $users = json_decode(file_get_contents('../Model/users.json'), true);
    }

    // Check if the username already exists
    foreach ($users as $user) {
        if ($user['username'] === $username) {
            die('Username already exists. Please choose a different username.');
        }
    }

    // Add the new user to the array
    $users[] = [
        'username' => $username,
        'password' => password_hash($password, PASSWORD_DEFAULT) // Hash the password
    ];

    // Save the updated user array to JSON file
    file_put_contents('../Model/users.json', json_encode($users));

    // Redirect to sign-in page or show a success message
    header('Location: ../View/signin.php');
    exit();
}
