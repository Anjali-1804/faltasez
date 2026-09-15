function checkFormStatus(formId) {
  var status = true;

  if (status == true) {
    isFormValid(formId);

    if ($("#" + formId).valid()) {
      status = true;
    } else status = false;
  }

  if (!status) {
    pageScrollTop();
  }
  return status;
}

jQuery.validator.addMethod(
  "validCin",
  function (value, element) {
    return this.optional(element) || /^[a-zA-Z0-9]{21}$/.test(value);
  },
  "Please enter a valid CIN."
);

function isFormValid(formId) {
  $("#" + formId).validate({
    focusInvalid: true,
    rules: {
      company_name: {
        required: true,
        maxlength: 255,
        minlength: 5,
      },
      company_email: {
        required: true,
        email: true,
      },
      company_phoneNumber: {
        required: true,
        minlength: 8,
        maxlength: 10,
        digits: true,
      },
      company_address: {
        required: true,
        minlength: 8,
        maxlength: 200,
      },
      company_cin: {
        required: true,
        maxlength: 21,
        validCin: true,
      },
      termsAnCon: {
        required: true,
      },
      name: {
        required: true,
        maxlength: 255,
        minlength: 3,
      },
      email: {
        required: true,
        email: true,
      },
      phone: {
        required: true,
        minlength: 8,
        maxlength: 10,
        digits: true,
      },
      company: {
        maxlength: 255,
        minlength: 5,
      },
      subject: {
        required: true,
        minlength: 8,
        maxlength: 200,
      },
      message: {
        required: true,
        minlength: 8,
      },
    },
    messages: {
      company_name: {
        required: "Please enter the company name.",
        minlength: "Unit name must have more than 5 chars.",
        maxlength: "Unit name should be less than 255 chars.",
      },
      company_phoneNumber: {
        required: "Please enter the contact number.",
        minlength: "Phone number must have 8 digits.",
        maxlength: "Phone number should be 10 digits.",
      },
      company_email: {
        required: "Please enter the email address.",
        email: "Please enter a valid email address.",
      },
      company_cin: {
        required: "Please enter the company CIN.",
      },
      company_address: {
        required: "Please enter the unit address.",
      },
      termsAnCon: {
        required: "Please agree to terms and conditions.",
      },
      name: {
        required: "Please enter your name.",
        minlength: "Name must have more than 5 chars.",
        maxlength: "Name should be less than 255 chars.",
      },
      email: {
        required: "Please enter the email address.",
        email: "Please enter a valid email address.",
      },
      company: {
        minlength: "Company name must have more than 5 chars.",
        maxlength: "Company name should be less than 255 chars.",
      },
      phone: {
        required: "Please enter the contact number.",
        minlength: "Phone number must have 8 digits.",
        maxlength: "Phone number should be 10 digits.",
      },
      subject: {
        required: "Please enter the subject.",
        minlength: "Name must have more than 8 chars.",
        maxlength: "Name should be less than 200 chars.",
      },
      message: {
        required: "Please enter the message.",
        minlength: "Message must have more than 8 chars.",
      },
    },
  });
}

function pageScrollTop() {
  $("html, body").animate(
    {
      scrollTop: $(".form-detail").offset().top - 100,
    },
    2000
  );
}
