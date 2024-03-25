var currentPlaceholder = "";

function clearPlaceholder(element) {
  currentPlaceholder = element.placeholder;
  element.placeholder = '';
}

function restorePlaceholder(element) {
  element.placeholder = currentPlaceholder;
}

function formatIndianNumber(amount) {
  return amount.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

var amountId = document.getElementById('Amount');

if (amountId) {
  amountId.addEventListener('input', function () {
    var amount = parseFloat(this.value.replace('₹', '')) || 0; // Remove '₹' symbol and convert to number
    var formattedAmount = formatIndianNumber(amount.toFixed(2)); // Format amount in Indian numbering system
    document.getElementById('donationTotal').innerText = ' ₹' + formattedAmount; // Update total with formatted amount
  });
}


jQuery.validator.addMethod("noSpecialChars", function (value, element) {
    return this.optional(element) || /^[a-zA-Z][a-zA-Z\s]{0,48}[a-zA-Z]$/.test(value); // Requires at least two letters and the first character not being a space

});

jQuery.validator.addMethod("validEmail", function (value, element) {
  return this.optional(element) || /^[a-z]+\d*@(?:gmail|yahoo|outlook)\.com$|^[a-z][a-z0-9._]*@(?:gmail|yahoo|outlook)\.com$/.test(value);
});


jQuery.validator.addMethod("onlyTenDigits", function (value, element) {
  return this.optional(element) || /^[1-9]\d{9}$/.test(value);
});

jQuery.validator.addMethod("validPAN", function (value, element) {
  return this.optional(element) || /^[A-Z]{5}[0-9]{4}[A-Z]{1}$/.test(value); // Validates PAN format
});

jQuery.validator.addMethod("validAadhaar", function (value, element) {
  return this.optional(element) || /^[2-9]{1}[0-9]{3}[0-9]{4}[0-9]{4}$/.test(value); // Validates Aadhaar format
});

jQuery.validator.addMethod("validAmount", function (value, element) {

  return this.optional(element) || (/^[1-9]\d*$/).test(value) && parseInt(value) < 100000;
});

jQuery.validator.addMethod("validZipcode", function (value, element) {
  return this.optional(element) || (/^[1-9]\d{5}$/).test(value);
});


jQuery("#donation-form").validate({
  rules: {
    full_name: {
      noSpecialChars: true
    },
    email: {
      validEmail: true
    },
    contact: {
      onlyTenDigits: true,
    },
    pan: {
      validPAN: true
    },
    amount: {
      validAmount: true
    }
  },
  messages: {
    full_name: {
      noSpecialChars: "Please enter valid name"
    },
    email: {
      validEmail: "Please enter valid email"
    },
    contact: {
      onlyTenDigits: "Please enter valid phone number",
    },
    pan: {
      validPAN: "Please enter a valid PAN number"
    },
    amount: {
      validAmount: "Please enter a valid amount less than 1 lakh"
    }
  }
});

//volunteer_form

jQuery("#volunteer-form").validate({
  rules: {
    volunteer_fullname: {
      noSpecialChars: true
    },
    volunteer_email: {
      validEmail: true
    },
    volunteer_aadhaar: {
      validAadhaar: true,
    },
    volunteer_contact: {
      onlyTenDigits: true,
    },
    volunteer_zip: {
      validZipcode: true
    },
  },
  messages: {
    volunteer_fullname: {
      noSpecialChars: "Please enter valid name"
    },
    volunteer_email: {
      validEmail: "Please enter valid email"
    },
    volunteer_aadhaar: {
      validAadhaar: "Please enter a valid aadhaar number with spaces"
    },
    volunteer_contact: {
      onlyTenDigits: "Please enter valid phone number",
    },
    volunteer_zip: {
      validZipcode: "Please enter a valid zip code"
    }
  }
});


//contact_form

jQuery("#spinal-contact-form").validate({
  rules: {
    contact_name: {
      noSpecialChars: true
    },
    contact_email: {
      validEmail: true
    },
    contact_phone:{
      onlyTenDigits: true,
    }
  },
  messages: {
    contact_name: {
      noSpecialChars: "Please enter valid name"
    },
    contact_email: {
      validEmail: "Please enter valid email"
    },
    contact_phone:{
      onlyTenDigits: "Please enter valid phone number",
    }
  }
});


//state select option
jQuery(document).ready(function($) {

  let state_input = $('#state_input');

  function searchState(){
    let state = $('#state_input').val();

      let formData = new FormData();
      formData.append('action', 'state_search');
      formData.append('state_input', state);

      $.ajax({
        url: ajaxUrl,
        type: 'post',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
          $('#state_dropdown').fadeIn().html(response);
        },
        error: function(response) {
          console.log('Error:', response);
        }
      });
  }

  state_input.on('focus', searchState);
  state_input.on('keyup', searchState);

  // Handle click on list item
  $('#state_dropdown').on('click', 'li', function() {

    let val = $(this).val() === 0 ? "" : $(this).text();
    $('#state_input').val(val);
    $('#city_input').val("");
    $('#state_dropdown').fadeOut();



    let state = $(this).val();
    let formData = new FormData();
    formData.append('action', 'func_state');
    formData.append('state_value', state);

    $.ajax({
      url: ajaxUrl, 
      type: 'post',
      data: formData,
      processData: false,
      contentType: false, 
      success: function(response) {

        let city_input = $('#city_input');
        let city_dropdown = $('#city_dropdown');
    
        function searchCity() {
            let city = $(this).val().toLowerCase();
                // Filter the city dropdown based on the input text
                city_dropdown.html(response); // Assuming response contains all city options
                city_dropdown.find('li').each(function() {
                    if ($(this).text().toLowerCase().indexOf(city) !== -1) {
                        $(this).show(); // Show the list item if it contains the input text
                    } else {
                        $(this).hide();
                    }
                });
    
                // If there are no matching cities, display "no city found"
                if (city_dropdown.find('li:visible').length === 0) {
                    city_dropdown.html('<li value="0">no city found</li>');
                }

            city_dropdown.fadeIn();
        };

        city_input.on('focus', searchCity);
        city_input.on('keyup', searchCity);
    
        // Hide the dropdown when input loses focus
        city_input.focusout(function() {
            city_dropdown.fadeOut();
            $('#city_input').val("");
        });
    
        // Show the dropdown when input gains focus
        city_input.focusin(function() {
            if ($(this).val().trim() !== '') {
                city_dropdown.fadeIn();
            }
        });
    
        // Handle click on dropdown items
        city_dropdown.on('click', 'li', function() {

          let sel = $(this).val() === 0 ? "" : $(this).text();
            $('#city_input').val(sel);
            $('#city_dropdown').fadeOut();

        });


      },
      error: function(response) {
        console.log('Error:',response);
      }
    });
  });

  $('#state_input').focusout(function() {
    $('#state_dropdown').fadeOut();
    $('#state_input').val("");
  });

});


//volunteer submit ajax
jQuery(document).ready(function($){

  let spinal_volunteer_form = $('#volunteer-form');

  spinal_volunteer_form.submit(function(event){
      event.preventDefault();

            let volunteer_fullname      =  $('#volunteer_fullname').val();
            let volunteer_email         =  $('#volunteer_email').val();
            let volunteer_aadhaar       =  $('#volunteer_aadhaar').val();
            let volunteer_age           =  $('#volunteer_age').val();
            let volunteer_profession    =  $('#volunteer_profession').val();
            let option1                 =  $('#option1').is(':checked');
            let volunteer_duration      =  $('#volunteer_duration').val();
            let volunteer_preferences   =  $('#volunteer_preferences').val();
            let volunteer_availability  =  $('#volunteer_availability').val();
            let volunteer_contact       =  $('#volunteer_contact').val();
            let volunteer_address_1     =  $('#volunteer_address_1').val();
            let volunteer_address_2     =  $('#volunteer_address_2').val();
            let volunteer_city          =  $('#city_input').val();
            let volunteer_state         =  $('#state_input').val();
            let volunteer_zip           =  $('#volunteer_zip').val();
            let volunteer_country       =  $('#volunteer_country').val();
            let volunteer_comments      =  $('#volunteer_comments').val();
            let myCheckbox              =  $('#myCheckbox').is(':checked');


      let formData = new FormData();

      formData.append('action', 'spinnal_volunteer_form');
      formData.append('volunteer_fullname', volunteer_fullname);
      formData.append('volunteer_email', volunteer_email);
      formData.append('volunteer_aadhaar', volunteer_aadhaar);
      formData.append('volunteer_age', volunteer_age);
      formData.append('volunteer_profession', volunteer_profession);
      formData.append('option1', option1);
      formData.append('volunteer_duration', volunteer_duration);
      formData.append('volunteer_preferences', volunteer_preferences);
      formData.append('volunteer_availability', volunteer_availability);
      formData.append('volunteer_contact', volunteer_contact);
      formData.append('volunteer_address_1', volunteer_address_1);
      formData.append('volunteer_address_2', volunteer_address_2);
      formData.append('volunteer_city', volunteer_city);
      formData.append('volunteer_state', volunteer_state);
      formData.append('volunteer_zip', volunteer_zip);
      formData.append('volunteer_country', volunteer_country);
      formData.append('volunteer_comments', volunteer_comments);
      formData.append('myCheckbox', myCheckbox);


      $.ajax({
        url: ajaxUrl,
        type: 'post',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response){
            if(response === 'success'){

              $('#volunteer-form').css('display','none');

            $('#volunteer-form-result').text('Thank you. Volunteer form submitted successfully').css({
                  'color': 'green',
                  'margin-left': '30%'
                  });

            }else{
              console.log(response);

              if(response === 'duration_error'){
                $('#error-duration').text('This field is required.').css('color','red');
              }else{
                $('#error-duration').text('');
              } 

              if(response === 'false'){
                $('#error-check-box').text('This field is required.').css('color','red');
              }else{
                $('#error-check-box').text('');
              }

              $('#volunteer-form-result').text('Submission failed. Please try again.').css({
                  'color': 'red',
                  'margin-left': '1%'
                  });                       
            }
        },
        error: function(response){
            $('#volunteer-form-result').text('Submission failed. Please try again.').css('color', 'red');
        }

      });

  });
});


//contact form
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

