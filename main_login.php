<?php
  require 'config.php';
  require 'database.php';
  require 'header.php';
  require 'nav.php';

if(isset($_SESSION['username'])){
	header("location:index.php");
}
?>

<div class="w3-container" id="contact" style="margin-top:75px">
  <h1 class="w3-xxlarge w3-text-red"><b>Login.</b></h1>

  <form name="form1" method="post" action="checklogin.php">
    <div class="w3-section">
      <label>Username</label>
      <input name="username" id="username" placeholder="Enter Username" class="w3-input w3-border">
    </div>

    <div class="w3-section">
      <label>Password</label>
      <input name="password" id="password" type="password" placeholder="Enter Password" class="w3-input w3-border">
    </div>

    <br>
    <input type="submit" value="Login" class="w3-button w3-red w3-margin-bottom w3-hover-black">
  </form>
</div>

<?php
  require 'footer.php';
?>
