// const firstName = document.getElementById('firstname')
// const surName = document.getElementById('surname')
const email = document.getElementById('email')
// const telephone = document.getElementById('mobile')
const password = document.getElementById('password')
const retypePassword = document.getElementById('confirm-password')
const form = document.getElementById('registerform')
const errorElement = document.getElementById('error')


form.addEventListener('submit', (e) => {
    let message = []
    // if(firstName.value === '' || firstName.value === null) {
    //     message.push('Name is required')
    // }
    // if(surName.value === '' || surName.value === null) {
    //     message.push('Second name is required')
    // }
    if(password.value === '' || password.value === null) {
        message.push('Password must be provided')
    }
    if (password.value.length <= 6) {
        message.push ('Password must be longer than 6 characters')
    }
    else if (password.value.length >= 20) {
        message.push ('Password must be less than 20 characters')
    }
    if(retypePassword.value === '' || retypePassword.value === null) {
        message.push('Retypepassword cannot be empty')
    }    
    else if(retypePassword.value !== password.value) {
        message.push ('Password must match')
    }
    if(message.length > 0) {
        e.preventDefault()
        errorElement.innerText = message.join(', ')
    } 
})


function registerform(register) {
    if(register.firstName.surName.value && registerform.email.password.value) {
    let firstName=document.getElementById("firstName").value;
    document.write('<html><body><h1><center>')
    document.write("Hello" + " ");
    document.write(firstName);
    document.write('</center></h1></body></html>');
    }
    else alert("Please enter the correct details to continue");
}