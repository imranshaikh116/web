function calcResult() {
  var name = document.getElementById("sname").value.trim();
  var marks = [
    parseFloat(document.getElementById("s1").value),
    parseFloat(document.getElementById("s2").value),
    parseFloat(document.getElementById("s3").value),
    parseFloat(document.getElementById("s4").value),
    parseFloat(document.getElementById("s5").value)
  ];

  if (name === "") { alert("Enter student name."); return; }
  for (var i = 0; i < marks.length; i++) {
    if (isNaN(marks[i])) { alert("Enter all subject marks."); return; }
  }

  var total = marks.reduce(function(a, b) { return a + b; }, 0);
  var percentage = (total / 500) * 100;
  var grade;

  if (percentage >= 75) grade = "A";
  else if (percentage >= 60) grade = "B";
  else if (percentage >= 50) grade = "C";
  else grade = "Fail";

  var box = document.getElementById("result");
  box.style.display = "block";
  box.innerHTML =
    "<b>Name:</b> " + name + "<br>" +
    "<b>Total:</b> " + total + " / 500<br>" +
    "<b>Percentage:</b> " + percentage.toFixed(2) + "%<br>" +
    "<b>Grade:</b> " + grade;
}
