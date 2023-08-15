<?php
echo "name";
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['index'])) {
    $index = $_GET['index'];
    $testimonials = json_decode(file_get_contents('../Model/testimonials.json'), true);

    if (isset($testimonials[$index])) {
        unset($testimonials[$index]);
        file_put_contents('../Model/testimonials.json', json_encode(array_values($testimonials), JSON_PRETTY_PRINT));
    }
}

header("Location: ../View/view_testimonial.php");
