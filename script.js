
document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('modal');
    const loginBtn = document.getElementById('loginBtn');
    const closeBtn = document.querySelector('.close');
    const loginForm = document.getElementById('loginForm');
    const signupForm = document.getElementById('signupForm');
    const showSignup = document.getElementById('showSignup');
    const showLogin = document.getElementById('showLogin');

    // Open modal and show login form
    loginBtn.addEventListener('click', () => {
        modal.style.display = 'block';
        loginForm.style.display = 'block'; // Show the login form
        signupForm.style.display = 'none'; // Hide the signup form
    });

    // Close modal
    closeBtn.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    // Switch to signup form
    showSignup.addEventListener('click', () => {
        loginForm.style.display = 'none'; // Hide the login form
        signupForm.style.display = 'block'; // Show the signup form
    });

    // Switch to login form
    showLogin.addEventListener('click', () => {
        signupForm.style.display = 'none'; // Hide the signup form
        loginForm.style.display = 'block'; // Show the login form
    });

    // Close modal when clicking outside of the content
    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });
});
