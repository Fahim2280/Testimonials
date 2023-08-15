<?php
// Load user data from JSON file
function loadUsers()
{
    $usersJson = file_get_contents('../Model/users.json');
    return json_decode($usersJson, true);
}

// Save user data to JSON file
function saveUsers($users)
{
    $usersJson = json_encode($users, JSON_PRETTY_PRINT);
    file_put_contents('../Model/users.json', $usersJson);
}

// Sign In
if (isset($_POST['signin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $users = loadUsers();

    foreach ($users as $user) {
        if ($username === $user['username'] && $password === $user['password']) {
            //include '../Index.php';
            exit();
        }
    }

    echo "Invalid credentials. Please try again.";
}

// Show sign-in form
include '../Index.php';
