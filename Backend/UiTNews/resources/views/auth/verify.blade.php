{{-- @extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Verify Your Email Address abcdef </div>
                  <div class="card-body">
                   @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                           {{ __('A fresh verification link has been sent to your email address.') }}
                       </div>
                   @endif
                   <a href="{{ url('/password/reset/'.$token) }}">Click Here</a>
               </div>
           </div>
       </div>
   </div>
</div> --}}

{{-- //-------------------------------------------- --}}
@extends('layouts.app')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
     <!-- login styles -->
     <link rel="stylesheet" href="././css/email.css">
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
