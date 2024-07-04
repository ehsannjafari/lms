@extends('auth.master')

@section('title','بازیابی رمز عبور')

@section('content')
<form method="POST" action="{{ route('password.email') }}" class="form">
    @csrf

    <a class="account-logo" href="index.html">
        <img src="{{ asset('img/weblogo.png') }}" alt="">
    </a>
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <div class="form-content form-account">
        <input type="email" name="email" class="txt txt-l" value="{{ old('email') }}" required autocomplete="email"
            placeholder="ایمیل *" dir="ltr">
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <br>
        <button type="submit" class="btn btn-recoverpass">بازیابی</button>
    </div>
    <div class="form-footer">
        <a href="{{ route('login') }}">صفحه ورود</a>
    </div>
</form>
@endsection
