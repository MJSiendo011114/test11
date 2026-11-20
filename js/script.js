// Show and hide password

const showPassword = document.getElementById("showPassword");
const password = document.getElementById("password");

showPassword.addEventListener("change", function() {

    if (this.checked) {
        password.type = "text";
    } else {
        password.type = "password";
    }

});


// Validate login form

const loginForm = document.getElementById("loginForm");

loginForm.addEventListener("submit", function(event) {

    const username = document.getElementById("username").value.trim();
    const passwordValue = password.value;

    if (username === "" || passwordValue === "") {

        event.preventDefault();

        alert("Please enter your username and password!");

    }

});