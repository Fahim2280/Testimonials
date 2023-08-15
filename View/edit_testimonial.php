<!DOCTYPE html>
<html>

<head>
    <title>Edit Testimonial</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/edit_testimonial.css">
</head>

<body>
    <div class="container">
        <h1>Edit Testimonial</h1>
        <div>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['index'])) {
                $index = $_GET['index'];
                $testimonials = json_decode(file_get_contents('../Model/testimonials.json'), true);

                if (isset($testimonials[$index])) {
                    $testimonial = $testimonials[$index];
            ?>
                    <div>
                        <form action="../Controller/update_testimonial.php?index=<?php echo $index; ?>" method="post">
                            <div>
                                <label for="name">Name:</label>
                                <input type="text" id="name" name="name" value="<?php echo $testimonial['name']; ?>" required><br>
                            </div>
                            <div>
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" value="<?php echo $testimonial['email']; ?>" required><br>
                            </div>
                            <div>
                                <label for="testimonial">Testimonial:</label>
                                <textarea id="testimonial" name="testimonial" required><?php echo $testimonial['testimonial']; ?></textarea><br>
                            </div>
                            <div>
                                <input type="submit" value="Update" class="btn">
                            </div>
                        </form>
                    </div>

            <?php
                } else {
                    echo "<p>Testimonial not found.</p>";
                }
            } else {
                echo "<p>Invalid request.</p>";
            }
            ?>
        </div>
    </div>
</body>

</html>