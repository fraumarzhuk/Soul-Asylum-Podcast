document.addEventListener("DOMContentLoaded", function() {
 fields.firstName = document.getElementById('yourName');
 fields.email = document.getElementById('email');
 fields.address = document.getElementById('userText');

})

function isNotEmpty(value) {
 if (value == null || typeof value == 'undefined' ) return false;
 return (value.length > 0);
}

function isEmail(email) {
 let regex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
 return regex.test(String(email).toLowerCase());
}

class User {
 constructor(yourName, email, userText) {
 this.yourName = yourName;
 this.email = email;
 this.userText = userText;
 }
}
