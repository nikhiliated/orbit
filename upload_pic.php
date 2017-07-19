
<?php
error_reporting(0);
require 'core.inc.php';
require 'connect.inc.php';

if (loggedin()) {


if (isset($_POST['username'])) 


{

$username=$_POST['username'];
$profile=$_POST['profile'];


if (!empty($username)) 
    {    

$conn=new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);
$query="SELECT `username` FROM `userdetails` WHERE `username`='$username'";
$query_run=mysqli_query($conn,$query);

if (mysqli_num_rows($query_run)==1) 
    {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["profile"]["name"]);
   
    $con1=mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db);
  
$query1="UPDATE userdetails SET `profile`='$target_file'  WHERE username='$username'";

if($query_run=mysqli_query($conn, $query1))
      {

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["profile"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["profile"]["tmp_name"]);
    if($check !== false) {
        echo "<br>File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "<br>File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "<br>Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["profile"]["size"] > 2097152) {
    echo "<br>Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "<br>Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<br>Sorry, your file was not uploaded.";
    header("Location: success.php");
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["profile"]["tmp_name"], $target_file)) {
        echo "<br>The file ". basename( $_FILES["profile"]["name"]). " has been uploaded.";
       header("Location: success.php");
    } else {
        echo "<br>Sorry, there was an error uploading your file.";
    }
}


      }else
        {
            echo "<br> Sorry, We couldn\'t update details as of now. Try later";
        }
    }
 else  {

    echo "<br>Username does not exist. You may prefer registering first.";

       }

           
        
    } else
            {
        echo "<br>Please fill all data.";
            }

    
}
}
else
{

    echo "<br>You are not logged in. <a href='index.php'>Log in</a>";
}

    ?>


   <!DOCTYPE html>
<html>
<title>YourSpace</title>




<head>
	<style type="text/css">


	</style>

    <link rel="icon" type="img/png" href="favicon.png" />


</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="cf.css">
<link rel="stylesheet" href="w3.css">
<script src="aj.js"></script>


<body>

<div id="container col s10">
<div class="col s10">
  <div class="card">
  <div class="row"></div>
   
    <div class="bgimg-1 w3-opacity w3-display-container">
  <div class="w3-display-middle">
  

  </div>
</div>

<div class="row">
<span class="w3-center w3-padding-xlarge w3-black w3-xlarge w3-wide w3-animate-opacity">YOURFACE?</span>
  <div class="row"></div>
    <div class="row"></div>
      <div class="row"></div>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="input-field col s6">
         Username: <br><input type="text" name="username" placeholder="Provide your username for verification"></input><br>
           </div>
      
        
    </div>
    
    
     <div class="file-field input-field">
      <div class="btn waves-effect waves-light">
     	<span>+</span>
        <input type="file" name="profile">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Upload your photo(optional). Max size 2MB." name="profile_name">
      </div>
    </div>
<button class="btn waves-effect waves-light" type="submit" value="Submit">Submit</button><br>
    </form>

    </body>
</html>


    


