
<?php

error_reporting(0);
require 'core.inc.php';
require 'connect.inc.php';


if (!loggedin()) {


if (isset($_POST['username']) && isset($_POST['password_new']) && isset($_POST['password_new_re']) && isset($_POST['dob'])) 


{

$mysql_host = "localhost";
$mysql_user = "root";
$mysql_pass = '';
$mysql_db = "logindata";



// Create connection
$conn = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$username=$_POST['username'];
$dob=$_POST['dob'];
$password_new=$_POST['password_new'];
$password_new_re=$_POST['password_new_re'];
$password_set=md5($_POST['password_new']);

if ($password_new!=$password_new_re) {
  echo "Passwords do not match";
} else {
$sql = "UPDATE userdetails SET `password`='$password_set' WHERE username='$username' AND dob='$dob'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
  echo " Wrong credentials ";
    echo " : Error updating record: " . $conn->error;
       } 
     }

     
}
}
$conn->close();
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
									<h3 class="major">CHANGE PASSWORD</h3>
										<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
											
											

											<div class="field half">
												<label for="username">Username</label>
												<input id="icon_prefix" type="text" class="validate" name="username" required autocomplete="off" length="12" placeholder="Username">
											</div>

											<div class="field half">
												<label for="dob">Birthday</label>
											<input type="text" class="inputDate" name="dob" id="inputDate" value="06/14/2008" />
											</div>
											

											<div class="field half">
												<label for="password_new">Password</label>
												<input id="icon_prefix" type="password" class="validate" name="password_new" required autocomplete="off" length="12" placeholder="Password">
											</div>

											<div class="field half">
												<label for="password_new_re">Re-Password</label>
												<input id="icon_prefix" type="password" class="validate" name="password_new_re" required autocomplete="off" length="12" placeholder="Re-type Password">
											</div>
											
											
											<ul class="actions">
												<li><input type="submit" value="CHANGE" class="special color2" /></li>
												<li><input type="reset" value="Reset" /></li>
												<li>
												<input type="button" onclick="location.href='index.php';" value="Go to LOGIN" />
                                                </li>
                                                <li>
												<input type="button" value="wait" />
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
