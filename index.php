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
      <div>  <img src="images/Savings-bank-account.png" width="1000px" title="Open a Savings Account with us"  ></div>
        

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

  <?php
    require 'accounts.php';
  ?>

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
