<?php
if (file_exists('../Model/testimonials.json')) {
    $testimonials = json_decode(file_get_contents('../Model/testimonials.json'), true);
    
    foreach ($testimonials as $index => $testimonial) {
        echo "<tr>";
        echo "<td>{$testimonial['name']}</td>";
        echo "<td>{$testimonial['testimonial']}</td>";
        echo "<td>{$testimonial['submissionDate']}</td>";
        echo "<td><a href='edit_testimonial.php?index={$index}'>Edit</a> | <a href='../Controller/delete_testimonial.php?index={$index}'>Delete</a></td>";
        echo "</tr>";
    }
}
