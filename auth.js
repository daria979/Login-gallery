// signup
const signupForm = document.querySelector('#signup-form');
signupForm.addEventListener('subbmit',(e) =>{
    e.preventDefault();

    //get user info
    const email = signupForm['signup_email'].value;
    const password = signupForm['signup_password'].value;

    //console.log(email, password);

    //sign up the user
    auth.createUserWithEmailAndPassword(email,password).then(cred =>{
        console.log(cred)
    })


})