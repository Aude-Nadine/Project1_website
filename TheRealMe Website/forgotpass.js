// const email = document.getElementById('email')
// const telephone = document.getElementById('mobile')
const newPassword = document.getElementById('password')
const retypePassword = document.getElementById('confirm-password')
const form = document.getElementById('newpasswordlogin')
const errorElement = document.getElementById('error')


form.addEventListener('submit', (e) => {
    let message = []
    // if(email.value === '' || email.value === null) {
    //     message.push('Email is required')
    // }
    // if(telephone.value === '' || telephone.value === null) {
    //     message.push('Phone number is required')
    // }
    if (newPassword.value.length <= 6) {
        message.push ('Password must be longer than 6 characters')
    }
    if (newPassword.value.length >= 20) {
        message.push ('Password must be less than 20 characters')
    }
    if (retypePassword.value !== newPassword.value ) {
        message.push ('Password must match')
    }
    if(message.length > 0) {
        e.preventDefault()
        errorElement.innerText = message.join(', ')
    }  
})

