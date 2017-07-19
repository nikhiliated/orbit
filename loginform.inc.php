<?php
error_reporting(0);

if (isset($_POST['username'])&& isset($_POST['password']))
 {
  $username=$_POST['username'];
  $password=$_POST['password'];
  $password_hash=md5($password);

  if (!empty($username)&&!empty($password)) 
  {

    $mysql_host='localhost';
        $mysql_user='root';
        $mysql_pass='';
        $mysql_db='logindata';

        $con1=mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db);
        $conn=new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);
    $query="SELECT `id` FROM `userdetails` WHERE `username`='".mysqli_real_escape_string($con1, $username)."' AND `password`='".mysqli_real_escape_string($con1, $password_hash)."'";
    if ($query_run=mysqli_query($conn,$query))
     {
      $conn=new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);
      
       $query_num_rows=mysqli_num_rows($query_run);
           if ($query_num_rows==0) {
              if ($username=='' || $password=='') {
                echo "<br>Enter details";
              }
           echo "<br>Invalid username/password combination";
                             }
           else if($query_num_rows==1)
                          {
          $user_id=mysqli_fetch_assoc($query_run);
          $id=$user_id['id'];
         $_SESSION['user_id']=$user_id;
          header('Location: profile.php'); 
                          }
    }

  }   else{
    echo "<br>You must supply username and password";
    
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
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Wrapper -->
					<div id="wrapper">

              	<!-- Panel -->
							<section class="panel color2-alt container">
								
								<div class="inner columns aligned">
									<div class="span-2-75">

										<h2 class="major">ORBIT</h2><hr>
										<h3>Welcome to Orbit.</h3>
										<pre><code>i = 0;

while (!deck.isInOrder()) {
    print 'Iteration ' + (i++);
    deck.shuffle();
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
                                        <a href="https://www.nikhiliated.com" class="button special color2" target="_blank">Visit Developer</a>

									</div>
									
									
						
									
									<div class="span-4-5">
										<h3 class="major">SIGN IN</h3>
										<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
											<div class="field">
												<label for="demo-name">Username</label>
												<input type="text" name="username" id="demo-name" placeholder="Username" />
											</div>
											

											<div class="field">
												<label for="demo-password">Password</label>
												<input type="Password" name="password" id="demo-password" placeholder="Password" />
											</div>
											
											
											<div class="field">
												<input type="checkbox" id="demo-human" name="demo-human" class="color2" unchecked />
												<label for="demo-human">Not a robot</label>
											</div>
											<div class="field">
											
												<input type="submit" value="Login" class="special color2" />
												<input type="reset" value="Reset" />
												<a href="forgotpassword.php" class="button md-trigger md-setperspective" data-modal="modal-18">Change Password</a>
												<a href="register.php" class="button">Don't have an account?</a>
											</div>

											
										</form>
										

									</div>
								</div>
							</section>
	




						



						<!-- Copyright -->
							<div class="copyright">&copy; <a href="https://www.nikhiliated.com" target="_blank">Nikhil Singh</a>.</div>

					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/main.js"></script>
			<script type="text/javascript" src="js/bootstrap.min.js"></script>

			

	</body>
</html>