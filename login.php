<?php
error_reporting( E_ALL );
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$usr=mysql_real_escape_string(trim($_POST['username']));
$pwd=mysql_real_escape_string(trim($_POST['password']));
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
if (isset($_POST['remember']) && $_POST['remember'] == 'on') {
    /*
     * Set Cookie from here for one hour
     * */
    setcookie("username", $usr, time()+(60*60*1));
    setcookie("password", $pwd, time()+(60*60*1));  /* expire in 1 hour */
  } else {
    /**
     * Following code will unset the cookie
     * it set cookie 1 sec back to current Unix time
     * so that it will invalid
     * */
    //setcookie("username", $username, time()-1);
    //setcookie("password", $password, time()-1);
  }





$con = mysql_connect("localhost", "root1", "oec@123") or die('Error Connecting to mysql server');
// To protect MySQL injection for Security purpose
$username = stripslashes($usr);
$password = stripslashes($pwd);
$username = mysql_real_escape_string($usr);
$password = mysql_real_escape_string($pwd);
// Selecting Database
$db=mysql_select_db('rms',$con);
 
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select username, password,admin_level from login where password='$pwd' AND username='$usr'", $con) or die('Error querying database');
$rows = mysql_num_rows($query);

  
if ($rows === 1){ 
$row_array = mysql_fetch_assoc($query); 
if ($row_array['admin_level'] == 1){
   header("location: admin.php"); // Redirecting To Other Page
}

elseif ($row_array['admin_level']==2){
   header("location: branchadmin.php");
}
elseif($row_array['admin_level']==3){
   header("location: accountant.php");
}
elseif($row_array['admin_level']==4){
  header("location: reporter.php");
}
else{
  echo  'Username or Password is invalid';
}
}
mysql_close($con); // Closing Connection
}
}
?>