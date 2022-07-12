const firstName = document.getElementById('firstname')
const email = document.getElementById('email')
const password = document.getElementById('password')
const form = document.getElementById('loginform')
const errorElement = document.getElementById('error')

form.addEventListener('submit', (e) => {
    let message = []
    if(firstName.value === '' || firstName.value === null) {
        message.push('*Name is required')
    }
    if (password.value.length <= 6) {
        message.push ('*Password must be longer than 6 characters')
    }
    if (password.value.length >= 20) {
        message.push ('*Password must be less than 20 characters')
    }
    
    if(message.length > 0) {
        e.preventDefault()
        errorElement.innerText = message.join(', ')
    } 
})

function loginform(loginbutton) {
    if(loginbutton.firstName.value && loginform.email.password.value) {
    let firstName=document.getElementById("firstName").value;
    document.write('<html><body><h1><center>')
    document.write("Hello" + " ");
    document.write(firstName);
    document.write('</center></h1></body></html>');
    }
    else alert("Please enter the correct details to continue");
}