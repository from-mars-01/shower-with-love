$(document).ready(function() {
var $nameInput = $('#name');
var $phoneInput = $('#phone');

$('#anonymous').on('change', function() {
    if ($(this).is(':checked')) {
        $nameInput.prop('disabled', true).val('').css({color: 'gray'});
        $phoneInput.prop('disabled', true).val('').css({color: 'gray'});

        $nameInput.rules('remove', 'required');
        $phoneInput.rules('remove', 'required');
    } else {
        $nameInput.prop('disabled', false).css({color: 'black'});
        $phoneInput.prop('disabled', false).css({color: 'black'});

        $nameInput.rules('add', {'required': true, messages: {required: "Please enter your name"}});
        $phoneInput.rules('add', {'required': true, messages: {required: "Please enter your phone number"}});
    }
});

$('#amount').on('change', function() {
    $('#otherAmount').toggle(this.value === 'other');
});

$.validator.addMethod("phoneUS", function(value, element) {
  return this.optional(element) || /^\d{10}$/.test(value.replace(/\D/g, ''));
}, "Please enter a valid 10-digit phone number");

$( "#formValidation" ).validate({
  rules: {
    name: {
      required: true,
      minlength: 2
    },
    email: {
      required: true,
      email: true
    },
    phone: {
      required: true,
      phoneUS: true,
    },
    billing: {
        required: true
    },
    card: {
        required: true
    },
    expiration: {
        required: true
    },
    cvv: {
        required: true
    },
    amount: {
        required: true  
    },
    otherAmount: {
        rquired:function() {
            return $('#amount').val() === 'other';
            },
        number: true,
        min: 1
    },
    task: {
        required: true
    }

    },
    messages: {
      name: {
        required: "Please enter your name",
        minlength: "Your name must consist of at least 2 characters"
        },
        email: {
        required: "Please enter your email address",
        email: "Please enter a valid email address"
      },
      phone: {
        required: "Please enter your phone number",
        phoneUS: "Please enter a valid phone number"
      },
      billing: {
        required: "Please enter your billing address"
      },
      expiration: {
        required: "Please enter the expiration date"
      },
      cvv: {
        required: "Please enter the CVV"
      },
      amount: {
        required: "Please select a donation amount"
      },        
        otherAmount: {
        required: "Please enter a donation amount",
        number: "Please enter a valid number",
        min: "Please enter a value greater than 0"
    }
    },
    submitHandler: function(form) {
      window.location.href = "thank-you.html";
    }
});
});

