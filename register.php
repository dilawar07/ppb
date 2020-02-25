<head>

<style>
body{
	
top:0px;	
	
}
</style>
</head>
<?php
require 'config.php';

$g_title = BLOG_NAME . ' - Register';
$g_page = 'register';

include_once("header.php");

include_once("nav.php");


//require 'menu.php';
require('databaseconnection.php');

ob_start();
//session_start();
$tbl_name="members"; // Table name if you wish to use a variable

	



$errors = array();

if(isset($_SESSION['username'])){
$message = 'You are already logged in.';
echo "<script type='text/javascript'>
alert('$message');
</script>";
header("Refresh:0; url=index.php", true, 303);
}

?>

      

<!-- Login Modal -->


<?php

//if (!isset($_POST['mypassword']) || count($errors) > 0)
{
?>




<div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Register.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">



<form name="form1" method="post" action="register.php">
<div class="w3-section">
        <label>Username</label>
          
<input name="myusername" placeholder="Enter username" class="w3-input w3-border" type="text" id="myusername"   alt="Username" >
</div>
<div class="w3-section">
        <label>E-mail</label>
<input name="myemail" class="w3-input w3-border" placeholder="Enter e-mail" type="text" id="myemail"  >
</div>
<div class="w3-section">
        <label>Password</label>
<input name="mypassword" placeholder="Enter password" class="w3-input w3-border" type="password" id="mypassword" >
</div>
<div class="w3-section">
        <label>Verify Password</label>
<input name="mypassword2" placeholder="Enter verify password" class="w3-input w3-border" type="password" id="mypassword2"><br>
</div>
<input type="submit" name="Submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" value="Register"></td>
</form>
         </div>
 </center>
<?php
global $myusername;
global $myemail;
global $mypassword;
global $mypassword2;



}
if (isset($_POST['mypassword']))
{
  $myusername=$_POST['myusername'];
$myemail=$_POST['myemail'];
$mypassword=$_POST['mypassword'];
$mypassword2=$_POST['mypassword2'];


if (empty($myusername)) { array_push($errors, "Username required!"); }
if (empty($myemail)) { array_push($errors, "Email is required!"); }
if (empty($mypassword)) { array_push($errors, "Password required!"); }
if (empty($mypassword2)) { array_push($errors, "Please confirm password!"); }

if (!filter_var($myemail, FILTER_VALIDATE_EMAIL)) { array_push($errors, "Email is not valid!"); }
if ($mypassword != $mypassword2) { array_push($errors, "The two passwords do not match!"); }

$user_check_query = "SELECT username, email FROM ppbacc WHERE username=:myusername OR email=:myemail LIMIT 1";
$statement = $db->prepare($user_check_query);
$statement->bindParam(':myusername',$myusername);
$statement->bindParam(':myemail',$myemail);
$statement->execute() or die(print_r($statement->errorInfo(), true));
$user = $statement->fetch();

if ($user) { // if user exists, which field?
if ($user['username'] == $myusername) {array_push($errors, "Username already exists!");}
if ($user['email'] == $myemail) {array_push($errors, "Email already exists!");}
}

if (count($errors) == 0) {
// salting adds uniqueness to each entry
$salt=uniqid() ;
$salted_password=$salt.$mypassword;
$encrypted_password = hash("sha512", $salted_password);

$insert_sql="insert into ppbacc (username,password,salt,email) values (:myusername,:encrypted_password,:salt,:myemail)";
$statement = $db->prepare($insert_sql);
$statement->bindParam(':myusername',$myusername);
$statement->bindParam(':encrypted_password',$encrypted_password);
$statement->bindParam(':salt',$salt);
$statement->bindParam(':myemail',$myemail);
$statement->execute() or die(print_r("User already registered. Please login.", true));
$pass = $statement->fetch();

$message = 'New User Registered. Login now.';
echo "<script type='text/javascript'>
alert('$message');
</script>";
header("Refresh:0; url=main_login.php", true, 303);
}
else{
foreach ($errors as $error) {
echo "<center><div style='align:center;color:red;'><p>$error</p></div></center>";
}
}

}
?>

      
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<?php

ob_end_flush();
require 'footer.php';
?>

