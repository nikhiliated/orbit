<!DOCTYPE html>
<html>

<head>
<title>Thanks</title>

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
     <span class="w3-xxlarge w3-text-light-grey w3-wide">THANK YOU :D</span>
  </div>
</div>

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64">
  <h3 class="w3-center">


<?php
error_reporting(0);

$conn_error='Couldn\'t connect';
$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';
$mysql_db='logindata';

$conn=new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);
if ($conn->connect_error) {
  die("Connection failed:".$conn->connect_error);
  
}

//echo "Connected successfully";
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['comment'])) 

{

$name=$_POST['name'];
$email=$_POST['email'];
$comment=$_POST['comment'];

if (!empty($name) && !empty($email) && !empty($comment)) 
    {    

$conn=new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);
$query="SELECT `name` FROM `messages` WHERE `name`='$name'";
$con1=mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db);
  
$query="INSERT INTO `messages` VALUES (
'',
'".mysqli_real_escape_string($con1, $name)."',
'".mysqli_real_escape_string($con1, $email)."',
'".mysqli_real_escape_string($con1, $comment)."'

)";

if($query_run=mysqli_query($conn, $query))
      {
echo "Your message received. :D <br> I will get to you soon.";
      }else
        {
            echo " Sorry, message not sent. Try later";
        }
         
    } else
            {
  echo "You may need to feed something before pressing the SEND button.";
            }
}

?>








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

