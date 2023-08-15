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
