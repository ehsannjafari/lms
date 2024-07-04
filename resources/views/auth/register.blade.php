@extends('auth.master')

@section('title','صفحه ثبت نام')

@section('content')
<form method="POST" action="{{ route('register') }}" class="form">
    @csrf
    <a class="account-logo" href="index.html">
        <img src="img/weblogo.png" alt="">
    </a>
    <div class="form-content form-account">
        <input type="text" name="username" class="txt @error('username') is-invalid @enderror"
            value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="نام کاربری *">
        @error('username')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <input type="text" name="email" class="txt txt-l @error('email') is-invalid @enderror"
            value="{{ old('email') }}" required autocomplete="email" placeholder="ایمیل *" dir="ltr">
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <input type="text" name="phone" class="txt txt-l @error('phone') is-invalid @enderror"
            value="{{ old('phone') }}" autocomplete="phone" placeholder="شماره موبایل" dir="ltr">
        @error('phone')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <input type="text" name="password" class="txt txt-l @error('password') is-invalid @enderror" required
            autocomplete="new-password" placeholder="رمز عبور *" dir="ltr">
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <input type="text" name="password_confirmation" required id="password-confirm" class="txt txt-l"
            autocomplete="new-password" placeholder="تایید رمز عبور *" dir="ltr">
        <span class="rules">رمز عبور باید حداقل ۸ کاراکتر و ترکیبی از حروف بزرگ، حروف کوچک، اعداد و
            کاراکترهای غیر الفبا مانند !@#$%^&*() باشد.</span>
        <br>
        <button class="btn continue-btn">ثبت نام و ادامه</button>

    </div>
    <div class="form-footer">
        <a href="{{ url('login') }}">صفحه ورود</a>
    </div>
</form>
@endsection
