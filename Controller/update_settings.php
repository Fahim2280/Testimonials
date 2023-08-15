<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('../Model/settings.json'), true);
    $data['emailNotifications'] = isset($_POST['emailNotifications']);

    file_put_contents('../Model/settings.json', json_encode($data));
    header('Location: ../View/settings.php');
    exit;
}
