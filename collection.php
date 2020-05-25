<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  text-align: center;
  padding: 32px;
}

.row {
  display: -ms-flexbox; /* IE 10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE 10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create two equal columns that sits next to each other */
.column {
  -ms-flex: 50%; /* IE 10 */
  flex: 50%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 10px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
  font-size: 18px;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
</style>
</head>
<body>

<!-- Header -->
<div class="header" id="myHeader">
  <h2>CTS Collection</h2>
  <p>Click on the buttons to change the grid view.</p>
  <button class="btn" onclick="one()">1</button>
  <button class="btn active" onclick="two()">2</button>
  <button class="btn" onclick="four()">4</button>
</div>

<!-- Photo Grid -->
<div class="row"> 
  <div class="column">
    <img src="images/im1.jpg" style="width:100%">
     <img src="images/im2.jpg" style="width:100%">
       <img src="images/im3.jpg" style="width:100%">
       <img src="images/im4.jpg" style="width:100%">
       <img src="images/im5.jpg" style="width:100%">
       <img src="images/im6.jpg" style="width:100%">
       <img src="images/im7.jpg" style="width:100%">
  </div>
    <div class="column">
    <img src="images/im8.jpg" style="width:100%">
     <img src="images/im9.jpg" style="width:100%">
       <img src="images/im10.jpg" style="width:100%">
       <img src="images/im11.jpg" style="width:100%">
       <img src="images/im12.jpg" style="width:100%">
       <img src="images/im13.jpg" style="width:100%">
       <img src="images/im14.jpg" style="width:100%">
  </div>
   <div class="column">
    <img src="images/im15.jpg" style="width:100%">
     <img src="images/im16.jpg" style="width:100%">
       <img src="images/im17.jpg" style="width:100%">
       <img src="images/im18.jpg" style="width:100%">
       <img src="images/im19.jpg" style="width:100%">
       <img src="images/im20.jpg" style="width:100%">
       <img src="images/im21.jpg" style="width:100%">
  </div>
   <div class="column">
    <img src="images/im22.jpg" style="width:100%">
     <img src="images/im23.jpg" style="width:100%">
       <img src="images/im24.jpg" style="width:100%">
       <img src="images/im25.jpg" style="width:100%">
       <img src="images/im26.jpg" style="width:100%">
       <img src="images/im27.jpg" style="width:100%">
       <img src="images/im28.jpg" style="width:100%">
  </div>
   <div class="column">
    <img src="images/im29.jpg" style="width:100%">
     <img src="images/im30.jpg" style="width:100%">
       <img src="images/im31.jpg" style="width:100%">
       <img src="images/im32.jpg" style="width:100%">
       <img src="images/im33.jpg" style="width:100%">
       <img src="images/im34.jpg" style="width:100%">
       <img src="images/im35.jpg" style="width:100%">
  </div>
   <div class="column">
    <img src="images/im36.jpg" style="width:100%">
     <img src="images/im37.jpg" style="width:100%">
       <img src="images/im38.jpg" style="width:100%">
       <img src="images/im39.jpg" style="width:100%">
       <img src="images/im40.jpg" style="width:100%">
       <img src="images/im41.jpg" style="width:100%">
       <img src="images/im42.jpg" style="width:100%">
  </div>
   <div class="column">
    <img src="images/im43.jpg" style="width:100%">
     <img src="images/im44.jpg" style="width:100%">
       <img src="images/im45.jpg" style="width:100%">
       <img src="images/im46.jpg" style="width:100%">
       <img src="images/im47.jpg" style="width:100%">
       <img src="images/im48.jpg" style="width:100%">
       <img src="images/im49.jpg" style="width:100%">
  </div>
   <div class="column">
    <img src="images/im50.jpg" style="width:100%">
     <img src="images/im51.jpg" style="width:100%">
       <img src="images/im52.jpg" style="width:100%">
       <img src="images/im53.jpg" style="width:100%">
       <img src="images/im54.jpg" style="width:100%">
       <img src="images/im55.jpg" style="width:100%">
       <img src="images/im56.jpg" style="width:100%">
  </div>
   <div class="column">
    <img src="images/im57.jpg" style="width:100%">
     <img src="images/im58.jpg" style="width:100%">
       <img src="images/im59.jpg" style="width:100%">
       <img src="images/im60.jpg" style="width:100%">
       <img src="images/im61.jpg" style="width:100%">
       <img src="images/im62.jpg" style="width:100%">
       <img src="images/im63.jpg" style="width:100%">
  </div>
   <div class="column">
    <img src="images/im64.jpg" style="width:100%">
     <img src="images/im65.jpg" style="width:100%">
       <img src="images/im66.jpg" style="width:100%">
       <img src="images/im67.jpg" style="width:100%">
       <img src="images/im68.jpg" style="width:100%">
       <img src="images/im69.jpg" style="width:100%">
       <img src="images/im70.jpg" style="width:100%">
  </div>
   <div class="column">
    <img src="images/im71.jpg" style="width:100%">
     <img src="images/im72.jpg" style="width:100%">
       <img src="images/im73.jpg" style="width:100%">
       <img src="images/im74.jpg" style="width:100%">
       <img src="images/im75.jpg" style="width:100%">
       <img src="images/im76.jpg" style="width:100%">
       <img src="images/im77.jpg" style="width:100%">
  </div>
   
   
</div>

<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// Full-width images
function one() {
    for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "100%";  // IE10
    elements[i].style.flex = "100%";
  }
}

// Two images side by side
function two() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "50%";  // IE10
    elements[i].style.flex = "50%";
  }
}

// Four images side by side
function four() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "25%";  // IE10
    elements[i].style.flex = "25%";
  }
}

// Add active class to the current button (highlight it)
var header = document.getElementById("myHeader");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</body>
</html>
