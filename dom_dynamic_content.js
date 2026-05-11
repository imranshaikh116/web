var itemCount = 2;

function changeText() {
  document.getElementById("textBox").textContent = "Text has been changed using DOM!";
}

function changeStyle() {
  var box = document.getElementById("styleBox");
  box.style.color = "white";
  box.style.background = "#e74c3c";
  box.style.padding = "6px 10px";
  box.style.borderRadius = "4px";
}

function addItem() {
  itemCount++;
  var li = document.createElement("li");
  li.textContent = "Item " + itemCount;
  document.getElementById("itemList").appendChild(li);
}

function removeElem() {
  var el = document.getElementById("removeBox");
  if (el) {
    el.remove();
  }
}

function showDateTime() {
  var now = new Date();
  document.getElementById("dateTime").textContent = now.toLocaleString();
}
