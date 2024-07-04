function validateLoginForm() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    if (username.trim() === '' || password.trim() === '') {
        alert('Please enter both username and password.');
        return false;
    }


    return true;
}

function validateSignupForm() {
    var fullname = document.getElementById('fullname').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    if (fullname.trim() === '' || email.trim() === '' || password.trim() === '') {
        alert('Please fill in all the fields.');
        return false;
    }


    return true;
}