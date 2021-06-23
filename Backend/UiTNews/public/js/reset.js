const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

Validator({
  form: "#form-reset",
  rules: [
    // rule email
    Validator.isRequired("#email"),
    Validator.isEmail("#email"),
    // rule password
    Validator.isRequired("#password"),
    Validator.password("#password"),
    // rule confirm password
    Validator.isRequired("#confirmPassword"),
    Validator.confirmPassword("#confirmPassword", "#password"),
  ],

});

