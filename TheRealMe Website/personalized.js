const email = document.getElementById('email')


form.addEventListener('submit', (e) => {
    let message = []
    if(email.value === '' || email.value === null) {
        message.push('*Email is required')
    }
})


function newsletter(subscribe) {
    if(subscribe.email.value && newsletter.email.value) {
    let email=document.getElementById("email").value;
    document.write("subscription successful");
    }
    else alert("Please enter the correct details to continue");
}









// const logInButton = document.getElementById('loginbutton')
// const registerButton = document.getElementById('register')

// form.addEventListener('submit', (e) => {
    
//     validateForm();

//     if(isFormValid() === true) {
//         form.submit();
//     } else {
//         e.preventDefault();
//     }

// });

// function isFormValid() {
//     const inputContainers = form.querySelectorAll('.input');
//     let result=true;
//     inputContainers.forEach((container) => {
//         if(container.classList.contains('error')) {
//             result=false;
//         }
//     });
//     return result;
// }
