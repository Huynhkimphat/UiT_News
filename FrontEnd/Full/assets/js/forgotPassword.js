const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

Validator({
  form: "#form-forgot-password",
  rules: [
    // rule email
    Validator.isRequired("#email"),
    Validator.isEmail("#email"),
  ],
  submitSuccess: (data) => {
    alert("No error in validation");
    window.location.pathname =
      "FrontEnd/Authenticate/CheckYourEmailPage/checkYourEmail.html";
    console.log(data);
  },
});
