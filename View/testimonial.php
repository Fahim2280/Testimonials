<?php include '../Controller/session.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Testimonials</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../Controller/validateForm.js"></script>
    <link rel="stylesheet" type="text/css" href="../assets/testimonial.css">
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <h1>Testimonials</h1>

        <!-- Testimonial Submission Form -->
        <form id="testimonialForm" action="../Controller/submit_testimonial.php" method="post">
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
                <span id="emailError" class="error"></span>
            </div>
            <div>
                <label for="testimonial">Testimonial:</label>
                <textarea id="testimonial" name="testimonial"></textarea>
            </div>
            <div>
                <input type="submit" value="Submit" class="btn" onclick="validateForm()">
            </div>
        </form>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>