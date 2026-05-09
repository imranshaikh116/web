function validateForm() {
  var isValid = true;

  // Clear errors and hide success
  var fields = ["name", "email", "password", "confirmPassword", "phone"];
  fields.forEach(function(f) {
    document.getElementById(f + "Error").textContent = "";
  });
  document.getElementById("successMsg").style.display = "none";

  // Name
  var name = document.getElementById("name").value.trim();
  if (name === "") {
    document.getElementById("nameError").textContent = "Name is required.";
    isValid = false;
  } else if (name.length < 3) {
    document.getElementById("nameError").textContent = "Name must be at least 3 characters.";
    isValid = false;
  }

  // Email
  var email = document.getElementById("email").value.trim();
  var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (email === "") {
    document.getElementById("emailError").textContent = "Email is required.";
    isValid = false;
  } else if (!emailPattern.test(email)) {
    document.getElementById("emailError").textContent = "Enter a valid email address.";
    isValid = false;
  }

  // Password
  var password = document.getElementById("password").value;
  if (password === "") {
    document.getElementById("passwordError").textContent = "Password is required.";
    isValid = false;
  } else if (password.length < 8) {
    document.getElementById("passwordError").textContent = "Password must be at least 8 characters.";
    isValid = false;
  }

  // Confirm Password
  var confirmPassword = document.getElementById("confirmPassword").value;
  if (confirmPassword === "") {
    document.getElementById("confirmPasswordError").textContent = "Please confirm your password.";
    isValid = false;
  } else if (password !== confirmPassword) {
    document.getElementById("confirmPasswordError").textContent = "Passwords do not match.";
    isValid = false;
  }

  // Phone
  var phone = document.getElementById("phone").value.trim();
  var phonePattern = /^[6-9]\d{9}$/;
  if (phone === "") {
    document.getElementById("phoneError").textContent = "Phone number is required.";
    isValid = false;
  } else if (!phonePattern.test(phone)) {
    document.getElementById("phoneError").textContent = "Enter a valid 10-digit mobile number.";
    isValid = false;
  }

  if (isValid) {
    document.getElementById("successMsg").style.display = "block";
    document.getElementById("regForm").reset();
  }
}
