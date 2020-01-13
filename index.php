<!DOCTYPE html>
<html>
<title>PridePoint Bank - Welcome</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-hover-red" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="/img/logo.gif" style="width:35%;" class="w3-round"><br><br>
    <h2><b>PridePoint</b></h2>
    <p class="w3-text-grey">the bank you deserve</p>
  </div>
  <div class="w3-bar-block">
    <a href="#home" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-hover-red"><i class="fa fa-home fa-fw w3-margin-right"></i>HOME</a>
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-hover-red"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT</a>
    <a href="#accounts" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-hover-red"><i class="fa fa-th-large fa-fw w3-margin-right"></i>ACCOUNTS</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-hover-red"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
  </div>
  <div class="w3-panel w3-large">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <a href="https://www.instagram.com/pridepoint_bank/"><i class="fa fa-instagram w3-hover-opacity"></i></a>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;">
  <header id="home">
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-pale-red w3-top w3-red" onclick="w3_open()"><i class="fa fa-bars w3-left"> PridePoint</i></span>
    <div class="w3-row-padding">
      <div class="w3-col m6 w3-padding" style="margin-top:50px">
        <img src="/img/rrc.jpg" alt="Bank" style="width:100%">
      </div>
      <div class="w3-col m6 w3-padding" style="margin-top:50px">
        <img src="/img/edc.jpg" alt="RRC EDC" style="width:100%">
      </div>
    </div>
  </header>

  <!-- About -->
  <div class="w3-container w3-padding-large" style="margin-bottom:32px" id="about">
    <h1 class="w3-xxlarge w3-text-red"><b>About Us.</b></h1>
    <p>Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest of lorem ipsum and mauris neque quam blog. I want to share my world with you. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
    <hr>

    <h4>Customer Survey Results</h4>
    <!-- Facts -->
    <p>Customer Satisfaction</p>
    <div class="w3-pale-red">
      <div class="w3-container w3-red w3-padding w3-center" style="width:95%">95%</div>
    </div>
    <p>Best Interest Rates</p>
    <div class="w3-pale-red">
      <div class="w3-container w3-red w3-padding w3-center" style="width:85%">85%</div>
    </div>
    <p>Easy Loans</p>
    <div class="w3-pale-red">
      <div class="w3-container w3-red w3-padding w3-center" style="width:80%">80%</div>
    </div>
    <hr>
  </div>

  <div class="w3-container w3-padding-large" style="margin-bottom:32px" id="accounts">
    <!-- Accounts Tables -->
    <h1 class="w3-xxlarge w3-text-red"><b>Accounts.</b></h1>
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-third w3-margin-bottom">
        <ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-red w3-xlarge w3-padding-32">Chequing</li>
          <li class="w3-padding-16">Free Internet Banking</li>
          <li class="w3-padding-16">500$ Credit Card</li>
          <li class="w3-padding-16">1.5% Interest</li>
          <li class="w3-padding-16">Mail Support</li>
          <li class="w3-padding-16">
            <h2>Free</h2>
            <span class="w3-opacity">No monthly fee</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-red w3-padding-large w3-hover-black">Sign Up</button>
          </li>
        </ul>
      </div>

      <div class="w3-third w3-margin-bottom">
        <ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-red w3-xlarge w3-padding-32">Savings</li>
          <li class="w3-padding-16">No Service Fee for Cash Withdrawls</li>
          <li class="w3-padding-16">2000$ Credit Card</li>
          <li class="w3-padding-16">4.5% Savings Interest</li>
          <li class="w3-padding-16">Call Support</li>
          <li class="w3-padding-16">
            <h2>$ 10</h2>
            <span class="w3-opacity">per month</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-red w3-padding-large w3-hover-black">Sign Up</button>
          </li>
        </ul>
      </div>

      <div class="w3-third">
        <ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-red w3-xlarge w3-padding-32">Business</li>
          <li class="w3-padding-16">Insurance Included</li>
          <li class="w3-padding-16">5000$ Credit Card</li>
          <li class="w3-padding-16">Loans from 5% Interest</li>
          <li class="w3-padding-16">Endless Support</li>
          <li class="w3-padding-16">
            <h2>$ 30</h2>
            <span class="w3-opacity">per month</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-red w3-padding-large w3-hover-black">Sign Up</button>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-large" id="contact">
    <h1 class="w3-xxlarge w3-text-red"><b>Contact.</b></h1>
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
      <div class="w3-third w3-red w3-border">
        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
        <p>customercare@pridepoint.com</p>
      </div>
      <div class="w3-third w3-red w3-border">
        <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
        <p>302 Some Street, Winnipeg, CA</p>
      </div>
      <div class="w3-third w3-red w3-border">
        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
        <p>+1 431-123-4567</p>
      </div>
    </div>
    <hr class="w3-opacity">
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <textarea class="w3-input w3-border" style="height:100px;resize:none" type="text" name="Message" required> </textarea>
      </div>
      <button type="submit" class="w3-button w3-red w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Send Message</button>
    </form>
  </div>

  <!-- Footer -->
  <div class="w3-red w3-center w3-padding-16">PridePoint Bank | All Rights Unreserved | Copywrongs  2019 | Powered by Arby's</div>


<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
