<!DOCTYPE html>
<html>

<head>
    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="../assets/styles.css">
    <script src="../Controller/validateForm.js"></script>
</head>

<body>
    <h1>Sign In</h1>
    <form action="../Controller/signin.php" method="post" onsubmit="return validateSignInForm();">
        <input type="text" name="username" placeholder="Username"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="submit" name="signin" value="Sign In">
    </form>
</body>

</html>