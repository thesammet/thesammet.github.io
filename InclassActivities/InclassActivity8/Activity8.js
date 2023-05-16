$("#birthday").datepicker();
$(document).ready(function () {
    var cities = ["ASP", "C++", "JAVA", "C#"];
    $("#programmingLanguage").autocomplete({
        source: cities
    });
});
$(document).ready(function () {
    $("form").submit(function (event) {
        var invalidInputs = false;
        var programmingLanguage = $("#programmingLanguage").val().trim();
        var email = $("#email").val().trim();
        var website = $("#website").val().trim();

        if (programmingLanguage === "") {
            invalidInputs = true;
            $("#programmingLanguage").addClass("invalid");
        } else {
            $("#programmingLanguage").removeClass("invalid");
        }

        if (!isValidEmail(email)) {
            invalidInputs = true;
            $("#email").addClass("invalid");
        } else {
            $("#email").removeClass("invalid");
        }

        if (!isValidURL(website)) {
            invalidInputs = true;
            $("#website").addClass("invalid");
        } else {
            $("#website").removeClass("invalid");
        }

        if (invalidInputs) {
            $(".warning").show();
            event.preventDefault();
        } else {
            $(".warning").hide();
        }
    });

    function isValidEmail(email) {
        // Email validation logic
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    function isValidURL(url) {
        // URL validation logic
        var urlRegex = /^(ftp|http|https):\/\/[^ "]+$/;
        return urlRegex.test(url);
    }
});