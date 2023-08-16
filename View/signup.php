</html>
<!DOCTYPE html>
<html>

<head>
    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="../assets/singup.css">
    <script src="../Controller/validateForm.js"></script>
</head>

<body>
    <h1>Sign Up</h1>
    <form action="../Controller/signup.php" method="post" onsubmit="return validateSignInForm();">
        <input type="text" name="username" placeholder="Username"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="submit" name="signup" value="Sign Up">
    </form>
    <p>Do have an account? <a href="signin.php">Sign Up</a></p>
</body>

</html>