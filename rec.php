
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/json2html/1.3.0/json2html.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="front.css">
    <script type="text/javascript">
var el = document.getElementById("searchBtn");
         if(el){
  el.addEventListener('click', myFunctionVar, false);
}
async function myFunctionVar() {
    var bname = (document.getElementById("bookName").value);
    let url = 'https://my-json-server.typicode.com/typicode/demo/db'
    let obj = [await (await fetch(url)).json()];
    let rec = [{'Book_Title': 'The Hunger Games (The Hunger Games, #1)', 'Recommendations': ['Catching Fire (The Hunger Games, #2)', 
                'Mockingjay (The Hunger Games, #3)', 
                'The Hunger Games Trilogy Boxset (The Hunger Games, #1-3)', 
                'Gregor the Overlander (Underland Chronicles, #1)', 
                'Gregor and the Code of Claw (Underland Chronicles, #5)', 
                'Gregor and the Curse of the Warmbloods (Underland Chronicles, #3)', 
                'Gregor and the Prophecy of Bane (Underland Chronicles, #2)', 
                'Gregor and the Marks of Secret (Underland Chronicles, #4)', 
                "Good to Great: Why Some Companies Make the Leap... and Others Don't", 
                'The Program (The Program, #1)']}];
        var col = [];
        for (var i = 0; i < rec.length; i++) {
            for (var key in rec[i]) {
                if (col.indexOf(key) === -1) {
                    col.push(key);
                }
            }
        }
        // CREATE DYNAMIC TABLE.
        var table = document.createElement("table");
        var tr = table.insertRow(-1);                   // TABLE ROW.
        for (var i = 1; i < col.length; i++) {
            var th = document.createElement("th");      // TABLE HEADER.
            th.innerHTML = col[i];
            tr.appendChild(th);
        }
        for (var i = 0; i < rec.length; i++) {
            tr = table.insertRow(-1);
            for (var j = 1; j < col.length; j++) {
                var tabCell = tr.insertCell(-1);
                var c = rec[i][col[j]]
                var argsString = Array.prototype.join.call(c, "<br />");
                tabCell.innerHTML = argsString;
            }
        }
        table.style.textAlign = '-webkit-center';
        var divContainer = document.getElementById("showData");
        divContainer.innerHTML = "";
        divContainer.appendChild(table);
     }
        </script>

</head>
<body bgcolor="#33FFFC">
<div class="navbar">
    <a href="front.php"> HOME </a>
       <div class="dropdown">
      <button class="dropbtn">CATEGORY<i class="fa fa-caret-down"></i>
      </button>
  <div class="dropdown-content">
  <a href="kids.php">Kids</a>
  <a href="#">Crime</a>
  <a href="#">Education</a>
  <a href="#">Romance</a>
  </div>
</div>
<div class="navbar1">
    <a href = "logoutt.php">LOGOUT</a>
    </div>
</div>
<h1 style="text-align:center">SUPER BOOK STORE</h1>
<br><br>
<div class="search-container">
       <input type="string" id="bookName">
       <input value="RECOMMEND" type="button" id="searchBtn" onclick="myFunctionVar();"> 
       <div id="showData"></div>
      </div>
      </body>