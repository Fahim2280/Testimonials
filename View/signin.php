<!DOCTYPE html>
<html>

<head>
    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="../assets/styles.css">
    <script>
        function validateSignInForm() {
            var username = document.forms["signinForm"]["username"].value;
            var password = document.forms["signinForm"]["password"].value;
            var errorDiv = document.getElementById("error-message");

            errorDiv.innerHTML = ""; // Clear any previous error messages

            if (username === "" || password === "") {
                errorDiv.innerHTML = "Both username and password are required.";
                return false;
            }

            // Fetch the user data from JSON file
            fetch('../Model/users.json')
                .then(response => response.json())
                .then(users => {
                    // Check if provided credentials match any user
                    var isValidCredentials = users.some(function(user) {
                        return user.username === username && bcrypt.compareSync(password, user.password);
                    });

                    if (!isValidCredentials) {
                        errorDiv.innerHTML = "Invalid username or password.";
                        return false;
                    }
                })
                .catch(error => {
                    console.error('Error loading user data:', error);
                });
        }
    </script>
</head>

<body>
    <h1>Sign In</h1>
    <form name="signinForm" action="../Controller/signin.php" method="post" onsubmit="return validateSignInForm();">
        <input type="text" name="username" placeholder="Username"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <div id="error-message"></div>
        <input type="submit" name="signin" value="Sign In">
    </form>
    <p>Don't have an account? <a href="signup.html">Sign Up</a></p>

</body>

</html>