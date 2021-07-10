<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- register styles -->
    <link rel="stylesheet" href="././css/Register.css">
     <!-- font awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
     integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
     crossorigin="anonymous" />
     <!-- main styles authen -->
     <link rel="stylesheet" href="././css/main.css">
     <!-- link base styles -->
     <link rel="stylesheet" href="././css/new.css">
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
            <div class="authen-page__container__banner col-xxl-6 col-xl-6 col-lg-12">
                <img src="././css/2.png" alt="banner-logo">
            </div>
            <div class="authen-page__container__form col-xxl-6 col-xl-6 col-lg-12">
                <div class="authen__link">
                    <div class="authen__link__wrap-text">
                        <p class="text-color-gray">Already have an account ?</p>
                        <a href="{{ url('/login') }}" class="text-color-primary"> Login </a>
                    </div>
                </div>

                <form method="POST" action="{{ route('register') }}"
                 id="form-register" class="authen__form-wrapper">
                    @csrf
                    <div class="authen__form-wrapper__title">
                        <p class="text-color-primary">Register</p>
                        <p class="text-color-normal">Account</p>
                    </div>
                    <div class="authen__form-wrapper__inputs">
                        <div class="mb-3 authen__form__control">
                            <label for="name" class="form-label authen__form-wrapper__inputs__label" >{{ __('Name') }}</label>
                            <input id="name" name="name" type="text" class="form-control authen__form-wrapper__inputs__input "  placeholder="Enter your name"  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus >
                            <span class="authen__form__error"></span>
                        </div>
                        <div class="mb-3 authen__form__control">
                            <label for="email" class="form-label authen__form-wrapper__inputs__label" >{{ __('E-Mail Address') }}</label>
                            <input  id="email" name="email" type="email" class="form-control authen__form-wrapper__inputs__input "  placeholder="Enter your Email"
                             name="email" value="{{ old('email') }}" required autocomplete="email">
                            <span class="authen__form__error"></span>
                        </div>
                        <div class="mb-3 authen__form__control">
                            <label for="password" class="form-label authen__form-wrapper__inputs__label" >{{ __('Password') }}</label>
                            <input id="password" name="password" type="password" class="form-control authen__form-wrapper__inputs__input
                            " placeholder="Enter your password"
                             name="password" >
                            <span class="authen__form__error"></span>
                        </div>
                        <div class="mb-3 authen__form__control">
                            <label for="password-confirm"
                            class="form-label authen__form-wrapper__inputs__label" >{{ __('Confirm Password') }}</label>
                            <input id="confirmPassword" type="password"
                            name="password_confirmation"
                            class="form-control authen__form-wrapper__inputs__input"
                            placeholder="Confirm your password">
                            <span
                            id="error-confirm-password"
                             class="authen__form__error"></span>
                        </div>
                    </div>
                    <div class="authen__form-wrapper__action">
                        <button type="submit"
                        class="btn btn-primary authen__form-wrapper__action__btn mb-3 btn-login">
                            {{ __('Register') }}
                        </button>
                        <div class="line-separate">
                            <div class="line-separate__text-container">
                                <p class="text-color-gray">Or</p>
                            </div>
                        </div>
                        <a href="{{ url('/login') }}" role="button" class="btn-link_layout btn btn-primary authen__form-wrapper__action__btn mt-4 authen__form-wrapper__action__btn--secondary">
                            <p>
                                Login Account
                            </p>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
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
<!-- my script -->
<script src="././js/rule.js" type="text/javascript"></script>
<script src="././js/ValidationInput.js" type="text/javascript"></script>
<script src="././js/Validator.js" type="text/javascript"></script>
<script src="././js/register.js"></script>
</html>

