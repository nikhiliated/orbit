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



<!DOCTYPE HTML>

<html>
	<head>
		<title>orbit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <link rel="stylesheet" href="css/datepicker.css" type="text/css" />
  
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Wrapper -->
					<div id="wrapper">

					
						<!-- Panel -->
							<section class="panel color4-alt">
								
								<div class="inner columns divided">
									<div class="span-6-25">
									<h3 class="major">SIGN UP</h3>
										<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
											<div class="field third">
												<label for="demo-fname">First Name</label>
												<input type="text" class="validate" required autocomplete="off" name="first_name" placeholder="First Name"></input>
											</div>
											<div class="field third">
												<label for="demo-lname">Last Name</label>
												<input type="text" class="validate" required autocomplete="off" name="last_name" placeholder="Last Name"></input>
											</div>
											<div class="field third">
												<label for="demo-email">Email</label>
												<input type="text" class="validate" required autocomplete="off" name="email" placeholder="Email"></input>
											</div>

											<div class="field third">
												<label for="demo-uname">Username</label>
												<input type="text" class="validate" required autocomplete="off" name="username" placeholder="Username"></input>
											</div>

											<div class="field third">
												<label for="demo-password">Password</label>
												<input type="password" class="validate" required autocomplete="off" name="password" placeholder="Password"></input>
											</div>

											<div class="field third">
												<label for="demo-repassword">Re-Password</label>
												<input type="password" class="validate" required autocomplete="off" name="password_again" placeholder="Re-type Password"></input>
											</div>
											
											
											<div class="field third">
												<label for="gender">Gender</label>

												<input type="radio" value="male" id="male" name="gender" class="color2" />
												<label for="male">M</label>

												<input type="radio" value="female" id="female" name="gender" class="color2" />
												<label for="female">F</label>

												<input type="radio" value="transgender" id="transgender" name="gender" class="color2" />
												<label for="transgender">T</label>

											</div>
											
											<div class="field third">
												<label for="dob">Birthday</label>
											<input type="text" class="inputDate" name="dob" id="inputDate" value="06/14/2008" />
											</div>
											<div class="field third">
												<label for="mobile">Mobile</label>
												<input type="integer" class="validate" required autocomplete="off" name="mobile"  maxlength="10" placeholder="Mobile" onkeypress="return isNumberKey(event)">
											</div>
											
											
											<ul class="actions">
												<li><input type="submit" value="Create Account" class="special color2" /></li>
												<li><input type="reset" value="Reset" /></li>
												<li>
												<input type="button" onclick="location.href='index.php';" value="Go to LOGIN" />
                                                </li>
											</ul>
										</form>
									</div>
									
								</div>
							</section>

						<!-- Panel -->
							<section class="panel color2-alt">
								<div class="intro color2">
									<h2 class="major">Orbit</h2>
									<p>Welcome to Orbit. :) </p>
								</div>
								
								
							</section>

						<!-- Copyright -->
							<div class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</div>

					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/datepicker.js"></script>
    <script type="text/javascript" src="js/eye.js"></script>
    <script type="text/javascript" src="js/utils.js"></script>
    <script type="text/javascript" src="js/layout.js?ver=1.0.2"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
  <script>
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}    
</script>

	</body>
</html>


  <?php
}
else if(loggedin())
    {
echo "You are already logged in.";

    }



    

?>