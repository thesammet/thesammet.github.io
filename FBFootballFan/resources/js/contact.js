function validateForm() {
    var firstName = document.getElementById("fname").value;
    var lastName = document.getElementById("lname").value;
    var subject = document.getElementById("subject").value;

    if (firstName == "") {
        document.getElementById("result").innerText = "First name must be filled out";
        return false;
    }

    if (lastName == "") {
        document.getElementById("result").innerText = "Last name must be filled out";
        return false;
    }

    if (subject == "") {
        document.getElementById("result").innerText = "Subject must be filled out";
        return false;
    }

    document.getElementById("result").innerText = "First Name: " + firstName + "\nLast Name: " + lastName + "\nSubject: " + subject;
    return false; // Prevent form submission for demonstration purposes
}

$(function () {
    $("#accordion").accordion();
});