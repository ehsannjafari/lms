@extends('auth.master')

@section('title','بازیابی رمز عبور')

@section('content')
<form action="{{ route('password.update') }}" method="post" class="form">
    @csrf
    <a class="account-logo" href="{{ route('login') }}">
        <img src="{{ asset('img/weblogo.png') }}" alt="">
    </a>
    <div class="form-content form-account">
        <input type="hidden" name="token" value="{{ $token }}">

        <input type="text" class="txt txt-l" name="email" value="{{ $email ?? old('email') }}" required
            autocomplete="email" autofocus placeholder="ایمیل *" dir="ltr">
        @error('email')
        <p class="mycourse ">{{ $message }}</p>
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <input type="text" name="password" class="txt txt-l" required autocomplete="new-password"
            placeholder="رمز عبور جدید *" dir="ltr">
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <input type="text" name="password_confirmation" required id="password-confirm" class="txt txt-l"
            autocomplete="new-password" placeholder=" تایید رمز عبور جدید *" dir="ltr">
        <span class="rules">رمز عبور باید حداقل ۸ کاراکتر و ترکیبی از حروف بزرگ، حروف کوچک، اعداد و
            کاراکترهای غیر الفبا مانند !@#$%^&*() باشد.</span>
        <br>
        <button class="btn btn-recoverpass">تغییر رمز عبور</button>

    </div>
    <div class=" form-footer">
        <a href="{{ url('login') }}">صفحه ورود</a>
    </div>
</form>
@endsection
