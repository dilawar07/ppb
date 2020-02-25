<div style="float:top:0px; ">
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white" style="z-index:3;width:300px;top:0px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-hover-red" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="images/logo.gif" style="width:35%;" class="w3-round"><br><br>
    <h2><b>PridePoint</b></h2>
    <p class="w3-text-grey">The bank you deserve</p>
  </div>
  <div class="w3-bar-block">
  <?php
  session_start();
  echo"<a href='index.php' class='w3-bar-item w3-button w3-padding w3-hover-red'><i class='fa fa-home fa-fw w3-margin-right'></i>HOME</a>
    <a href='index.php#about' class='w3-bar-item w3-button w3-padding w3-hover-red'><i class='fa fa-user fa-fw w3-margin-right'></i>ABOUT</a>
    <a href='index.php#accounts' class='w3-bar-item w3-button w3-padding w3-hover-red'><i class='fa fa-th-large fa-fw w3-margin-right'></i>ACCOUNTS</a>
    <a href='index.php#contact' class='w3-bar-item w3-button w3-padding w3-hover-red'><i class='fa fa-envelope fa-fw w3-margin-right'></i>CONTACT</a>" ;

  if (!isset($_SESSION['username']))

  {
    echo "<a href='main_login.php' class='w3-bar-item w3-button w3-padding w3-hover-red'><i class='fa fa-sign-in fa-fw w3-margin-right'></i>LOGIN</a>
    <a href='register.php' class='w3-bar-item w3-button w3-padding w3-hover-red'><i class='fa fa-user fa-fw w3-margin-right'></i>REGISTER</a>";
  }

  else
  {
    echo"<a href='login_success.php' class='w3-bar-item w3-button w3-padding w3-hover-red'><i class='fa fa-sign-in fa-fw w3-margin-right'></i>PROFILE</a>";
  }
  ?>

  </div>

</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;">
  <span class="w3-button w3-hide-large w3-xxlarge w3-hover-pale-red w3-top w3-red" onclick="w3_open()"><i class="fa fa-bars w3-left"> PridePoint</i></span>
