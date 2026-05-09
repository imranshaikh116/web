function calculate() {
  var num1 = parseFloat(document.getElementById("num1").value);
  var num2 = parseFloat(document.getElementById("num2").value);
  var operation = document.getElementById("operation").value;
  var result;

  if (isNaN(num1) || isNaN(num2)) {
    document.getElementById("result").textContent = "Please enter both numbers.";
    return;
  }

  switch (operation) {
    case "add":
      result = num1 + num2;
      document.getElementById("result").textContent = "Result: " + num1 + " + " + num2 + " = " + result;
      break;

    case "subtract":
      result = num1 - num2;
      document.getElementById("result").textContent = "Result: " + num1 + " - " + num2 + " = " + result;
      break;

    case "multiply":
      result = num1 * num2;
      document.getElementById("result").textContent = "Result: " + num1 + " × " + num2 + " = " + result;
      break;

    case "divide":
      if (num2 === 0) {
        document.getElementById("result").textContent = "Error: Division by zero is not allowed.";
      } else {
        result = (num1 / num2).toFixed(4);
        document.getElementById("result").textContent = "Result: " + num1 + " ÷ " + num2 + " = " + result;
      }
      break;

    default:
      document.getElementById("result").textContent = "Invalid operation.";
  }
}
