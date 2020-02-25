<?php
  require 'config.php';
  require 'database.php';
  $g_title = BLOG_NAME . ' - Index';
  $g_page = 'logout';
  require 'header.php';
  require 'nav.php';

if(!isset($_SESSION['username'])){
	header("location:main_login.php");
}
?>

<div class="w3-container w3-padding-large" style="margin-top:75px;">
  <h1 class="w3-xxlarge w3-text-red"><b>Welcome <?php echo $_SESSION['username'] ?>.</b></h1>
  <p>You have successfully logged in.</p>
  <form action="logout.php">
    <button class="w3-button w3-red w3-margin-bottom w3-hover-black" type="submit">Logout</button>
  </form>
</div>

<?php
  require 'footer.php';
?>
