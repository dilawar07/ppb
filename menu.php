<?php
  require_once 'autoload.php';
  if (!isset($g_page)) {
      $g_page = '';
  }

	//use PhpRbac\Rbac;
	//$rbac = new Rbac();
	//$role_id = $rbac->Roles->returnId('admin');

session_start();

if (!isset($_SESSION['username']) || $_SESSION['username'] == '')

{
//	header(location:index.php);Z
  echo"<a href='index.php' class='w3-bar-item w3-button w3-padding w3-hover-red'><i class='fa fa-home fa-fw w3-margin-right'></i>HOME</a>
    <a href='index.php#about' class='w3-bar-item w3-button w3-padding w3-hover-red'><i class='fa fa-user fa-fw w3-margin-right'></i>ABOUT</a>
    <a href='index.php#accounts' class='w3-bar-item w3-button w3-padding w3-hover-red'><i class='fa fa-th-large fa-fw w3-margin-right'></i>ACCOUNTS</a>
    <a href='index.php#contact' class='w3-bar-item w3-button w3-padding w3-hover-red'><i class='fa fa-envelope fa-fw w3-margin-right'></i>CONTACT</a>
     <a href='main_login.php' class='w3-bar-item w3-button w3-padding w3-hover-red'><i class='fa fa-sign-in fa-fw w3-margin-right'></i>LOGIN</a>
      <a href='register.php' class='w3-bar-item w3-button w3-padding w3-hover-red'><i class='fa fa-user fa-fw w3-margin-right'></i>REGISTER</a>";

}

elseif(isset($_SESSION['username']) and $_SESSION['username'] == 'admin')
	{
echo"<a href='logout.php' class='w3-bar-item w3-button w3-right'><i class='fa fa-sign-out'></i>Logout</a>";
echo"<a href='accounts.php' class='w3-bar-item w3-button w3-right'><i class='fa fa-edit'></i>Accounts</a>";
echo"<a href='create.php' class='w3-bar-item w3-button w3-right'><i class='fa fa-edit'></i>Post an Account</a>";

echo"<a href='admin.php' class='w3-bar-item w3-button w3-right'><i class='fa fa-user'></i>Admin</a>";

echo"<a href='index.php' class='w3-bar-item w3-button w3-right'><i class='fa fa-home'></i>Home</a>";


	}

else
{


  echo"<a href='index.php' class='w3-bar-item w3-button w3-padding w3-hover-red'><i class='fa fa-home fa-fw w3-margin-right'></i>HOME</a>
    <a href='index.php#about' class='w3-bar-item w3-button w3-padding w3-hover-red'><i class='fa fa-user fa-fw w3-margin-right'></i>ABOUT</a>
    <a href='index.php#accounts' class='w3-bar-item w3-button w3-padding w3-hover-red'><i class='fa fa-th-large fa-fw w3-margin-right'></i>ACCOUNTS</a>
    <a href='index.php#contact' class='w3-bar-item w3-button w3-padding w3-hover-red'><i class='fa fa-envelope fa-fw w3-margin-right'></i>CONTACT</a>
     <a href='logout.php' class='w3-bar-item w3-button w3-padding w3-hover-red'><i class='fa fa-sign-in fa-fw w3-margin-right'></i>LOGOUT</a>
     ";
}
?>
