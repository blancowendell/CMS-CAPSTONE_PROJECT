<html>
<body>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="leaders.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<center>
<h2>Our International Leaders</h2>
<div id="myBtnContainer">
  <button class="pindot active" onclick="filterSelection('all')"> Show all</button>
  <button class="pindot" onclick="filterSelection('nature')"> Executive Officers</button>
  <button class="pindot" onclick="filterSelection('cars')"> Members</button>
  <button class="pindot" onclick="filterSelection('people')"> Benifactors</button>
</div>
</center>
<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column nature">
    <div class="laman">
      <img src="uploads/mem1.webp" alt="Mountains" style="width:100%">
      <h4>Mountains</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column nature">
    <div class="laman">
      <img src="uploads/mem2.webp" alt="Lights" style="width:100%">
      <h4>Lights</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column nature">
    <div class="laman">
      <img src="uploads/mem7.png" alt="Nature" style="width:100%">
      <h4>Forest</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>

  <div class="column cars">
    <div class="laman">
      <img src="uploads/mem4.jpg" alt="Car" style="width:100%">
      <h4>Kristian Frialde</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column cars">
    <div class="laman">
      <img src="uploads/mem5.jpg" alt="Car" style="width:100%">
      <h4>Wendell Blanco</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column cars">
    <div class="laman">
      <img src="uploads/mem6.jpg" alt="Car" style="width:100%">
      <h4>John Louis Sibunga</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>

  <div class="column people">
    <div class="laman">
      <img src="uploads/mayor.jpg" alt="People" style="width:100%">
      <h4>Art Joseph Mercado</h4>
      <p>Present Mayor of San pedro city laguna </p>
    </div>
  </div>
  <div class="column people">
    <div class="laman">
      <img src="uploads/1683798540_alvic.jpg" alt="People" style="width:100%">
      <h4>Alvic Berroya</h4>
      <p>President of Sanpedro Lions Club</p>
    </div>
  </div>
  <div class="column people">
    <div class="laman">
      <img src="uploads/pongs.jpg" alt="People" style="width:100%">
      <h4>Pong Ravelo</h4>
      <p>Administrator</p>
    </div>
  </div>
<!-- END GRID -->
</div>
<script>
    filterSelection("all") // Execute the function and show all columns
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

// Show filtered elements
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
</body>
</html>
<style>
  
  * {
  box-sizing: border-box;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 8px -16px;
}

/* Add padding BETWEEN each column (if you want) */
.row,
.row > .column {
  padding: 20px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  display: none; /* Hide columns by default */
}

/* Clear floats after rows */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.laman {
  background-color: white;
  padding: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.pindot {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: rgb(255,193,7);
  cursor: pointer;
}

/* Add a grey background color on mouse-over */
.pindot:hover {
  background-color:  rgb(13,110,253);
}

/* Add a dark background color to the active button */
.pindot.active {
  background-color: rgb(13,110,253);
   color: white;
}

</style>