<div style="float:top:0px; "> 
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;top:0px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-hover-red" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="images/logo.gif" style="width:35%;" class="w3-round"><br><br>
    <h2><b>PridePoint<i class="fas fa-khanda fa-fw w3-margin-right"></i></b></h2>
    <p class="w3-text-grey">The <i class="fab fa-canadian-maple-leaf"></i> Punjabi Bank you deserve</p>
  </div>
  <div class="w3-bar-block">
  <?php
  include_once("menu.php");
  
  
  
  ?>
    
  </div>
 
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;">
  <span class="w3-button w3-hide-large w3-xxlarge w3-hover-pale-red w3-top w3-red" onclick="w3_open()"><i class="fa fa-bars w3-left"> PridePoint</i></span>
