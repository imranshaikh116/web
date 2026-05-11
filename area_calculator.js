function showInputs() {
  var shape = document.getElementById("shape").value;
  var fields = document.getElementById("inputFields");
  document.getElementById("result").textContent = "";

  switch (shape) {
    case "1":
      fields.innerHTML = '<label>Length</label><input type="number" id="len" placeholder="Enter length">' +
                         '<label>Width</label><input type="number" id="wid" placeholder="Enter width">';
      break;
    case "2":
      fields.innerHTML = '<label>Base</label><input type="number" id="base" placeholder="Enter base">' +
                         '<label>Height</label><input type="number" id="height" placeholder="Enter height">';
      break;
    case "3":
      fields.innerHTML = '<label>Radius</label><input type="number" id="radius" placeholder="Enter radius">';
      break;
    default:
      fields.innerHTML = "";
  }
}

function calcArea() {
  var shape = document.getElementById("shape").value;
  var area;

  switch (shape) {
    case "1":
      var l = parseFloat(document.getElementById("len").value);
      var w = parseFloat(document.getElementById("wid").value);
      if (isNaN(l) || isNaN(w)) { showError(); return; }
      area = l * w;
      document.getElementById("result").textContent = "Area of Rectangle = " + area;
      break;
    case "2":
      var b = parseFloat(document.getElementById("base").value);
      var h = parseFloat(document.getElementById("height").value);
      if (isNaN(b) || isNaN(h)) { showError(); return; }
      area = 0.5 * b * h;
      document.getElementById("result").textContent = "Area of Triangle = " + area;
      break;
    case "3":
      var r = parseFloat(document.getElementById("radius").value);
      if (isNaN(r)) { showError(); return; }
      area = (Math.PI * r * r).toFixed(4);
      document.getElementById("result").textContent = "Area of Circle = " + area;
      break;
    default:
      document.getElementById("result").textContent = "Please select a shape.";
  }
}

function showError() {
  document.getElementById("result").textContent = "Please enter valid numbers.";
}
