function validate() {
  var valid = true;

  // Clear all errors
  ["nameErr","emailErr","passErr","confirmErr","phoneErr"].forEach(function(id) {
    document.getElementById(id).textContent = "";
  });
  document.getElementById("successMsg").style.display = "none";

  var name    = document.getElementById("name").value.trim();
  var email   = document.getElementById("email").value.trim();
  var pass    = document.getElementById("password").value;
  var confirm = document.getElementById("confirm").value;
  var phone   = document.getElementById("phone").value.trim();

  if (name === "") {
    document.getElementById("nameErr").textContent = "Name is required.";
    valid = false;
  }

  var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (email === "") {
    document.getElementById("emailErr").textContent = "Email is required.";
    valid = false;
  } else if (!emailPattern.test(email)) {
    document.getElementById("emailErr").textContent = "Enter a valid email.";
    valid = false;
  }

  if (pass === "") {
    document.getElementById("passErr").textContent = "Password is required.";
    valid = false;
  } else if (pass.length < 6) {
    document.getElementById("passErr").textContent = "Password must be at least 6 characters.";
    valid = false;
  }

  if (confirm === "") {
    document.getElementById("confirmErr").textContent = "Please confirm your password.";
    valid = false;
  } else if (pass !== confirm) {
    document.getElementById("confirmErr").textContent = "Passwords do not match.";
    valid = false;
  }

  var phonePattern = /^[6-9]\d{9}$/;
  if (phone === "") {
    document.getElementById("phoneErr").textContent = "Phone number is required.";
    valid = false;
  } else if (!phonePattern.test(phone)) {
    document.getElementById("phoneErr").textContent = "Enter a valid 10-digit number.";
    valid = false;
  }

  if (valid) {
    document.getElementById("successMsg").style.display = "block";
    document.getElementById("regForm").reset();
  }
}
