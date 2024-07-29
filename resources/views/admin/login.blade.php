@extends('layouts.app')

@section('title', 'ESSENCE - ĐĂNG NHẬP')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/components.css')}}">
<div id="app">
    <section class="section">
        <div class="container my-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="{{asset('img/core-img/favicon.ico')}}" alt="logo" width="100" class="shadow-light rounded-circle">
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Đăng nhập Admin</h4>
                        </div>
                        @if(session()->has('thongbao'))
                        <div class="alert alert-danger p-3 mx-auto my-3 col-10 fs-5 text-center">
                            {!! session('thongbao') !!}
                        </div>
                        @endif
                        <div class="card-body">
                            <form method="POST" action="{{route('loginAdmin')}}" class="needs-validation">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                                    <div class="invalid-feedback">
                                        Please fill in your email
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">Mật khẩu</label>
                                        <div class="float-right">
                                            <a href="auth-forgot-password.html" class="text-small">
                                                Quên mật khẩu?
                                            </a>
                                        </div>
                                    </div>
                                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                                    <div class="invalid-feedback">
                                        please fill in your password
                                    </div>
                                </div>

                                <!-- <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div> -->

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        Đăng nhập
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


@endsection