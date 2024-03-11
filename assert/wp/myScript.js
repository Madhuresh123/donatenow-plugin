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
  return this.optional(element) || /^[a-zA-Z][a-zA-Z\s]*[a-zA-Z]$/.test(value); // Requires at least two letters and the first character not being a space
});

jQuery.validator.addMethod("validEmail", function (value, element) {
  return this.optional(element) || /^[a-z]+\d*@(?:gmail|yahoo|outlook)\.com$|^[a-z][a-z0-9._]*@(?:gmail|yahoo|outlook)\.com$/.test(value);
});


jQuery.validator.addMethod("onlyTenDigits", function (value, element) {
  return this.optional(element) || /^\d{10}$/.test(value); // Allows only exactly 10 digits
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
