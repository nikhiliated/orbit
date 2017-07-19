<?php
error_reporting(0);
require 'core.inc.php';
require 'connect.inc.php';

if (!loggedin())
 {


if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['password_again'])  && isset($_POST['dob'])   && isset($_POST['mobile'])   && isset($_POST['gender'])) 


{

$username=$_POST['username'];
$password=$_POST['password'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$password_again=$_POST['password_again'];
$password_hash=md5($password);
$dob=$_POST['dob'];
$mobile=$_POST['mobile'];
$gender=$_POST['gender'];

if (!empty($username) && !empty($password) && !empty($first_name) && !empty($last_name) &&
 !empty($email) && !empty($password_again)  && !empty($dob) &&  !empty($mobile)  &&  !empty($gender) ) 
    {    

        if ($password!=$password_again) {
            echo "Passwords do not match.";
        }


        else{

$conn=new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);
$query="SELECT `username` FROM `userdetails` WHERE `username`='$username'";
$query_run=mysqli_query($conn,$query);

if (mysqli_num_rows($query_run)==1) 
    {
    echo "The username ".$username." already exists.";
    }
 else  {

    $con1=mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db);
  


$query="INSERT INTO `userdetails` VALUES (
'',
'".mysqli_real_escape_string($con1, $first_name)."',
'".mysqli_real_escape_string($con1, $last_name)."',
'".mysqli_real_escape_string($con1, $username)."',
'".mysqli_real_escape_string($con1, $email)."',
'".mysqli_real_escape_string($con1, $password_hash)."',
'".mysqli_real_escape_string($con1, $dob)."',
'".mysqli_real_escape_string($con1, $gender)."',
'".mysqli_real_escape_string($con1, $mobile)."',
''


)";

if($query_run=mysqli_query($conn, $query))
      {
header("Location: success.php");
      }else
        {
            echo " Sorry, We couldn\'t connect you now. Try later";
        }

       }

           
        }
    } else
            {
        echo "Please fill all data.";
            }

    
}


    ?>


    <!DOCTYPE html>
<html>
<head>
<title>YourSpace</title>
   
<link rel="icon" type="img/png" href="favicon.png" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="cf.css">
<link rel="stylesheet" href="w3.css">
<script src="aj.js"></script>
</head>
<body>

<div id="container col s10">
<div class="col s10">
  <div class="card">
  <div class="row"></div>
    <div class="card-content black-text">
      <div class="bgimg-1 w3-opacity w3-display-container">
  <div class="w3-display-middle">
   </br></br></br></br>

    <span class="w3-center w3-padding-xlarge w3-black w3-xlarge w3-wide w3-animate-opacity">CREATE YOURSPACE</span>
  </div>
</div>
    </div>

<div class="row">

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="input-field col s6">
        <br><input type="text" class="validate" required autocomplete="off" name="username" placeholder="Username"></input>
          </div>
      
        <div class="input-field col s6">
        <br><input type="password" class="validate" required autocomplete="off" name="password" placeholder="Password"></input>

        </div>
    </div>
    <div class="row">
        
        <div class="input-field col s6">
        <br><input type="password" class="validate" required autocomplete="off" name="password_again" placeholder="Re-type Password"></input>
            </div>

      <div class="input-field col s6">
        <br><input type="text" class="validate" required autocomplete="off" name="first_name" placeholder="First Name"></input>

      </div>
             
    </div>

    <div class="row">
        <div class="input-field col s6">
        <br><input type="text" class="validate" required autocomplete="off" name="last_name" placeholder="Last Name"></input>
          </div>
        <div class="input-field col s6">
        
        <br><input type="text" class="validate" required autocomplete="off" name="email" placeholder="Email"></input>

        </div>
    </div>

    <div class="row">
        <div class="input-field col s6">
        <br><input type="date" required class="datepicker" name="dob" max="2017-01-01" placeholder="DOB"></input>
            </div>

        <div class="input-field col s6">
         
        <br><input type="number" class="validate" required autocomplete="off" name="mobile"  length="10" placeholder="Mobile">


        </div>
        <div class="input-field col s6">
       
         GENDER:<br><input id="male"  type="radio" name="gender" value="male" checked>
    <label>Male</label>
    <br>
    <input id="female"  type="radio" name="gender" value="female">
    <label>Female</label><br>

        </div>

    </div>
      
     <div class="row">
        <div class="input-field col s12">

        <input class="btn waves-effect waves-light" type="submit" value="Submit"></input><br>
         </div>
    </div>

    </form>
    </div>
</div>
</div>
</div>

    </body>
</html>


    <?php
}
else if(loggedin())
    {
echo "You are already logged in.";

    }



    

?>