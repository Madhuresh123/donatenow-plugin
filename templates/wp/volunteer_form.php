<?php
 global $wpdb, $table_prefix;

 //states data
 $wp_states = $table_prefix . 'states';

 $q = "SELECT * from `$wp_states`;";
 $states = $wpdb->get_results($q);

  //districts data
  $wp_districts = $table_prefix . 'districts';

  $q = "SELECT * from `$wp_districts`;";
  $districts = $wpdb->get_results($q);


?>
      <script src="https://www.google.com/recaptcha/api.js" async defer></script>

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
          <input class="donor-input"  type="text" id="volunteer_aadhaar" name="volunteer_aadhaar"  placeholder="Enter your aadhaar number"  onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)" required >
        </div>
        <div class="form-group">
          <label for="volunteer_age">Age</label><br>
          <select class="volunteer_select" id="volunteer_age" name="volunteer_age">
          <option value="" disabled selected style="display:none;">Select your age</option>
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

    <input type="radio" id="option1" name="volunteer_experience" value="yes">
    <label for="option1">Yes</label><br>

    <input type="radio" id="option2" name="volunteer_experience" value="No" checked>
    <label for="option2">No</label>
      
      </div>

      <div class="form-group">
      
      </div>
      
  </div>

  <div class="first-info">
  
  <div class="form-group">
    <label for="volunteer_duration">If yes, please specify how long</label><br>
    <select class="volunteer_select"  id="volunteer_duration" name="volunteer_duration" disabled>
    <option value="" disabled selected style="display:none;">Select your prior experience</option>
    <option value="1">1 Year</option>
    <option value="2">2 Years</option>
    <option value="3">3 Years</option>
    <option value="4">4 Years</option>
    <option value="5">5 Years</option>
</select>
<div id="error-duration"></div>
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
    <input class="donor-input"  type="text" id="volunteer_address_1" name="volunteer_address_1"  placeholder="Enter address lane 1"  onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)">
  </div>
  <div class="form-group">
    <label for="volunteer_address_2">Address Lane 2</label><br>
    <input  class="donor-input" type="text" id="volunteer_address_2" name="volunteer_address_2"  placeholder="Enter address lane 2"  onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)">
  </div>
  </div>

  <div class="first-info">

  <div class="form-group">
    <label for="volunteer_state">State</label><br>

    <div class="dropdown-wrapper">
      <input type="text" id="state_input"  class="donor-input" placeholder="Enter your state">
      <div id="state_dropdown" class="dropdown-content"></div>
      </div>

  </div>
  
  <div class="form-group">
    <label for="volunteer_city">City/district</label><br>

      <div class="dropdown-wrapper">
      <input type="text" id="city_input"  class="donor-input" placeholder="Select your city/district">
      <div id="city_dropdown" class="dropdown-content"></div>
      </div>

  </div>

    </div>

  <div class="first-info">
  
  <div class="form-group">
    <label for="volunteer_zip">ZIP Code</label><br>
    <input class="donor-input"  type="text" id="volunteer_zip" name="volunteer_zip"  placeholder="Enter your zip code"  onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)">
  </div>
  <div class="form-group">
    <label for="volunteer_country">Country</label><br>
    <select class="volunteer_select"  id="volunteer_country" name="volunteer_country">
    <option value="" disabled selected style="display:none;">Select your country</option>
      <option value="India">India</option>
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

<div style="width:50%;">
<div><br><span> Please click here to see <a href="https://staging-77e6-ratnaglobaltechnologies.wpcomstaging.com/terms-and-conditions/" style="color:green;">Terms and Condition</a></span></div>

<div ><br>
<input type="checkbox" id="myCheckbox" name="myCheckbox">
<strong> I agree with the terms and condition</strong>
<div id="error-check-box"></div>


</div>
</div>

<div>
<div class="g-recaptcha" id="captcha_response" data-sitekey="6Lc40qopAAAAAGdyYE8vBv3QSEvAdbYofi5lUQ_e"></div>
</div>

</div>
        <div class="button-box">
          <input type="submit" class="form_submit_btn" name="volunteer_register" value="Submit" >
        </div>
      </form>

      <div id="volunteer-form-result"></div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js" integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
// Wait for the DOM to be loaded before running the script
document.addEventListener('DOMContentLoaded', function () {

    // Get references to the radio buttons and the select element
    var yesOption = document.getElementById('option1');
    var noOption = document.getElementById('option2');
    var volunteerSelect = document.getElementById('volunteer_duration');

    // Function to enable/disable the select based on the radio button state
    function updateSelectState() {
        if (yesOption.checked) {
            volunteerSelect.disabled = false;
        } else if (noOption.checked) {
            volunteerSelect.disabled = true;
            volunteerSelect.value ="";
        }
    } 

    // Add event listeners to the radio buttons to trigger the state update function
    yesOption.addEventListener('change', updateSelectState);
    noOption.addEventListener('change', updateSelectState);
});
</script>


<script>

jQuery(document).ready(function($) {

let city_input = $('#city_input');

// Function to handle the AJAX request for city search
function searchCity() {
  let city = city_input.val();

  if ($('#state_input').val() === '') { 

      let formData = new FormData();
      formData.append('action', 'city_search');
      formData.append('city_input', city);

      $.ajax({
        url: ajaxUrl,
        type: 'post',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
          $('#city_dropdown').fadeIn().html(response);
        },
        error: function(response) {
          console.log('Error:', response);
        }
      });

    $('#city_input').focusout(function() {
    $('#city_dropdown').fadeOut();
    $('#city_input').val("");
  });

  }

}

// Attach the searchCity function to both keyup and focus events
city_input.on('focus', searchCity);
city_input.on('keyup', searchCity);

// Handle click on list item in the dropdown
$('#city_dropdown').on('click', 'li', function() {

  let text = $(this).val() === 0 ? "" : $(this).text();
  $('#city_input').val(text);
  $('#city_dropdown').fadeOut(); // Hide the dropdown
});

});
</script>
