function submitQuiz() {
  var answers = {
    q1: "b",
    q2: "c",
    q3: "c",
    q4: "b",
    q5: "c",
    q6: "c",
    q7: "b",
    q8: "c",
    q9: "c",
    q10: "b"
  };

  var score = 0;

  for (var q in answers) {
    var selected = document.querySelector('input[name="' + q + '"]:checked');
    if (selected && selected.value === answers[q]) {
      score++;
    }
  }

  var box = document.getElementById("scoreBox");
  box.style.display = "block";
  box.textContent = "Your Score: " + score + " / 10";

  if (score >= 8) {
    box.style.color = "green";
  } else if (score >= 5) {
    box.style.color = "#e65100";
  } else {
    box.style.color = "red";
  }
}
