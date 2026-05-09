// 1. Change Text
function changeText() {
  document.getElementById("textDemo").textContent = "Text has been changed using DOM!";
}

// 2. Change Color
var colors = ["#ffcdd2", "#c8e6c9", "#bbdefb", "#fff9c4", "#f8bbd0"];
var colorIndex = 0;
function changeColor() {
  document.getElementById("colorBox").style.backgroundColor = colors[colorIndex % colors.length];
  colorIndex++;
}

// 3. Add Item
var itemCount = 3;
function addItem() {
  var li = document.createElement("li");
  li.textContent = "Item " + itemCount;
  document.getElementById("myList").appendChild(li);
  itemCount++;
}

// 4. Toggle Visibility
function toggleVisibility() {
  var elem = document.getElementById("toggleText");
  if (elem.style.display === "none") {
    elem.style.display = "block";
  } else {
    elem.style.display = "none";
  }
}

// 5. Display Input
function displayInput() {
  var value = document.getElementById("userInput").value;
  if (value.trim() === "") {
    document.getElementById("inputOutput").textContent = "Please type something!";
  } else {
    document.getElementById("inputOutput").textContent = "You typed: " + value;
  }
}
