let isFirstSubmit = false;

const Validator = (formObj) => {
  let selectorRules = {};

  const formElement = $(formObj.form);

  if (formElement) {
    // Add event submit form
    formElement.onsubmit = (e) => {
      // Set true and start validate
      isFirstSubmit = true;

      let isFormValid = true;

      formObj.rules.forEach((rule) => {
        const inputElement = $(rule.selector);
        const isValid = Validate(inputElement, selectorRules[rule.selector]);
        if (!isValid) {
          isFormValid = false;
        }
      });
      if (isFormValid) {
        const inputsElement = formElement.querySelectorAll("[name]");
        let formData = {};
        inputsElement.forEach((input) => {
          formData = {
            ...formData,
            [input.name]: input.value,
          };
        });
        formObj.submitSuccess(formData);
      }
      e.preventDefault();
    };

    // validate form
    formObj.rules.forEach((rule) => {
      const inputElement = $(rule.selector);

      // save rule by inputs
      if (Array.isArray(selectorRules[rule.selector])) {
        selectorRules[rule.selector].push(rule.test);
      } else {
        selectorRules[rule.selector] = [rule.test];
      }

      //  Add event onblur input element
      inputElement.onblur = () => {
        Validate(inputElement, selectorRules[rule.selector]);
      };

      inputElement.oninput = () => {
        isFirstSubmit && Validate(inputElement, selectorRules[rule.selector]);
      };
    });
  } else {
    console.log("form not found");
  }
};

// init rules
Validator.isRequired = (selector) => {
  return {
    selector: selector,
    test: (name, value) => {
      return rules.isRequired(name, value);
    },
  };
};

Validator.isEmail = (selector) => {
  return {
    selector: selector,
    test: (name, value) => {
      return rules.isEmail(name, value);
    },
  };
};
Validator.password = (selector) => {
  return {
    selector: selector,
    test: (name, value) => {
      return rules.password(name, value);
    },
  };
};
Validator.confirmPassword = (selector, selectorConfirm) => {
  const confirmElement = $(selectorConfirm);

  return {
    selector: selector,
    test: (name, value) => {
      return rules.confirmPassword(name, confirmElement.value, value);
    },
  };
};
