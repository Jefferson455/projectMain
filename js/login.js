document.getElementById("btn__log-in").addEventListener("click", login)
document.getElementById("btn__register").addEventListener("click", register)

//variables

var containerFormRegister = document.querySelector('.container__login-register');
var formLogin = document.querySelector('.formulario__login');
var formRegister = document.querySelector('.formulario__register');
var boxBackLogin = document.querySelector('.box__back-login');
var boxBackRegister = document.querySelector('.box__back-register');

function register() {
    if (window.innerWidth > 850) {
        formRegister.style.display = "block";
        containerFormRegister.style.left = "410px";
        formLogin.style.display = "none";
        boxBackRegister.style.opacity = "0"
        boxBackLogin.style.opacity = "1";

    } else {
        formRegister.style.display = "block";
        containerFormRegister.style.left = "0px";
        formLogin.style.display = "none";
        boxBackRegister.style.display = "none"
        boxBackLogin.style.display = "block";
        boxBackLogin.style.opacity = "1";
    }
}

function login() {
    if (window.innerWidth > 850) {
        formRegister.style.display = "none";
        containerFormRegister.style.left = "10px";
        formLogin.style.display = "block";
        boxBackRegister.style.opacity = "1"
        boxBackLogin.style.opacity = "0";
    } else {

        formRegister.style.display = "none";
        containerFormRegister.style.left = "0px";
        formLogin.style.display = "block";
        boxBackRegister.style.display = "block"
        boxBackLogin.style.display = "none";

    }
}