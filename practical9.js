function validateForm() {
  var isValid = true;

  // Clear previous errors
  document.getElementById("nameError").textContent = "";
  document.getElementById("emailError").textContent = "";
  document.getElementById("mobileError").textContent = "";
  document.getElementById("deptError").textContent = "";
  document.getElementById("passwordError").textContent = "";
  document.getElementById("successMsg").textContent = "";

  // Name validation
  var name = document.getElementById("name").value.trim();
  if (name === "") {
    document.getElementById("nameError").textContent = "Name is required.";
    isValid = false;
  }

  // Email validation
  var email = document.getElementById("email").value.trim();
  var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (email === "") {
    document.getElementById("emailError").textContent = "Email is required.";
    isValid = false;
  } else if (!emailPattern.test(email)) {
    document.getElementById("emailError").textContent = "Enter a valid email address.";
    isValid = false;
  }

  // Mobile validation
  var mobile = document.getElementById("mobile").value.trim();
  var mobilePattern = /^[6-9]\d{9}$/;
  if (mobile === "") {
    document.getElementById("mobileError").textContent = "Mobile number is required.";
    isValid = false;
  } else if (!mobilePattern.test(mobile)) {
    document.getElementById("mobileError").textContent = "Enter a valid 10-digit Indian mobile number.";
    isValid = false;
  }

  // Department validation
  var dept = document.getElementById("dept").value.trim();
  if (dept === "") {
    document.getElementById("deptError").textContent = "Department is required.";
    isValid = false;
  }

  // Password validation
  var password = document.getElementById("password").value;
  if (password === "") {
    document.getElementById("passwordError").textContent = "Password is required.";
    isValid = false;
  } else if (password.length < 6) {
    document.getElementById("passwordError").textContent = "Password must be at least 6 characters.";
    isValid = false;
  }

  if (isValid) {
    document.getElementById("successMsg").textContent = "Signup successful! Welcome to the Library.";
    document.getElementById("signupForm").reset();
  }
}
