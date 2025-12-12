const form = document.querySelector("form");

const nameInput = document.querySelector(".SignupName");
const emailInput = document.querySelector(".SignupEmail");
const passInput = document.querySelector(".SignupPassword");
const confirmPassInput = document.querySelector(".ConfirmedPassword");

const nameError = document.querySelector(".nameError");
const emailError = document.querySelector(".emailError");
const passError = document.querySelector(".passwordError");
const confirmPassError = document.querySelector(".confirmedPasswordError");

const nameRegex = /^[A-Za-z\s]{6,13}$/;
const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
const passRegex = /^[A-Za-z0-9!@#$%^&*]{8,20}$/;

function removeError(input, errorMessage) {
    input.addEventListener("input", () => {
        input.classList.remove("error");
        errorMessage.classList.remove("error");
    });
}

removeError(nameInput, nameError);
removeError(emailInput, emailError);
removeError(passInput, passError);
removeError(confirmPassInput, confirmPassError);

form.addEventListener("submit", (e) => {
    let hasError = false;

    if (!nameRegex.test(nameInput.value.trim())) {
        nameInput.classList.add("error");
        nameError.classList.add("error");
        nameError.innerHTML = "Name must be 3-20 letters only";
        hasError = true;
    }

    if (!emailRegex.test(emailInput.value.trim())) {
        emailInput.classList.add("error");
        emailError.classList.add("error");
        emailError.innerHTML = "Please enter a valid email";
        hasError = true;
    }

    if (!passRegex.test(passInput.value.trim())) {
        passInput.classList.add("error");
        passError.classList.add("error");
        passError.innerHTML = "Password must be minimum 6 chars";
        hasError = true;
    }

    if (confirmPassInput.value.trim() !== passInput.value.trim()) {
        confirmPassInput.classList.add("error");
        confirmPassError.classList.add("error");
        confirmPassError.innerHTML = "Passwords do not match";
        hasError = true;
    }

    if (hasError) e.preventDefault();
});
