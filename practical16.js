function showFields() {
  var shape = document.getElementById("shape").value;
  var fields = document.getElementById("fields");
  document.getElementById("result").textContent = "";

  switch (shape) {
    case "rectangle":
      fields.innerHTML = '<label>Length:</label><input type="number" id="len" placeholder="Enter length">' +
                         '<label>Width:</label><input type="number" id="wid" placeholder="Enter width">';
      break;
    case "triangle":
      fields.innerHTML = '<label>Base:</label><input type="number" id="base" placeholder="Enter base">' +
                         '<label>Height:</label><input type="number" id="height" placeholder="Enter height">';
      break;
    case "circle":
      fields.innerHTML = '<label>Radius:</label><input type="number" id="radius" placeholder="Enter radius">';
      break;
    default:
      fields.innerHTML = "";
  }
}

function calculateArea() {
  var shape = document.getElementById("shape").value;
  var area;

  switch (shape) {
    case "rectangle":
      var len = parseFloat(document.getElementById("len").value);
      var wid = parseFloat(document.getElementById("wid").value);
      if (isNaN(len) || isNaN(wid)) { alert("Enter valid values."); return; }
      area = len * wid;
      document.getElementById("result").textContent = "Area of Rectangle = " + area + " sq. units";
      break;

    case "triangle":
      var base = parseFloat(document.getElementById("base").value);
      var height = parseFloat(document.getElementById("height").value);
      if (isNaN(base) || isNaN(height)) { alert("Enter valid values."); return; }
      area = 0.5 * base * height;
      document.getElementById("result").textContent = "Area of Triangle = " + area + " sq. units";
      break;

    case "circle":
      var radius = parseFloat(document.getElementById("radius").value);
      if (isNaN(radius)) { alert("Enter valid value."); return; }
      area = (Math.PI * radius * radius).toFixed(4);
      document.getElementById("result").textContent = "Area of Circle = " + area + " sq. units";
      break;

    default:
      document.getElementById("result").textContent = "Please select a shape.";
  }
}
