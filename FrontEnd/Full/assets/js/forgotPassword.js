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
        window.location.pathname = "/FrontEnd/Full/checkYourEmail.html";
    },
});