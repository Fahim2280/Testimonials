<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $testimonial = $_POST['testimonial'];
    $submissionDate = date("Y-m-d H:i:s");

    $newTestimonial = [
        'name' => $name,
        'email' => $email,
        'testimonial' => $testimonial,
        'submissionDate' => $submissionDate
    ];

    $testimonials = [];
    if (file_exists('../Model/testimonials.json')) {
        $testimonials = json_decode(file_get_contents('../Model/testimonials.json'), true);
    }

    $testimonials[] = $newTestimonial;
    file_put_contents('../Model/testimonials.json', json_encode($testimonials, JSON_PRETTY_PRINT));
}

header("Location: ../View/testimonial.php");
