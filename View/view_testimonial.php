<?php include '../Controller/session.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonials List</title>
    <link rel="stylesheet" type="text/css" href="../assets/view_testimonial.css">
    <script src="../Controller/live_search.js"></script>
</head>

<body>
    <main>
        <?php include 'header.php'; ?>
        <div class="container">
            <h2>Submitted Testimonials List</h2>

            <div>
                <input type="text" id="search" placeholder="Search by Name, Date, or Testimonial" onkeyup="search()">
            </div>
            <!-- Display Testimonials -->
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Testimonial</th>
                        <th>Date of Submission</th>
                        <th>Edit|Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include '../Controller/display_testimonials.php'; ?>
                </tbody>
            </table>
        </div>
        <?php include 'footer.php'; ?>
    </main>

</body>

</html>