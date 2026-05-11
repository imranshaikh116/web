function calculate() {
  var num1 = parseFloat(document.getElementById("num1").value);
  var num2 = parseFloat(document.getElementById("num2").value);
  var op   = document.getElementById("operation").value;
  var result;

  if (isNaN(num1) || isNaN(num2)) {
    document.getElementById("result").textContent = "Please enter valid numbers.";
    return;
  }

  switch (op) {
    case "1":
      result = num1 + num2;
      document.getElementById("result").textContent = "Result: " + num1 + " + " + num2 + " = " + result;
      break;
    case "2":
      result = num1 - num2;
      document.getElementById("result").textContent = "Result: " + num1 + " - " + num2 + " = " + result;
      break;
    case "3":
      result = num1 * num2;
      document.getElementById("result").textContent = "Result: " + num1 + " * " + num2 + " = " + result;
      break;
    case "4":
      if (num2 === 0) {
        document.getElementById("result").textContent = "Error: Division by zero!";
      } else {
        result = num1 / num2;
        document.getElementById("result").textContent = "Result: " + num1 + " / " + num2 + " = " + result.toFixed(4);
      }
      break;
    default:
      document.getElementById("result").textContent = "Invalid operation.";
  }
}
