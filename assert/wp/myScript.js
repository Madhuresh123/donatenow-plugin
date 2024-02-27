
var currentPlaceholder = "";

function clearPlaceholder(element) {
    currentPlaceholder = element.placeholder;
    element.placeholder = '';
}

function restorePlaceholder(element) {
    element.placeholder = currentPlaceholder;
}

      // Function to format number in Indian numbering system (1,00,000 format)
      function formatIndianNumber(amount) {
        return amount.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

    // Update donation total when input changes
    document.getElementById('Amount').addEventListener('input', function() {
        var amount = parseFloat(this.value.replace('₹', '')) || 0; // Remove '₹' symbol and convert to number
        var formattedAmount = formatIndianNumber(amount.toFixed(2)); // Format amount in Indian numbering system
        document.getElementById('donationTotal').innerText = ' ₹' + formattedAmount; // Update total with formatted amount
    });

jQuery.validator.addMethod("noSpecialChars", function(value, element) {
  return this.optional(element) || /^[a-zA-Z][a-zA-Z\s]*[a-zA-Z]$/.test(value); // Requires at least two letters and the first character not being a space
});

jQuery.validator.addMethod("validEmail", function(value, element) {
  return this.optional(element) || /^[a-z]+\d*@(?:gmail|yahoo|outlook)\.com$|^[a-z][a-z0-9._]*@(?:gmail|yahoo|outlook)\.com$/.test(value);
});


jQuery.validator.addMethod("onlyTenDigits", function(value, element) {
  return this.optional(element) || /^\d{10}$/.test(value); // Allows only exactly 10 digits
});

jQuery.validator.addMethod("validPAN", function(value, element) {
  return this.optional(element) || /^[A-Z]{5}[0-9]{4}[A-Z]{1}$/.test(value); // Validates PAN format
});

jQuery.validator.addMethod("validAmount", function(value, element) {

  return this.optional(element) || (/^[1-9]\d*$/).test(value) && parseInt(value) < 100000;
});




  jQuery("#donation-form").validate({
    rules:{
      full_name: {
        noSpecialChars:true
      },
      email: {
        validEmail:true
      },
      contact:{
        onlyTenDigits:true,
      },
      pan:{
        validPAN:true
      },
      amount:{
        validAmount:true
      }
    },
    messages:{
      full_name:{
        noSpecialChars:"Please enter valid name"
      },
      email:{
        validEmail:"Please enter valid email"
      },
      contact:{
        onlyTenDigits:"Please enter valid phone number",
      },
      pan:{
        validPAN:"Please enter a valid PAN number"
      },
      amount:{
        validAmount:"Please enter a valid amount less than 1 lakh"
      }
    }
  });

