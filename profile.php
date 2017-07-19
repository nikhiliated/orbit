<?php
error_reporting(0);
require 'connect.inc.php';
require 'core.inc.php';



?>


<!DOCTYPE html>
<html>
<title>YourProfile</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}

</style>

<link rel="icon" type="img/png" href="favicon.png" />
</head>
<body class="w3-theme-l5" onload="avatarload()">

<!-- Navbar -->
<div class="w3-top">
 <ul class="w3-navbar w3-theme-d2 w3-left-align w3-large">
  <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
    <a class="w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  </li>
  <li><a href="#" class="w3-padding-large w3-theme-d4">YOURPROFILE</a></li>
  <li><button class="w3-btn w3-btn-block w3-theme-l4" onclick="this.innerHTML=Date()">TIME NOW</button></li>
  
 
  <li class="w3-hide-small w3-right"><a href="logout.php" class="w3-padding-large w3-hover-white" title="Log out">LOGOUT <img src="img_avatar2.png" class="w3-circle" style="height:25px;width:25px" alt="Avatar"></a></li>
 </ul>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:51px">
  <ul class="w3-navbar w3-left-align w3-large w3-theme">
    <li><a class="w3-padding-large" href="#">Link 1</a></li>
    <li><a class="w3-padding-large" href="#">Link 2</a></li>
    <li><a class="w3-padding-large" href="#">Link 3</a></li>
    <li><a class="w3-padding-large" href="#">My Profile</a></li>
  </ul>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card-2 w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">

 <?php
         if (loggedin()) {
 
         echo getuserfield('first_name');
         echo " ";
         echo getuserfield('last_name');
  
}

else{
header("location: logout.php");
}
         
         
   ?>

         </h4>
         <p class="w3-center">

<img src="img_avatar7.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar" id="avatar">





         </p>
         <hr>

         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i>
  <?php
          echo "DOB: ";
         echo " ";
         echo getuserfield('dob');
   ?>
         </p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i>

<?php
         echo "Gender: ";
         echo " ";
         echo getuserfield('gender');
   ?>

         </p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i>

 <p><a href="upload_pic.php"><button class="w3-btn w3-btn-block w3-theme-l4">UPLOAD PROFILE PIC</button></a></p>

         </p>
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card-2 w3-round">
        <div class="w3-accordion w3-white">
          <button onclick="myFunction('Demo1')" class="w3-btn-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> My Groups</button>
          <div id="Demo1" class="w3-accordion-content w3-container">
            <p>KTJ Web Team</p>
          </div>
          <button onclick="myFunction('Demo2')" class="w3-btn-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> My Events</button>
          <div id="Demo2" class="w3-accordion-content w3-container">
            <p>KTJ 2017</p>
          </div>
          <button onclick="myFunction('Demo3')" class="w3-btn-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Photos</button>
          <div id="Demo3" class="w3-accordion-content w3-container">
         <div class="w3-row-padding">
         <br>
           <div class="w3-half">
             <img src="img_lights.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="img_nature.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="img_mountains.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="img_forest.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           
         </div>
          </div>
        </div>
      </div>
      <br>
      
     
      <br>
      
     
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card-2 w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity">Welcome


 <?php
         echo getuserfield('first_name');
         
   ?>
              </h6>
              <p contenteditable="true" class="w3-border w3-padding">Status: Feeling Blue</p>
              <button type="button" class="w3-btn w3-theme"><i class="fa fa-pencil"></i>  Post</button>
            </div>
          </div>
        </div>
      </div>
      
      <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
        <img src="img_avatar8.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <span class="w3-right w3-opacity">1 min</span>
        <h4>Nikhil Kumar Singh</h4><br>
        <hr class="w3-clear">
        <p>Hello  <?php echo getuserfield('first_name'); ?>,I hope you liked my first ever user login system.</p>
          <div class="w3-row-padding" style="margin:0 -16px">
            <div class="w3-half">
              <img src="img_lights.jpg" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">
            </div>
            <div class="w3-half">
              <img src="img_nature.jpg" style="width:100%" alt="Nature" class="w3-margin-bottom">
          </div>
        </div>
        <button type="button" class="w3-btn w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button>
        <button type="button" class="w3-btn w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button>
      </div>
      
      <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
        <img src="Ygritte.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <span class="w3-right w3-opacity">16 min</span>
        <h4>Ygritte</h4><br>
        <hr class="w3-clear">
        <p>You know nothing, Jon Snow.</p>
        <button type="button" class="w3-btn w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button>
        <button type="button" class="w3-btn w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button>
      </div>

      <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
        <img src="IIT_Kharagpur.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <span class="w3-right w3-opacity">32 min</span>
        <h4>IIT KGP</h4><br>
        <hr class="w3-clear">
        <p>Have you seen this?</p>
        <img src="s4.jpg" style="width:100%" class="w3-margin-bottom">
        <p>Beautiful</p>
        <button type="button" class="w3-btn w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button>
        <button type="button" class="w3-btn w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button>
      </div>
      
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
    <div class="w3-col m2">
      <div class="w3-card-2 w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Upcoming Events:</p>
          <img src="ktj.png" alt="Forest" style="width:100%;">
          <p><strong>KSHITIJ, 2017</strong></p>
          <p>Dates will be announced soon</p>
          <p><button class="w3-btn w3-btn-block w3-theme-l4">Info</button></p>
        </div>
      </div>
      <br>
      
      <div class="w3-card-2 w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Friend Request</p>
          <img src="img_avatar6.png" alt="Avatar" style="width:50%"><br>
          <span>Your Crush</span>
          <div class="w3-row w3-opacity">
            <div class="w3-half">
              <button class="w3-btn w3-green w3-btn-block w3-section" title="Accept"><i class="fa fa-check"></i></button>
            </div>
            <div class="w3-half">
              <button class="w3-btn w3-red w3-btn-block w3-section" title="Decline"><i class="fa fa-remove"></i></button>
            </div>
          </div>
        </div>
      </div>
      <br>
      
      <div class="w3-card-2 w3-round w3-white w3-padding-16 w3-center">
        <p>ADS</p>
      </div>
      <br>
      
      <div class="w3-card-2 w3-round w3-white w3-padding-32 w3-center">
        <p><i class="fa fa-bug w3-xxlarge"></i></p>
      </div>
      
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

<footer class="w3-center w3-dark-grey w3-padding-48 w3-hover-black">
  <p><a href="logout.php" title="Log out" class="w3-hover-opacity">LOG OUT</a></p>
</footer>


 
<script>

if (("<?php echo getuserfield('profile'); ?>"=='uploads/') ||  ("<?php echo getuserfield('profile'); ?>"==''))
{

  if("<?php echo getuserfield('gender'); ?>"=='male')
{
   var avatar_src = document.getElementById('avatar');
   avatar_src.src = "img_avatar7.png";
}


  else if("<?php echo getuserfield('gender'); ?>"=='female')
{
   var avatar_src = document.getElementById('avatar');
   avatar_src.src = "img_avatar5.png";
}

else
{
   var avatar_src = document.getElementById('avatar');
   avatar_src.src = "img_avatar5.png";
}
          }
          else
          {
 var avatar_src = document.getElementById('avatar');
    avatar_src.src = "<?php echo getuserfield('profile'); ?>";
          }

  


// Accordion
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme-d1";
    } else {
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className =
        x.previousElementSibling.className.replace(" w3-theme-d1", "");
    }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}




    
</script>


</body>
</html>

