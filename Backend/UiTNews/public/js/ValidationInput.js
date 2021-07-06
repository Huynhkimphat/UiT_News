const Validate = (inputElement, rules) => {
    var { name, value } = inputElement;
    const rulesElement = rules;
    const errorMessageElement = inputElement.parentElement.querySelector(
      ".authen__form__error"
    );
    let resultError = {};

    for (let i = 0; i < rulesElement.length; i++) {
      const errorMessage = rulesElement[i](name, value);
      if (errorMessage) {
        resultError = errorMessage;
        break;
      }
    }
    if (resultError.message) {
      errorMessageElement.innerText = resultError.message;
      errorMessageElement.classList.add("invalid");
    } else {
      errorMessageElement.innerText = "";
      errorMessageElement.classList.remove("invalid");
    }

    return !resultError.message;
  };
