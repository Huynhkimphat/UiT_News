const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

Validator({
    form: "#form-login",
    rules: [
        // rule email
        Validator.isRequired("#email"),
        Validator.isEmail("#email"),
        // rule password
        Validator.isRequired("#password"),
        Validator.password("#password"),
    ],
    submitSuccess: (data) => {
        window.location.pathname = "FrontEnd/Full/detail.html";

        console.log(data);
    },
});