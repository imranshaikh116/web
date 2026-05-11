// Correct answers
var answers = {
  q1: "a",
  q2: "b",
  q3: "b",
  q4: "b",
  q5: "a",
  q6: "c",
  q7: "b",
  q8: "c",
  q9: "a",
  q10: "c"
};

function submitQuiz() {
  var score = 0;
  var total = 10;

  for (var q in answers) {
    var selected = document.querySelector('input[name="' + q + '"]:checked');
    if (selected && selected.value === answers[q]) {
      score++;
    }
  }

  document.getElementById("scoreDisplay").textContent =
    "Your Score: " + score + " / " + total;
}
