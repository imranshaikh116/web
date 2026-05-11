function validate() {
  let valid = true;

  // Clear previous errors
  document.getElementById("nameErr").textContent   = "";
  document.getElementById("emailErr").textContent  = "";
  document.getElementById("mobileErr").textContent = "";
  document.getElementById("deptErr").textContent   = "";
  document.getElementById("yearErr").textContent   = "";
  document.getElementById("successMsg").textContent = "";

  const name   = document.getElementById("name").value.trim();
  const email  = document.getElementById("email").value.trim();
  const mobile = document.getElementById("mobile").value.trim();
  const dept   = document.getElementById("dept").value.trim();
  const year   = document.getElementById("year").value;

  // Name validation
  if (name === "") {
    document.getElementById("nameErr").textContent = "Name is required.";
    valid = false;
  }

  // Email validation
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (email === "") {
    document.getElementById("emailErr").textContent = "Email is required.";
    valid = false;
  } else if (!emailPattern.test(email)) {
    document.getElementById("emailErr").textContent = "Enter a valid email address.";
    valid = false;
  }

  // Mobile validation
  const mobilePattern = /^[6-9]\d{9}$/;
  if (mobile === "") {
    document.getElementById("mobileErr").textContent = "Mobile number is required.";
    valid = false;
  } else if (!mobilePattern.test(mobile)) {
    document.getElementById("mobileErr").textContent = "Enter a valid 10-digit mobile number.";
    valid = false;
  }

  // Department validation
  if (dept === "") {
    document.getElementById("deptErr").textContent = "Department is required.";
    valid = false;
  }

  // Year validation
  if (year === "") {
    document.getElementById("yearErr").textContent = "Please select your year.";
    valid = false;
  }

  if (valid) {
    document.getElementById("successMsg").textContent = "Signup successful! Welcome to the Library.";
  }
}
