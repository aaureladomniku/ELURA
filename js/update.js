document.addEventListener("DOMContentLoaded", () => {

  function removeError(input, errorDiv) {
    input.addEventListener("input", () => {
      input.classList.remove("Error");
      errorDiv.classList.remove("Error");
      errorDiv.textContent = "";
    });

  }

  const updateProductForm = document.querySelector("#update");

  if (updateProductForm) {
    const title = updateProductForm.querySelector("input[name='upTitle']");
    const description = updateProductForm.querySelector(
      "input[name='upDescription']",
    );
    const price = updateProductForm.querySelector("input[name='upPrice']");
    const titleError = updateProductForm.querySelector(".titleError");
    const descError = updateProductForm.querySelector(".descError");
    const priceError = updateProductForm.querySelector(".priceError");
    const titleRegex = /^[A-Za-z\s.,!?'-]{5,25}$/;
    const descRegex = /^(?=.*[A-Za-z])[A-Za-z0-9\s.,!?'-]{5,}$/;
    const priceRegex = /^\d+(\.\d{1,2})?$/;

    removeError(title, titleError);
    removeError(description, descError);
    removeError(price, priceError);

    updateProductForm.addEventListener("submit", (e) => {
      let hasError = false;

      if (!title.value.trim()) {
        title.classList.add("Error");
        titleError.classList.add("Error");
        titleError.textContent = "Title cannot be empty";
        hasError = true;
      } 
      else if (!titleRegex.test(title.value.trim())) {
        title.classList.add("Error");
        titleError.classList.add("Error");
        titleError.textContent =
          "Title must be letters only, max 25 characters";
        hasError = true;
      }

      if (!description.value.trim()) {
        description.classList.add("Error");
        descError.classList.add("Error");
        descError.textContent = "Description cannot be empty";
        hasError = true;
      } 
      else if (!descRegex.test(description.value.trim())) {
        description.classList.add("Error");
        descError.classList.add("Error");
        descError.textContent = "Description must be at least 5 characters";
        hasError = true;
      }

      if (!price.value.trim()) {
        price.classList.add("Error");
        priceError.classList.add("Error");
        priceError.textContent = "Price cannot be empty";
        hasError = true;
      } 
      else if (!priceRegex.test(price.value.trim())) {
        price.classList.add("Error");
        priceError.classList.add("Error");
        priceError.textContent =
          "Price must be a positive number (up to 2 decimals)";
        hasError = true;
      }

      if (hasError) e.preventDefault();
    });
  }

  const updateUserForm = document.querySelector("#updateUser");
  if (updateUserForm) {
    const name = updateUserForm.querySelector("input[name='name']");
    const email = updateUserForm.querySelector("input[name='email']");
    const nameError = updateUserForm.querySelector(".nameError");
    const emailError = updateUserForm.querySelector(".emailError");
    const nameRegex = /^[A-Za-z\s]{3,20}$/;
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z.-]+\.[a-zA-Z]{2,}$/;

    removeError(name, nameError);
    removeError(email, emailError);

    updateUserForm.addEventListener("submit", (e) => {
      let hasError = false;

      if (!name.value.trim()) {
        name.classList.add("Error");
        nameError.classList.add("Error");
        nameError.textContent = "Name cannot be empty";
        hasError = true;
      }
       else if (!nameRegex.test(name.value.trim())) {
        name.classList.add("Error");
        nameError.classList.add("Error");
        nameError.textContent = "Name must be 3–20 letters only";
        hasError = true;
      }

      if (!email.value.trim()) {
        email.classList.add("Error");
        emailError.classList.add("Error");
        emailError.textContent = "Email cannot be empty";
        hasError = true;
      } 
      else if (!emailRegex.test(email.value.trim())) {
        email.classList.add("Error");
        emailError.classList.add("Error");
        emailError.textContent = "Please enter a valid email address";
        hasError = true;
      }

      if (hasError) e.preventDefault();
    });
  }

  const createProductForm = document.querySelector("#post");
  if (createProductForm) {
    const title = createProductForm.querySelector("#title");
    const description = createProductForm.querySelector("#description");
    const price = createProductForm.querySelector("#price");
    const image = createProductForm.querySelector("#img");
    const titleError = createProductForm.querySelector("#TitleError");
    const descriptionError =
      createProductForm.querySelector("#DescriptionError");
    const priceError = createProductForm.querySelector("#PriceError");
    const imageError = createProductForm.querySelector("#ImageError");
    const titleRegex = /^[A-Za-z\s]{5,25}$/;
    const descRegex = /^(?=.*[A-Za-z])[A-Za-z0-9\s.,!?'-]{5,}$/;
    const priceRegex = /^\d+(\.\d{1,2})?$/;
    const imageRegex = /\.(jpg|jpeg|png)$/i;

    removeError(title, titleError);
    removeError(description, descriptionError);
    removeError(price, priceError);
    removeError(image, imageError);

    createProductForm.addEventListener("submit", (e) => {
      let hasError = false;

      if (!title.value.trim()) {
        titleError.textContent = "Title cannot be empty";
        hasError = true;
      } 
      else if (!titleRegex.test(title.value.trim())) {
        titleError.textContent = "Title must be letters only (min-5, max-25)";
        hasError = true;
      }

      if (!description.value.trim()) {
        descriptionError.textContent = "Description cannot be empty";
        hasError = true;
      } 
      else if (!descRegex.test(description.value.trim())) {
        descriptionError.textContent =
          "Description must be at least 5 characters";
        hasError = true;
      }

      if (!price.value.trim()) {
        priceError.textContent = "Price cannot be empty";
        hasError = true;
      }
       else if (!priceRegex.test(price.value.trim())) {
        priceError.textContent = "Price must be a valid number";
        hasError = true;
      }

      if (!image.value) {
        imageError.textContent = "Image is required";
        hasError = true;
      }
       else if (!imageRegex.test(image.value)) {
        imageError.textContent = "Only jpg, jpeg, png allowed";
        hasError = true;
      }

      if (hasError) e.preventDefault();
    });
  }
});
