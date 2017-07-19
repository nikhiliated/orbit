<?php
error_reporting(0);
ob_start();
session_start();



$http_referer=$_SERVER['HTTP_REFERER'];

function loggedin(){

	if (isset($_SESSION['user_id'])&& !empty($_SESSION['user_id']))
	{
		return true;
	}

	else return false;
}

function getuserfield($field){



global $conn;
global $username;
global $password_hash;

$x=$_SESSION['user_id'];
$id=$x['id'];

$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';
$mysql_db='logindata';



$conn=new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);
$query="SELECT `$field` FROM `userdetails` WHERE `id`='$id'";
   if($query_run=mysqli_query($conn, $query))
   {
        while ($row=mysqli_fetch_assoc($query_run)) 
         {
            foreach ($row as $key => $val) 
            {
               //echo $val;
              return $val;
            }
         }


     }

   /*	if($query_result=mysqli_field_seek($query_run, 0))
   	{
 $conn=new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);
   		$result=$conn->query($query);
   		$row=$result->fetch_assoc();
   		
   		echo $row[$field]; 
   	}*/
   

}



?>


