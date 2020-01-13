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

      <h2>Radio Buttons</h2>
        <p>
        <input class="w3-radio" type="radio" name="gender" value="chequing" checked>
        <label>Chequing</label></p>
        <p>
        <input class="w3-radio" type="radio" name="gender" value="savings">
        <label>Savings</label></p>
        <p>
        <input class="w3-radio" type="radio" name="gender" value="bussiness" >
        <label>Bussiness</label></p>


        <button class="w3-button w3-block w3-green w3-section w3-padding w3-red w3-hover-black" type="submit">Create Account</button>
      </div>
    </form>
  </div>
</div>
