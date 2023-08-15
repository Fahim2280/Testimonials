<!DOCTYPE html>
<html>

<head>
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="../assets/styles.css">
    <script src="../Controller/validateForm.js"></script>
</head>

<body>
    <h1>Sign Up</h1>
    <form action="../Controller/signup.php" method="post" onsubmit="return validateSignUpForm();">
        <input type="text" id="username" name="username" placeholder="Username"><br>
        <input type="password" id="password" name="password" placeholder="Password"><br>
        <input type="submit" name="signup" value="Sign Up">
    </form>
</body>

</html>