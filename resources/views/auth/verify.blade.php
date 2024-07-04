@extends('auth.master')

@section('title','تایید ایمیل')

@section('content')
<div class="form">
    @csrf
    <a class="account-logo" href="index.html">
        <img src="{{ asset('img/weblogo.png') }}" alt="">
    </a>
    <div class="form-content form-account">
        @if (session('resent'))
        <div class="alert alert-success" role="alert">
            {{ __('یک لینک تایید جدید به ایمیل تان ارسال شد.') }}
        </div>
        <br>
        @endif

        <span class="rules">قبل از اقدام، لطفاً ایمیل تان را برای لینک تاییدیه چک نمایید</span>
        <span class="rules">ایمیلی دریافت نکرده اید!</span>
        <br>
        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit" class="btn continue-btn">{{ __('کلیک برای دریافت لینک تایید')
                }}</button>.
        </form>
    </div>
    <div class="form-footer">
        <a href="{{ url('/') }}">بازگشت به صفحه اصلی</a>
    </div>
    </form>
    @endsection
