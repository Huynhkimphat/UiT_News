const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

Validator({
    form: "#form-register",
    rules: [
        // rule email
        Validator.isRequired("#email"),
        Validator.isEmail("#email"),
        // rule password
        Validator.isRequired("#password"),
        Validator.password("#password"),
        // rule confirm password
        Validator.isRequired("#confirm-password"),
        Validator.confirmPassword("#confirm-password", "#password"),
    ],
    submitSuccess: (data) => {
        window.location.pathname = "FrontEnd/Full/login.html";

        console.log(data);
    },
});

console.log(isFirstSubmit);