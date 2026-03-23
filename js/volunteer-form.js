$(document).ready(function() {

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
    task: {
        required: true
    },
    message: {
        required: true,
        minlength: 10
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
        task: {
        required: "Please select a volunteer task"
    },
    message: {
        required: "Please enter a message",
        minlength: "Please give us more detail"
    }
    },
    submitHandler: function(form) {
      window.location.href = "thank-you.html";
    }
});
});


