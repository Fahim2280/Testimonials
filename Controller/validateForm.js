function validateForm() {
  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const testimonial = document.getElementById("testimonial").value;
  const emailError = document.getElementById("emailError");

  emailError.textContent = ""; // Clear any previous error message

  if (!name || !email || !testimonial) {
    if (!name) {
      document.getElementById("name").style.border = "1px solid red";
    } else {
      document.getElementById("name").style.border = "1px solid #ccc";
    }

    if (!email) {
      emailError.textContent = "Email is required";
    } else {
      document.getElementById("email").style.border = "1px solid #ccc";
    }

    if (!testimonial) {
      document.getElementById("testimonial").style.border = "1px solid red";
    } else {
      document.getElementById("testimonial").style.border = "1px solid #ccc";
    }

    event.preventDefault(); // Prevent form submission
  }
}


// JavaScript validation for sign-up form
function validateSignUpForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username === "" || password === "") {
        alert("Please fill in all fields.");
        return false;
    }

    return true;
}

// JavaScript validation for sign-in form
function validateSignInForm() {
    var username = document.getElementsByName("username")[0].value;
    var password = document.getElementsByName("password")[0].value;

    if (username === "" || password === "") {
        alert("Please fill in all fields.");
        return false;
    }

    return true;
}