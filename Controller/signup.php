<?php
// Load user data from JSON file
function loadUsers() {
    $usersJson = file_get_contents('../Model/users.json');
    return json_decode($usersJson, true);
}

// Save user data to JSON file
function saveUsers($users) {
    $usersJson = json_encode($users, JSON_PRETTY_PRINT);
    file_put_contents('../Model/users.json', $usersJson);
}

// Sign Up
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if (!empty($username) && !empty($password)) {
        $users = loadUsers();
        $users[] = ['username' => $username, 'password' => $password];
        saveUsers($users);
        include '../Index.php';
    } else {
        echo "Username and password are required.";
    }
}

// Show sign-up form
include '../Index.php';
