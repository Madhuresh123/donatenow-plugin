
<style>
  .contact-message{
    width: 22.5rem auto;
    height: 6rem auto;
    border-radius: 5px;
    border: 1px solid lightgrey;
    outline: none;
    padding: 10px; 
  }

  .contact_form_btn{
    width: 8rem;
    height: 4rem;
    background-color: #78B598;
    font-size: 20px;
    font-weight: 700;
    border: none;
    border-radius: 5px;
    color: white;
    cursor: pointer;
  }
</style>


<div>

    <form action="" method="post" id="donation-form">

    <div>
          <label for="contact_name">Name<span class="required-symbol">*</span></label><br>
          <input class="donor-input" type="text" id="contact_name" name="contact_name" placeholder="Full Name" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)" required>
    </div>
          <div>
          <label for="contact_email">Email<span class="required-symbol">*</span></label><br>
          <input  class="donor-input" type="email" id="contact_email" name="contact_email" placeholder="Email Address" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)"  required>
        </div>

        <div>
          <label for="contact_phone">Phone Number</label><br>
          <input class="donor-input" type="text" id="contact_phone" name="contact_phone" placeholder="Full Name" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)">
        </div>

        <div>
          <label for="contact_subject">Subject<span class="required-symbol">*</span></label><br>
          <input  class="donor-input" type="email" id="contact_subject" name="contact_subject" placeholder="Email Address" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)"  required>
        </div>

        <label for="contact_message">Message</label><br>
        <textarea class="contact-message" id="contact_message" name="contact_message" placeholder="Enter your comments" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this)"></textarea>

        <div>
          <input type="submit" class="contact_form_btn" name="volunteer_register" value="Submit" >
        </div>
      </form>
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js" integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
