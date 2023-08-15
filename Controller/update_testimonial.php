<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['index'])) {
    $index = $_GET['index'];
    $testimonials = json_decode(file_get_contents('../Model/testimonials.json'), true);

    if (isset($testimonials[$index])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $testimonial = $_POST['testimonial'];

        $testimonials[$index]['name'] = $name;
        $testimonials[$index]['email'] = $email;
        $testimonials[$index]['testimonial'] = $testimonial;

        file_put_contents('../Model/testimonials.json', json_encode($testimonials, JSON_PRETTY_PRINT));
    }
}

header("Location: ../View/view_testimonial.php");
