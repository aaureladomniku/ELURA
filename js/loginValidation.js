document.addEventListener("DOMContentLoaded", () => {
  const username = document.querySelector(".userName");
  const password = document.querySelector(".userPassword");
  const usernameError = document.querySelector(".userError");
  const passwordError = document.querySelector(".PasswordError");
  const form = document.querySelector("form");

  const passRegex = /^[A-Za-z0-9!@#$%^&*]{8,20}$/;
  const usernameRegex = /^(?=.*[A-Za-z])[A-Za-z0-9!_.-]{6,13}$/;

  function removeError(input, errorMessage) {
    input.addEventListener("input", () => {
      input.classList.remove("Error");
      errorMessage.classList.remove("Error");
    });
  }

  removeError(username, usernameError);
  removeError(password, passwordError);

  form.addEventListener("submit", (e) => {
    let hasError = false;

    if (username.value.trim() === "") {
      username.classList.add("Error");
      usernameError.classList.add("Error");
      usernameError.innerHTML = "fill in your username";
      hasError = true;
    }

    if (password.value.trim() === "") {
      password.classList.add("Error");
      passwordError.classList.add("Error");
      passwordError.innerHTML = "fill in your password";
      hasError = true;
    }

    if (username.value.trim() !== "" && !usernameRegex.test(username.value.trim())) {
      usernameError.classList.add("Error");
      username.classList.add("Error");
      usernameError.innerHTML = "Please enter a valid username";
      hasError = true;
    }

    if (password.value.trim() !== "" && !passRegex.test(password.value.trim())) {
      passwordError.classList.add("Error");
      password.classList.add("Error");
      passwordError.innerHTML = "Password must be 8-20 characters";
      hasError = true;
    }

    if (hasError) e.preventDefault();
  });
});
