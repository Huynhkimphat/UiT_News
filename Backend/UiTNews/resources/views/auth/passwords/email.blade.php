<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
     <!-- login styles -->
     <link rel="stylesheet" href="../css/email.css">
     <!-- font awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
     integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
     crossorigin="anonymous" />
    <!-- main styles authen -->
    <link rel="stylesheet" href="../css/main.css">
    <!-- link base styles -->
    <link rel="stylesheet" href="../css/new.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>

<body>
    <div class="authen-page">

        <div class="authen-page__container row">
            <a href="{{ url('/login') }}" class="authen-page__btn-back btn btn-outline-primary">
                <i class="fas fa-chevron-left"></i>
                <p>Back</p>
            </a>
            <div  class="authen-page__container__banner col-xxl-6 col-xl-6 col-lg-12">
                <img src=".././css/2.png" alt="banner-logo">
            </div>
            <form method="POST" action="../forget-password" id="form-forgot-password" class="authen-page__container__form col-xxl-6 col-xl-6 col-lg-12">
                @csrf
                <div class="authen__form-wrapper forgot-password-form__wrapper">
                    <div class="authen__form-wrapper__title">
                        <p class="text-color-primary">Forgot</p>
                        <p class="text-color-normal">Password</p>
                    </div>

                    <div class="authen__form-wrapper__inputs">
                        <div class="mb-3 authen__form__control">
                            <label for="email"
                                class="form-label authen__form-wrapper__inputs__label"
                                >{{ __('E-Mail Address') }}</label>
                            <input type="email" class="form-control authen__form-wrapper__inputs__input"
                                 id="email" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus placeholder="Enter your Email">
                            <span class="authen__form__error"></span>

                        </div>
                    </div>
                    <div class="authen__form-wrapper__action">
                        <button type="submit" class="mb-4 btn btn-primary authen__form-wrapper__action__btn btn-link_layout">
                            <p>Forgot password</p>
                        </button>
                        <div class="line-separate">
                            <div class="line-separate__text-container">
                                <p class="text-color-gray">Or</p>
                            </div>
                        </div>
                        <a role="button" href="{{ url('/login') }}" class="btn-link_layout mb-4 btn btn-primary authen__form-wrapper__action__btn mt-4 authen__form-wrapper__action__btn--secondary">Login Account</a>
                        <a role="button" href="{{ url('/register') }}" class="btn-link_layout btn btn-primary authen__form-wrapper__action__btn mt-4 authen__form-wrapper__action__btn--primary">Register Account</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
<!-- my script -->
<script src="../js/rule.js" type="text/javascript"></script>
<script src="../js/ValidationInput.js" type="text/javascript"></script>
<script src="../js/Validator.js" type="text/javascript"></script>
<script src="../js/email.js"></script>

<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ"
    crossorigin="anonymous"></script>

</html>
