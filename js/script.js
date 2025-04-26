const signInForm = document.querySelector(".sign_in");
const signUpForm = document.querySelector(".sign_up");
const btn = document.querySelector(".changeFormBtn");

let currentForm = "Sign in";

signUpForm.style.display = "none";

function changeForm() {
    if (currentForm == "Sign in") {
        signInForm.style.display = "none";
        signUpForm.style.display = "flex";
        btn.textContent = "Sign in";
        currentForm = "Sign up";
    }
    else if (currentForm == "Sign up") {
        signUpForm.style.display = "none";
        signInForm.style.display = "flex";
        btn.textContent = "Create account";
        currentForm = "Sign in";
    }
}