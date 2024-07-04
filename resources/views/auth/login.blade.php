@extends('auth.master')

@section('title','صفحه ورود')

@section('content')
<form action="{{ route('login') }}" class="form" method="post">
    @csrf
    <a class="account-logo" href="index.html">
        <img src="img/weblogo.png" alt="">
    </a>
    <div class="form-content form-account">
        <input type="text" class="txt-l txt @error('email') is-invalid @enderror" name="email"
            value="{{ old('email') }}" autocomplete="email" autofocus placeholder="ایمیل یا شماره موبایل" dir="ltr">
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <input type="password" class="txt-l txt @error('password') is-invalid @enderror" name="password"
            autocomplete="current-password" placeholder="رمز عبور" dir="ltr">
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <br>
        <button type="submit" class="btn btn--login">ورود</button>
        <label class="ui-checkbox">
            مرا بخاطر داشته باش
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <span class="checkmark"></span>
        </label>
        @if (Route::has('password.request'))
        <div class="recover-password">
            <a href="{{ route('password.request') }}">بازیابی رمز عبور</a>
        </div>
        @endif
    </div>
    <div class="form-footer">
        <a href="{{ route('register') }}">صفحه ثبت نام</a>
    </div>
</form>
@endsection
