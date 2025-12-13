const nameRegex = /^[A-Za-z]{2,20}$/;
const phoneRegex = /^[0-9]{6,20}$/;
const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

const form = document.querySelector("form");

const nameInput = document.querySelector('input[placeholder="NAME"]');
const phoneInput = document.querySelector('input[placeholder="PHONE"]');
const emailInput = document.querySelector('input[placeholder="EMAIL"]');
const messageInput = document.querySelector('textarea[placeholder="MESSAGE"]');

const nameError = document.getElementById("nameError");
const phoneError = document.getElementById("phoneError");
const emailError = document.getElementById("emailError");
const textError = document.getElementById("textError");

function removeError(input, errorMessage) {
  input.addEventListener("input", () => {
    input.classList.remove("Error");
    errorMessage.classList.remove("Error");
    errorMessage.textContent = "";
  });
}

removeError(nameInput, nameError);
removeError(phoneInput, phoneError);
removeError(emailInput, emailError);
removeError(messageInput, textError);

form.addEventListener("submit", function (e) {
  e.preventDefault();

  let isValid = true;

  if (!nameRegex.test(nameInput.value.trim())) {
    nameInput.classList.add("Error");
    nameError.classList.add("Error");
    nameError.textContent = "Please enter a valid name (letters only)";
    isValid = false;
  }

  if (!phoneRegex.test(phoneInput.value.trim())) {
    phoneInput.classList.add("Error");
    phoneError.classList.add("Error");
    phoneError.textContent = "Please enter a valid phone number (6-15 digits)";
    isValid = false;
  }

  if (!emailRegex.test(emailInput.value.trim())) {
    emailInput.classList.add("Error");
    emailError.classList.add("Error");
    emailError.textContent = "Please enter a valid email address";
    isValid = false;
  }

  if (messageInput.value.trim() === "") {
    messageInput.classList.add("Error");
    textError.classList.add("Error");
    textError.textContent = "Message cannot be empty";
    isValid = false;
  }

  if (isValid) {
    alert(
      "we recived your message we will get back to you as quick as we can!"
    );
    form.reset();
  }
});
