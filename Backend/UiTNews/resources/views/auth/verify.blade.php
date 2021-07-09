<!DOCTYPE html>
<html lang="en">
<body>
    <div class="authen-page">
        <div class="authen-page__container row">
                <div class="authen__form-wrapper forgot-password-form__wrapper">
                    <div class="authen__form-wrapper__title">
                        <p class="text-color-primary">Forgot Password</p>
                    </div>
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                       {{ __('A fresh verification link has been sent to your email address.') }}
                   </div>
                    @endif
                    <div class="authen__form-wrapper__action">
                        <a href="{{ url('/password/reset/'.$token) }}" class="mb-4 btn btn-primary authen__form-wrapper__action__btn btn-link_layout">
                            <p>Click Here</p>
                        </a>
                        <div class="line-separate">
                            <div class="line-separate__text-container">
                                <p class="text-color-gray">Or</p>
                            </div>
                        </div>
                        <a role="button" href="{{ url('/register') }}" class="btn-link_layout btn btn-primary authen__form-wrapper__action__btn mt-4 authen__form-wrapper__action__btn--primary">Register Account</a>
                    </div>
              </div>
        </div>
    </div>
</body>
</html>
