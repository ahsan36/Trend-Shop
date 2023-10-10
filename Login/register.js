const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');

const btnLogin = document.querySelector('.btn-login');

const iconClose = document.querySelector('.icon-close');

// Add event listener on register 

registerLink.addEventListener('click', ()=> {
    wrapper.classList.add('active');
});

loginLink.addEventListener('click', ()=> {
    wrapper.classList.remove('active');
});

// Add event listener on login

btnLogin.addEventListener('click', ()=> {
    wrapper.classList.add('active-btn');
});

iconClose.addEventListener('click', ()=> {
    wrapper.classList.remove('active-btn');
});