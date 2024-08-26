$(document).ready(function() {
    function validateName() {
        var nameInput = $('#nameInput').val();
        var nameRegex = /^[a-zA-Z\s]*$/;

        if (!nameRegex.test(nameInput)) {
            $('#name-error-message').show();
            return false;
        } else {
            $('#name-error-message').hide();
            return true;
        }
    }

    function validatePhone() {
        var phoneInput = $('#phoneInput').val();
        var phoneRegex = /^(?:\+92\s?|0)3\d{9}$/;

        if (!phoneRegex.test(phoneInput)) {
            $('#phone-error-message').show();
            return false;
        } else {
            $('#phone-error-message').hide();
            return true;
        }
    }

    function validateCnic() {
        var cnicInput = $('#cnicInput').val();
        var cnicRegex = /^\d{13}$/;

        if (!cnicRegex.test(cnicInput)) {
            $('#cnic-error-message').show();
            return false;
        } else {
            $('#cnic-error-message').hide();
            return true;
        }
    }

    $('#myform').submit(function(event) {
        var isNameValid = validateName();
        var isPhoneValid = validatePhone();
        var isCnicValid = validateCnic();

        if (!isNameValid || !isPhoneValid || !isCnicValid) {
            alert("Please correct the highlighted errors before submitting the form.");
            event.preventDefault();
        }
    });

    $('#nameInput').on('input blur focus', function() {
        validateName();
    });

    $('#phoneInput').on('input blur focus', function() {
        validatePhone();
    });

    $('#cnicInput').on('input blur focus', function() {
        validateCnic();
    });

    // Ensure that only digits can be entered in CNIC input
    $('#cnicInput').on('input', function() {
        this.value = this.value.replace(/\D/g, '');
    });
});


// error msg for number of people
document.getElementById('numberOfPeople').addEventListener('input', function () {
    var input = this;
    var errorMessage = document.getElementById('error-message');
    if (input.value > 1500) {
        input.setCustomValidity('Invalid');
        errorMessage.style.display = 'block';
    } else {
        input.setCustomValidity('');
        errorMessage.style.display = 'none';
    }
});
