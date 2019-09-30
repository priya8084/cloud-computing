<html>
<head>
 
   
    <style>
    .row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Create four equal columns that floats next to eachother */
.column {
  float: left;
  width: 20%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

/* Hide the slides by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Caption text */
.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

img.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>
    </head>
<body bgcolor="#33FFFC">
    <body>
    <?php include('header.php');?>
    <br><br><br><br>
    
  <div class="container">
  <div class="row">
  <div class="column">
  
  <img src="https://images.gr-assets.com/books/1360250193m/53628.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow">
  <br><br>
  <a href="sign up.php">READ</a>
</div>

<div class="column">
  
  <img src="https://images.gr-assets.com/books/1360058223m/1062516.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow">
  <br><br>
  <a href="https://www.goodreads.com/book/show/1062516.No_David">READ</a>
</div>
<div class="column">
  
  <img src="https://s.gr-assets.com/assets/nophoto/book/111x148-bcc042a9c91a29c1d680899eff700a03.png" onclick="openModal();currentSlide(1)" class="hover-shadow">
  <br><br>
  <a href="https://www.goodreads.com/book/show/308238.Hot_Air">READ</a>
</div>
<div class="column">
  
  <img src="https://images.gr-assets.com/books/1267291311m/1507001.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow">
  <br><br>
  <a href="https://www.goodreads.com/book/show/1507001.The_Stray_Dog">READ</a><br><br><br>
</div>
<div class="column">
  
  <img src="https://images.gr-assets.com/books/1317064748m/1415026.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow">
  <br><br>
  <a href="https://www.goodreads.com/book/show/1415026.First_the_Egg">READ</a>
</div>
<div class="column">
  
  <img src="https://images.gr-assets.com/books/1474268454m/375902.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow">
  <br><br>
  <a href="https://www.goodreads.com/book/show/375902.Inch_by_Inch">READ</a>
</div>
<div class="column">
  
  <img src="https://s.gr-assets.com/assets/nophoto/book/111x148-bcc042a9c91a29c1d680899eff700a03.png" onclick="openModal();currentSlide(1)" class="hover-shadow">
  <br><br>
  <a href="https://www.goodreads.com/book/show/235846.A_Child_s_Calendar">READ</a>
</div>
<div class="column">
  
  <img src="https://images.gr-assets.com/books/1328876188m/162720.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow">
  <br><br>
  <a href="https://www.goodreads.com/book/show/162720.Ella_Sarah_Gets_Dressed">READ</a><br><br><br><br>
</div>
<div class="column">
  <img src="https://s.gr-assets.com/assets/nophoto/book/111x148-bcc042a9c91a29c1d680899eff700a03.png" onclick="openModal();currentSlide(1)" class="hover-shadow">
  <br><br>
  <a href="https://www.goodreads.com/book/show/826582.If_You_Take_a_Mouse_to_School">READ</a>
</div>
<div class="column">
  <img src="https://images.gr-assets.com/books/1413746503m/949709.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow">
  <br><br>
  <a href="httpshttps://www.goodreads.com/book/show/949709.There_Was_an_Old_Lady_Who_Swallowed_a_Fly_Classic_Books_There_Was_an_Old_Lady_Who_Swallowed_a_Fly">READ</a>
</div>
<div class="column">
  <img src="https://s.gr-assets.com/assets/nophoto/book/111x148-bcc042a9c91a29c1d680899eff700a03.png" onclick="openModal();currentSlide(1)" class="hover-shadow">
  <br><br>
  <a href="https://www.goodreads.com/book/show/1065303.Noah_s_Ark">READ</a>
</div>
<div class="column">
  <img src="https://s.gr-assets.com/assets/nophoto/book/111x148-bcc042a9c91a29c1d680899eff700a03.png" onclick="openModal();currentSlide(1)" class="hover-shadow">
  <br><br>
  <a href="https://www.goodreads.com/book/show/1767779.Five_Little_Monkeys_Jumping_on_the_Bed">READ</a><br><br><br>
</div>
<div class="column">
  <img src="https://images.gr-assets.com/books/1328840932m/722547.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow">
  <br><br>
  <a href="https://www.goodreads.com/book/show/722547.The_Paperboy">READ</a>
</div>
<div class="column">
  <img src="https://s.gr-assets.com/assets/nophoto/book/111x148-bcc042a9c91a29c1d680899eff700a03.png" onclick="openModal();currentSlide(1)" class="hover-shadow">
  <br><br>
  <a href="https://www.goodreads.com/book/show/351530.What_Do_You_Do_With_a_Tail_Like_This">READ</a>
</div>
<div class="column">
  <img src="https://images.gr-assets.com/books/1360058152m/1918694.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow">
  <br><br>
  <a href="https://www.goodreads.com/book/show/1918694.The_Graphic_Alphabet">READ</a>
</div>
<div class="column">
  <img src="https://s.gr-assets.com/assets/nophoto/book/111x148-bcc042a9c91a29c1d680899eff700a03.png" onclick="openModal();currentSlide(1)" class="hover-shadow">
  <br><br>
  <a href="https://www.goodreads.com/book/show/1888530.Color_Zoo">READ</a>
</div>
</div>

<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">
  <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="https://images.gr-assets.com/books/1360250193m/53628.jpg" style="width:100%">
      
    </div>
    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="pic/book1.jpg" style="width:100%">
      
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="pic/book2.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="pic/book3.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="pic/book4.jpg" style="width:100%">
    </div>

    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <!-- Caption text -->
    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <!-- Thumbnail image controls -->
    <div class="column">
      <img class="demo" src="https://images.gr-assets.com/books/1360250193m/53628.jpg" onclick="currentSlide(1)" alt="Nature">
    </div>

    <div class="column">
      <img class="demo" src="pic/book1.jpg" onclick="currentSlide(1)" alt="Nature">
    </div>

    <div class="column">
      <img class="demo" src="pic/book2.jpg" onclick="currentSlide(2)" alt="Snow">
    </div>

    <div class="column">
      <img class="demo" src="pic/book3.jpg" onclick="currentSlide(3)" alt="Mountains">
    </div>

    <div class="column">
      <img class="demo" src="pic/book4.jpg" onclick="currentSlide(4)" alt="Lights">
    </div>
  </div>
</div>
</div>
</div>

</body>

</html>