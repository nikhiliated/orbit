<!DOCTYPE html>
<html>

<head>
<title>Success</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="cf.css">
<link rel="stylesheet" href="w3.css">
<script src="aj.js"></script>

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

/* Create a Parallax Effect */
 .bgimg-3 {
    opacity: 0.7;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* Third image (Contact) */
.bgimg-3 {
    background-image: url("img_parallax3.jpg");
    min-height: 400px;
}

/* Adjust the position of the parallax image text */
.w3-display-middle {bottom: 45%;}

.w3-wide {letter-spacing: 10px;}

.w3-hover-opacity {cursor: pointer;}


</style>

<link rel="icon" type="img/png" href="favicon.png" />
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <ul class="w3-navbar" id="myNavbar">
    <li><a href="#" class="w3-padding-large">+</a></li>
    <li class="w3-hide-small w3-right">
      <a href="#" class="w3-padding-large w3-hover-red"><i class="fa fa-search"></i></a>
    </li>
  </ul>
</div>



<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">


   <!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-light-grey w3-wide">CONGRATULATIONS</span>
  </div>
</div>

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64">
  <h3 class="w3-center">

 <br>All procedure completed.
  <br>Go on and <a href="index.php" >LOG IN</a>


  </h3>

  

 
</div>

<!-- Footer -->
<footer class="w3-center w3-dark-grey w3-padding-48 w3-hover-black">
  <p>Powered by <a href="http://www.nikhilme.96.lt" title="NIKHIL" target="_blank" class="w3-hover-opacity">N I K H I L</a></p>
</footer>
 

<script>

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-navbar" + " w3-card-2" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-white", "");
    }
}
</script>

</body>
</html>

