document.addEventListener("DOMContentLoaded", () => {
  const form = document.querySelector("form");

  const title = form.querySelector("input[name='upTitle']");
  const description = form.querySelector("input[name='upDescription']");
  const price = form.querySelector("input[name='upPrice']");

  const titleError = form.querySelector(".titleError");
  const descError = form.querySelector(".descError");
  const priceError = form.querySelector(".priceError");

  const titleRegex = /^[A-Za-z\s.,!?'-]{1,25}$/
  const descRegex = /^(?=.*[A-Za-z])[A-Za-z0-9\s.,!?'-]{5,}$/; 
  const priceRegex = /^\d+(\.\d{1,2})?$/;


  function removeError(input, errorDiv) {
    input.addEventListener("input", () => {
      input.classList.remove("Error");
      errorDiv.classList.remove("Error");
      errorDiv.innerHTML = "";
    });
  }

  removeError(title, titleError);
  removeError(description, descError);
  removeError(price, priceError);

  
  form.addEventListener("submit", (e) => {
    let hasError = false;

  
    if (!title.value.trim()) {
      title.classList.add("Error");
      titleError.classList.add("Error");
      titleError.innerHTML = "Title cannot be empty";
      hasError = true;
    } else if (!titleRegex.test(title.value.trim())) {
      title.classList.add("Error");
      titleError.classList.add("Error");
      titleError.innerHTML = "Title must be letters only, max 14 characters";
      hasError = true;
    }

    if (!description.value.trim()) {
      description.classList.add("Error");
      descError.classList.add("Error");
      descError.innerHTML = "Description cannot be empty";
      hasError = true;
    } else if (!descRegex.test(description.value.trim())) {
      description.classList.add("Error");
      descError.classList.add("Error");
      descError.innerHTML = "Description must be at least 10 characters and include at least one letter";
      hasError = true;
    }

    if (!price.value.trim()) {
      price.classList.add("Error");
      priceError.classList.add("Error");
      priceError.innerHTML = "Price cannot be empty";
      hasError = true;
    } else if (!priceRegex.test(price.value.trim())) {
      price.classList.add("Error");
      priceError.classList.add("Error");
      priceError.innerHTML = "Price must be a positive number (up to 2 decimals)";
      hasError = true;
    }

    if (hasError) e.preventDefault(); 
  });
});
