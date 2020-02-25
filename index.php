<?php
  require 'header.php';
  require 'nav.php';

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<script>
    $(document).ready(function(){
      $('.slider').bxSlider({
        auto: true,
        autoControls: false,
        mode: 'fade',
        captions: true,
        slideWidth: 1000,
        stopAutoOnClick: true,
        pager: true,
      })
    });
</script>

</head>

<header id="home">
  <div class="w3-row-padding">
    <div class="w3-col m6 w3-padding" style="margin-top:50px;width:1380px;">
      <div class="slider">
        <div>   <img src="images/rrc.jpg" title="Powered By RRC Notre Dame Campus"></div>
        <div>    <img src="images/edc.jpg"  title="Powered By RRC EDC Campus"></div>
      </div>
    </div>
  </div>
</header>

  <!-- About -->
  <div class="w3-container w3-padding-large" style="margin-bottom:32px" id="about">
    <h1 class="w3-xxlarge w3-text-red"><b>About Us.</b></h1>
    <p>PridePoint Bank Limited is an Canadian multinational banking and financial services company headquartered in Winnipeg, Manitoba. As of 2018, PridePoint Bank is the second largest bank in Canada in terms of assets and market capitalisation. It offers a wide range of banking products and financial services for corporate and retail customers through a variety of delivery channels and specialised subsidiaries in the areas of investment banking, life, non-life insurance, venture capital and asset management. The bank has a network of 4882 branches and 15101 ATMs across the country and has a presence in 17 countries including US.<br>
    PridePoint Bank is one of the Big Four banks of Canada. The bank has subsidiaries in the United Kingdom and Canada; branches in United States, Singapore, Bahrain, Hong Kong, Qatar, Oman, Dubai International Finance Centre, China and South Africa; and representative offices in United Arab Emirates, Bangladesh, Malaysia and Indonesia. The company's UK subsidiary has also established branches in Belgium and Germany.</p>
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
        </ul>
      </div>
    </div>
    <div class="w3-container w3-center">
      Chosen what type of account works for you?<br>
      <button class="w3-button w3-red w3-padding-large w3-hover-black w3-margin-top" onclick="document.getElementById('signup').style.display='block'">Create Account Now!</button>
    </div>
  </div>

  <div id="signup" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:700px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('signup').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
      </div>

      <form class="w3-container" action="/action_page.php">
        <h4><b>Let's get your money safe!!</b></h4>
        <hr>
        <div class="w3-section">
          <div class="w3-row-padding">
            <div class="w3-half">
              <label><b>First Name</b></label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" name="fname" required>
            </div>
            <div class="w3-half">
              <label><b>Last Name</b></label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" name="lname" required>
            </div>
          </div>
          <div class="w3-row-padding">
            <div class="w3-half">
              <label><b>E-Mail ID</b></label>
              <input class="w3-input w3-border w3-margin-bottom" type="email" name="email" required>
            </div>
            <div class="w3-half">
              <label><b>Mobile Number</b></label>
              <input class="w3-input w3-border w3-margin-bottom" type="tel" pattern="[0-9]{10}" name="mnum" required>
            </div>
          </div>
          <div class="w3-row-padding">
            <div class="w3-half">
                <label><b>Password</b></label>
                <input class="w3-input w3-border w3-margin-bottom" type="password" name="password" required>
            </div>
            <div class="w3-half">
                <label><b>Confirm Password</b></label>
                <input class="w3-input w3-border w3-margin-bottom" type="password" name="password2" required>
            </div>
          </div>
          <h5>Account type</h5>
          <div class="w3-row-padding">
            <div class="w3-third">
                <input class="w3-radio" type="radio" name="gender" value="chequing" checked>
                <label>Chequing (free)</label>
            </div>
            <div class="w3-third">
                <input class="w3-radio" type="radio" name="gender" value="savings">
                <label>Savings ($10/m)</label>
            </div>
            <div class="w3-third">
                <input class="w3-radio" type="radio" name="gender" value="bussiness" >
                <label>Bussiness ($30/m)</label>
            </div>
          </div>
          <button class="w3-button w3-block w3-green w3-section w3-padding w3-red w3-hover-black" type="submit">Create Account</button>
        </div>
      </form>
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
      <button type="submit" class="w3-button w3-red w3-margin-bottom w3-hover-black"><i class="fa fa-paper-plane w3-margin-right"></i>Send Message</button>
    </form>
  </div>

<?php
  require 'footer.php';
?>
