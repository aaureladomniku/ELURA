const form = document.querySelector("form");

const nameInput = document.querySelector(".SignupName");
const emailInput = document.querySelector(".SignupEmail");
const passInput = document.querySelector(".SignupPassword");
const confirmPassInput = document.querySelector(".ConfirmedPassword");

const nameError = document.querySelector(".nameError");
const emailError = document.querySelector(".emailError");
const passError = document.querySelector(".passwordError");
const confirmPassError = document.querySelector(".confirmedPasswordError");

const nameRegex = /^[A-Za-z\s]{3,20}$/;
const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z.-]+\.[a-zA-Z]{2,}$/;
const passRegex =  /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,20}$/;

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
        passError.innerHTML = "Password must have 8-20 characters";
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
