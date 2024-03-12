
    <!-- <form action="" method="post" id="spinal-contact-form">

    <div class="contact_input_div">
          <label for="contact_name">Name<span class="required-symbol">*</span></label><br>
          <input class="donor-input" type="text" id="contact_name" name="contact_name" placeholder="Full Name" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)" required>
    </div>
          <div  class="contact_input_div">
          <label for="contact_email">Email<span class="required-symbol">*</span></label><br>
          <input  class="donor-input" type="email" id="contact_email" name="contact_email" placeholder="Email Address" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)"  required>
        </div>

        <div class="contact_input_div">
          <label for="contact_phone">Phone Number</label><br>
          <input class="donor-input" type="text" id="contact_phone" name="contact_phone" placeholder="Full Name" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)">
        </div>

        <div class="contact_input_div">
          <label for="contact_subject">Subject<span class="required-symbol">*</span></label><br>
          <input  class="donor-input" type="text" id="contact_subject" name="contact_subject" placeholder="Email Address" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)"  required>
        </div>

        <div class="contact_input_div">
        <label for="contact_message">Message</label><br>
        <textarea class="contact-message" type="text" id="contact_message" name="contact_message" placeholder="Enter your comments" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)"></textarea>
        </div>

        <div>
          <input type="submit" class="contact_form_btn" name="volunteer_register" value="Submit" >
        </div>
      </form>

      <p id="contact-form-result"></p> -->


      <div class=donate-box>
    <div class="donation-form-title"><h2>Contact Us</h2></div>

    <form action="" method="post" id="spinal-contact-form">
      
    
      <div class="first-info">
        <div class="form-group">
          <label for="contact_name">Full Name<span class="required-symbol">*</span></label><br>
          <input class="donor-input" type="text" id="contact_name" name="contact_name" placeholder="Enter Name" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)" required>
        </div>
        <div class="form-group">
          <label for="contact_email">Email Address<span class="required-symbol">*</span></label><br>
          <input  class="donor-input" type="email" id="contact_email" name="contact_email" placeholder="Enter your email address" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)"  required>
        </div>
      </div>
  
      <div class="first-info">
  
        <div class="form-group">
          <label for="contact_phone">Phone Number<span class="required-symbol">*</span></label><br>
          <input class="donor-input"  type="text" id="contact_phone" name="contact_phone"  placeholder="Enter your phone number"  onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)" required>
        </div>
        <div class="form-group">
          <label for="contact_subject">Subject</label><br>
          <input  class="donor-input" type="text" id="contact_subject" name="contact_subject"  placeholder="Enter your subject, Medical or Posh"  onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)">
        </div>
  </div>
  
  <div class="first-info">
  
  <div class="form-group">
    <label for="contact_message">Message</label><br>
    <textarea class="donor-adddress-input" id="contact_message" name="contact_message" placeholder="Enter your message" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)"></textarea>
  </div>

  <div class="form-group">
         
         </div>

  </div>


  <div class="donation-address">
        <div><strong><p>Main office address</p></strong></div>
        <div style="text-align:left; width:18rem;">Electronic City Ground Floor, Pinnacle Tower, A-42/6 Sector 62 Noida (UP) 201301, India,</div>    
  <strong><p>Opening Hours</p></strong>
  <p>Every day: 9:00 AM - 06:00 PM</p>

  <p>Get to know us, including how you can contact us and how we keep your information secure.</p>
      
  </div>

        <div class="button-box">
          <input type="submit" class="form_submit_btn" name="register" value="Submit">
        </div>
      </form>

      <p id="contact-form-result"></p>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js" integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
  jQuery(document).ready(function($){
    let spinal_contact_form = $('#spinal-contact-form');

    spinal_contact_form.submit(function(event){
        event.preventDefault();

        let contact_name = $('#contact_name').val();
        let contact_email = $('#contact_email').val();
        let contact_phone = $('#contact_phone').val();
        let contact_subject = $('#contact_subject').val();
        let contact_message = $('#contact_message').val();

        let formData = new FormData();

        formData.append('action', 'spinnal_form');
        formData.append('contact_name', contact_name);
        formData.append('contact_email', contact_email);
        formData.append('contact_phone', contact_phone);
        formData.append('contact_subject', contact_subject);
        formData.append('contact_message', contact_message);
 
        $.ajax({
          url: ajaxUrl,
          type: 'post',
          data: formData,
          processData: false,
          contentType: false,
          success: function(response){
              console.log(response);
              if(response === 'success'){

                $('#contact_name').val('');
                $('#contact_email').val('');
                $('#contact_phone').val('');
                $('#contact_subject').val('');
                $('#contact_message').val('');

              $('#contact-form-result').text('Submitted successfully').css('color', 'green');

              }else{
              
                $('#contact-form-result').text('Submission failed. Please try again.').css('color', 'red');
                
              }
          },
          error: function(response){
              console.log('error');
              $('#contact-form-result').text('Submission failed. Please try again.').css('color', 'red');

          }

        });

    });
});

</script>