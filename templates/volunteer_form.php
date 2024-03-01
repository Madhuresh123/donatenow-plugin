
<div class=volunteer-box>
    <div class="donation-form-title"><h2>Volunteer Registration</h2></div>

    <form action="" method="post" id="volunteer-form">
      
      <div class="first-info">
        <div class="form-group">
          <label for="volunteer_fullname">Full Name<span class="required-symbol">*</span></label><br>
          <input class="donor-input" type="text" id="volunteer_fullname" name="volunteer_fullname" placeholder="Enter Name" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)" required>
        </div>
        <div class="form-group">
          <label for="volunteer_email">Email Address<span class="required-symbol">*</span></label><br>
          <input  class="donor-input" type="email" id="volunteer_email" name="volunteer_email" placeholder="Enter your email address" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)" required >
        </div>
      </div>
  
      <div class="first-info">
  
        <div class="form-group">
          <label for="volunteer_aadhaar">Aadhaar Number<span class="required-symbol">*</span></label><br>
          <input class="donor-input"  type="tel" id="volunteer_aadhaar" name="volunteer_aadhaar"  placeholder="Enter your aadhaar number"  onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)" required >
        </div>
        <div class="form-group">
          <label for="volunteer_age">Age</label><br>
          <select class="volunteer_select" id="volunteer_age" name="volunteer_age">
          <option value="" disabled selected style="display:none;">Enter your age</option>
            <option value="18-25">18 years - 25 years</option>
            <option value="25-35">25 years - 35 years</option>
            <option value="35-45">35 years - 45 years</option>
            <option value="45-55">45 years - 55 years</option>
            <option value="55-65">55 years - 65 years</option>
        </select>
        </div>
        </div>
  
  <div class="first-info">
  
  <div class="form-group">
          <label for="volunteer_profession">Profession</label><br>
          <select class="volunteer_select"  id="volunteer_profession" name="volunteer_profession">
          <option value="" disabled selected style="display:none;">Select your profession</option>
            <option value="Student">Student</option>
            <option value="Employee">Employee</option>
            <option value="Business">Business</option>
            <option value="Other">Other</option>
          </select>
      </div>

      <div class="form-group">
      
      </div>
  </div>

    <div class="first-info">

    <div class="form-group">

    <p><strong>Do you have any prior volunteer experience?</strong></p>

    <input type="radio" id="option1" name="volunteer_experience" value="Yes">
    <label for="option1">Yes</label><br>

    <input type="radio" id="option2" name="volunteer_experience" value="No">
    <label for="option2">No</label>
      
      </div>

      <div class="form-group">
      
      </div>
      
  </div>

  <div class="first-info">
  
  <div class="form-group">
    <label for="volunteer_duration">If yes, please specify how long</label><br>
    <select class="volunteer_select"  id="volunteer_duration" name="volunteer_duration">
    <option value="" disabled selected style="display:none;">Select your prior experience</option>
    <option value="1">1 Year</option>
    <option value="2">2 Years</option>
    <option value="3">3 Years</option>
    <option value="4">4 Years</option>
    <option value="5">5 Years</option>
</select>
  </div>
  <div class="form-group">
    <label for="volunteer_preferences">Volunteer Preferences</label><br>
    <select class="volunteer_select"  id="volunteer_preferences" name="volunteer_preferences">
    <option value="" disabled selected style="display:none;">Select your volunteering preferences</option>
    <option value="HealthCare">Health care</option>
    <option value="POSH">POSH</option>
    <option value="Both">Both</option>
</select>
  </div>
  </div>

  <div class="first-info">
  
  <div class="form-group">
    <label for="volunteer_availability">Availability</label><br>
    <select class="volunteer_select"  id="volunteer_availability" name="volunteer_availability">
    <option value="" disabled selected style="display:none;">Select your availability</option>
      <option value="Weekdays">Weekday's</option>
      <option value="Weekends">Weekend's</option>
      <option value="Any">Any</option>
    </select>
  </div>
  <div class="form-group">
    <label for="volunteer_contact">Contact Number<span class="required-symbol">*</span></label><br>
    <input  class="donor-input" type="text" id="volunteer_contact" name="volunteer_contact"  placeholder="Enter contact number"  onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)" required >
  </div>
  </div>

  <div class="divider">
    <div class="line"></div>
    <div class="address_div"><strong><p>Address</p></strong></div>
    <div class="line"></div>
  </div>

  <div class="first-info">
  
  <div class="form-group">
    <label for="volunteer_address_1">Address Lane 1</label><br>
    <input class="donor-input"  type="tel" id="volunteer_address_1" name="volunteer_address_1"  placeholder="Enter address lane 1"  onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)">
  </div>
  <div class="form-group">
    <label for="volunteer_address_2">Address Lane 2</label><br>
    <input  class="donor-input" type="text" id="volunteer_address_2" name="volunteer_address_2"  placeholder="Enter address lane 2"  onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)">
  </div>
  </div>

  <div class="first-info">
  
  <div class="form-group">
    <label for="volunteer_city">City</label><br>
    <!-- <input  class="donor-input" type="text" id="volunteer_address_2" name="volunteer_address_2"  placeholder="Enter your city"  onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)"> -->
    <select class="volunteer_select"  id="volunteer_city" name="volunteer_city">
    <option value="" disabled selected style="display:none;">Select your city</option>
    <option value="Amaravati">Amaravati</option>
    <option value="Itanagar">Itanagar</option>
    <option value="Dispur">Dispur</option>
    <option value="Patna">Patna</option>
    <option value="Raipur">Raipur</option>
    <option value="Panaji">Panaji</option>
    <option value="Gandhinagar">Gandhinagar</option>
    <option value="Chandigarh">Chandigarh</option>
    <option value="Shimla">Shimla</option>
    <option value="Ranchi">Ranchi</option>
    <option value="Bengaluru">Bengaluru</option>
    <option value="Thiruvananthapuram">Thiruvananthapuram</option>
    <option value="Bhopal">Bhopal</option>
    <option value="Mumbai">Mumbai</option>
    <option value="Imphal">Imphal</option>
    <option value="Shillong">Shillong</option>
    <option value="Aizawl">Aizawl</option>
    <option value="Kohima">Kohima</option>
    <option value="Bhubaneswar">Bhubaneswar</option>
    <option value="Chandigarh">Chandigarh</option>
    <option value="Jaipur">Jaipur</option>
    <option value="Gangtok">Gangtok</option>
    <option value="Chennai">Chennai</option>
    <option value="Hyderabad">Hyderabad</option>
    <option value="Agartala">Agartala</option>
    <option value="Lucknow">Lucknow</option>
    <option value="Dehradun">Dehradun</option>
    <option value="Kolkata">Kolkata</option>
    <option value="Port Blair">Port Blair</option>
    <option value="Chandigarh">Chandigarh</option>
    <option value="Daman">Daman</option>
    <option value="Kavaratti">Kavaratti</option>
    <option value="New Delhi">New Delhi</option>
    <option value="Puducherry">Puducherry</option>
</select>
  </div>
  <div class="form-group">
    <label for="volunteer_state">State</label><br>
    <select class="volunteer_select"  id="volunteer_state" name="volunteer_state">
    <option value="" disabled selected style="display:none;">Select your state</option>
    <option value="Andhra Pradesh">Andhra Pradesh</option>
    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
    <option value="Assam">Assam</option>
    <option value="Bihar">Bihar</option>
    <option value="Chhattisgarh">Chhattisgarh</option>
    <option value="Goa">Goa</option>
    <option value="Gujarat">Gujarat</option>
    <option value="Haryana">Haryana</option>
    <option value="Himachal Pradesh">Himachal Pradesh</option>
    <option value="Jharkhand">Jharkhand</option>
    <option value="Karnataka">Karnataka</option>
    <option value="Kerala">Kerala</option>
    <option value="Madhya Pradesh">Madhya Pradesh</option>
    <option value="Maharashtra">Maharashtra</option>
    <option value="Manipur">Manipur</option>
    <option value="Meghalaya">Meghalaya</option>
    <option value="Mizoram">Mizoram</option>
    <option value="Nagaland">Nagaland</option>
    <option value="Odisha">Odisha</option>
    <option value="Punjab">Punjab</option>
    <option value="Rajasthan">Rajasthan</option>
    <option value="Sikkim">Sikkim</option>
    <option value="Tamil Nadu">Tamil Nadu</option>
    <option value="Telangana">Telangana</option>
    <option value="Tripura">Tripura</option>
    <option value="Uttar Pradesh">Uttar Pradesh</option>
    <option value="Uttarakhand">Uttarakhand</option>
    <option value="West Bengal">West Bengal</option>
    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
    <option value="Chandigarh">Chandigarh</option>
    <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
    <option value="Lakshadweep">Lakshadweep</option>
    <option value="Delhi">Delhi (National Capital Territory of Delhi)</option>
    <option value="Puducherry">Puducherry (Pondicherry)</option>
</select>
  </div>
  </div>

  <div class="first-info">
  
  <div class="form-group">
    <label for="volunteer_zip">ZIP Code</label><br>
    <input class="donor-input"  type="tel" id="volunteer_zip" name="volunteer_zip"  placeholder="Enter your zip code"  onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)">
  </div>
  <div class="form-group">
    <label for="volunteer_country">Country</label><br>
    <select class="volunteer_select"  id="volunteer_country" name="volunteer_country">
    <option value="" disabled selected style="display:none;">Select your country</option>
      <option value="Weekdays">India</option>
    </select>
  </div>
  </div>

  <div class="first-info">

  <div style="width:90%;">
  <label for="volunteer_comments" style="font-size:14px;">Comments</label><br>
  <textarea class="volunteer-comment" id="volunteer_comments" name="volunteer_comments" placeholder="Enter your comments" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)"></textarea>
</div>

  </div>

  <div class="first-info">

<div style="width:90%;">
<div><br><span> Please click here to see <a href="https://rgtfoundation.org/terms-and-conditions/" style="color:green;">Terms and Condition</a></span></div>
<div><br><input type="checkbox" id="myCheckbox" name="myCheckbox" required><strong><span> I agree with the terms and condition</span></strong></div>
</div>

</div>


        <div class="button-box">
          <input type="submit" class="form_submit_btn" name="volunteer_register" value="Submit" >
        </div>
      </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js" integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
