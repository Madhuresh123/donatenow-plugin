<div>
    <!-- Overlay -->
<div class="overlay"></div>

<!-- Popup -->
<div class="popup" id="popup">
    <div class="container">


    <div style="display:flex;">
    <div><h3 style="text-align:center;">Thank you!</h3></div>
    <div style="padding-top:10px; padding-left:8px;">
      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" style="width:2rem; height:2rem;">
      <path d="M10.0003 18.3332C5.39783 18.3332 1.66699 14.6023 1.66699 9.99984C1.66699 5.39734 5.39783 1.6665 10.0003 1.6665C14.6028 1.6665 18.3337 5.39734 18.3337 9.99984C18.3337 14.6023 14.6028 18.3332 10.0003 18.3332ZM9.16949 13.3332L15.0612 7.44067L13.8837 6.26234L9.16949 10.9765L6.81199 8.619L5.63366 9.79734L9.16949 13.3332Z" fill="#78B598"/>
      </svg>
    </div>
</div>	



 <div style="text-align:center;">
  <p>Your support means world to us!<br>
  Our volunteer will call you shortly to guide offline donations.</p>
</div>

		 <div><a class="done_btn" href="<?php echo esc_url(site_url('/')); ?>"  style="display: inline-block; height: 40px; width: 100px;">Done</a></div>
</div>
</div>
	</div>
    <div class=donate-box>
    <div class="donation-form-title"><h2>Personal info</h2></div>

    <form action="" method="post" id="donation-form">
      
    
      <div class="first-info">
        <div class="form-group">
          <label for="name">Full Name<span class="required-symbol">*</span></label><br>
          <input class="donor-input" type="text" id="name" name="full_name" placeholder="Full Name" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)" required>
          <label id="full_name-error" class="error" for="name"></label>
        </div>
        <div class="form-group">
          <label for="email">Email Address<span class="required-symbol">*</span></label><br>
          <input  class="donor-input" type="email" id="email" name="email" placeholder="Email Address" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)"  required>
        </div>
      </div>
  
      <div class="first-info">
  
        <div class="form-group">
          <label for="contact">Contact Number<span class="required-symbol">*</span></label><br>
          <input class="donor-input"  type="tel" id="contact" name="contact"  placeholder="Contact Number"  onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)" required>
        </div>
        <div class="form-group">
          <label for="pan">PAN Number</label><br>
          <input  class="donor-input" type="text" id="pan" name="pan"  placeholder="PAN Number"  onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)">
        </div>
  </div>
  
  <div class="first-info">
  
  <div class="form-group">
          <label for="Amount">Amount<span class="required-symbol">*</span></label><br>
          <input  class="donor-input" type="text" id="Amount" name="amount"  placeholder="₹0"  onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)" required>
          <label id="amount-error" class="error" for="Amount"></label>
      </div>

  <div class="form-group">
    <label for="address-line-1">Address</label><br>
    <input class="donor-input"  type="text" id="address-line-1" name="address-line-1"  placeholder="Address"  onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)">
  </div>

  </div>
  
  <div class="donation-address">
        <p>To make an offline donation toward this cause, follow these steps:</p>
  
  <div style="margin:1rem 0;">
    <div class="des-check">
       <div style="margin-right:8px;"><svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M20.8479 7.89722L10.2479 18.4972C10.154 18.5919 10.0262 18.6451 9.8929 18.6451C9.75958 18.6451 9.63178 18.5919 9.5379 18.4972L4.1479 13.1072C4.05324 13.0134 4 12.8856 4 12.7522C4 12.6189 4.05324 12.4911 4.1479 12.3972L4.8479 11.6972C4.94178 11.6026 5.06958 11.5493 5.2029 11.5493C5.33622 11.5493 5.46402 11.6026 5.5579 11.6972L9.8879 16.0272L19.4379 6.47722C19.6357 6.28543 19.9501 6.28543 20.1479 6.47722L20.8479 7.18722C20.9426 7.2811 20.9958 7.4089 20.9958 7.54222C20.9958 7.67554 20.9426 7.80333 20.8479 7.89722Z" fill="#78B598"/>
        </svg></div>
        <div>Write a check payable to "RGT Welfare Foundation"</div>
    </div>

    <div class="des-check">
       <div style="margin-right:8px;"><svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M20.8479 7.89722L10.2479 18.4972C10.154 18.5919 10.0262 18.6451 9.8929 18.6451C9.75958 18.6451 9.63178 18.5919 9.5379 18.4972L4.1479 13.1072C4.05324 13.0134 4 12.8856 4 12.7522C4 12.6189 4.05324 12.4911 4.1479 12.3972L4.8479 11.6972C4.94178 11.6026 5.06958 11.5493 5.2029 11.5493C5.33622 11.5493 5.46402 11.6026 5.5579 11.6972L9.8879 16.0272L19.4379 6.47722C19.6357 6.28543 19.9501 6.28543 20.1479 6.47722L20.8479 7.18722C20.9426 7.2811 20.9958 7.4089 20.9958 7.54222C20.9958 7.67554 20.9426 7.80333 20.8479 7.89722Z" fill="#78B598"/>
        </svg></div>
        <div>On the memo line of the check, indicate that the donation is for "RGT Welfare Foundation"</div>
    </div>

    <div class="des-check">
       <div style="margin-right:8px;"><svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M20.8479 7.89722L10.2479 18.4972C10.154 18.5919 10.0262 18.6451 9.8929 18.6451C9.75958 18.6451 9.63178 18.5919 9.5379 18.4972L4.1479 13.1072C4.05324 13.0134 4 12.8856 4 12.7522C4 12.6189 4.05324 12.4911 4.1479 12.3972L4.8479 11.6972C4.94178 11.6026 5.06958 11.5493 5.2029 11.5493C5.33622 11.5493 5.46402 11.6026 5.5579 11.6972L9.8879 16.0272L19.4379 6.47722C19.6357 6.28543 19.9501 6.28543 20.1479 6.47722L20.8479 7.18722C20.9426 7.2811 20.9958 7.4089 20.9958 7.54222C20.9958 7.67554 20.9426 7.80333 20.8479 7.89722Z" fill="#78B598"/>
        </svg></div>
        <div>Mail your check to:</div>
    </div>
  </div>
    

  <div class="des-check">
       <div style="margin-right:8px; padding-top:1.6rem;">
       <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12.5 2.66663C8.1 2.66663 4.5 6.26663 4.5 10.6666C4.5 16.0666 11.5 22.1666 11.8 22.4666C12 22.5666 12.3 22.6666 12.5 22.6666C12.7 22.6666 13 22.5666 13.2 22.4666C13.5 22.1666 20.5 16.0666 20.5 10.6666C20.5 6.26663 16.9 2.66663 12.5 2.66663ZM12.5 20.3666C10.4 18.3666 6.5 14.0666 6.5 10.6666C6.5 7.36663 9.2 4.66663 12.5 4.66663C15.8 4.66663 18.5 7.36663 18.5 10.6666C18.5 13.9666 14.6 18.3666 12.5 20.3666ZM12.5 6.66663C10.3 6.66663 8.5 8.46663 8.5 10.6666C8.5 12.8666 10.3 14.6666 12.5 14.6666C14.7 14.6666 16.5 12.8666 16.5 10.6666C16.5 8.46663 14.7 6.66663 12.5 6.66663ZM12.5 12.6666C11.4 12.6666 10.5 11.7666 10.5 10.6666C10.5 9.56663 11.4 8.66663 12.5 8.66663C13.6 8.66663 14.5 9.56663 14.5 10.6666C14.5 11.7666 13.6 12.6666 12.5 12.6666Z" fill="#78B598"/>
</svg>

    </div>
        <div style="text-align:left;">
      RGT Welfare Foundation<br>
      Ground Floor, Pinnacle Tower,<br>
      Electronic City,Noida, India<br>
      A-42/6 Sector 62 Noida (UP) 201301
        </div>
    </div>
    
 
  
  <p>Your tax-deductible donation is greatly appreciated!</p>
  
  <p><strong>Donation Total:</strong><span id="donationTotal"> ₹00.00</span></p>
  
  </div>
        <div class="button-box">
          <input type="submit" class="donate_btn" name="register" value="Submit">
        </div>
      </form>
</div>
