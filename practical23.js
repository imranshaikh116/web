function calcMarks() {
  var name = document.getElementById("sname").value.trim();
  var s1 = parseFloat(document.getElementById("s1").value);
  var s2 = parseFloat(document.getElementById("s2").value);
  var s3 = parseFloat(document.getElementById("s3").value);
  var s4 = parseFloat(document.getElementById("s4").value);
  var s5 = parseFloat(document.getElementById("s5").value);

  var resultDiv = document.getElementById("result");

  if (name === "") {
    resultDiv.style.display = "block";
    resultDiv.textContent = "Please enter student name.";
    return;
  }

  if (isNaN(s1) || isNaN(s2) || isNaN(s3) || isNaN(s4) || isNaN(s5)) {
    resultDiv.style.display = "block";
    resultDiv.textContent = "Please enter marks for all 5 subjects.";
    return;
  }

  var total = s1 + s2 + s3 + s4 + s5;
  var percentage = (total / 500) * 100;
  var grade;

  if (percentage >= 75) {
    grade = "A";
  } else if (percentage >= 60) {
    grade = "B";
  } else if (percentage >= 50) {
    grade = "C";
  } else {
    grade = "F (Fail)";
  }

  resultDiv.style.display = "block";
  resultDiv.innerHTML =
    "<b>Student Name:</b> " + name + "<br>" +
    "<b>Total Marks:</b> " + total + " / 500<br>" +
    "<b>Percentage:</b> " + percentage.toFixed(2) + "%<br>" +
    "<b>Grade:</b> " + grade;
}
