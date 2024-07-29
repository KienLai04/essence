@extends('layouts.app')

@section('title', 'ESSENCE - ĐĂNG KÝ')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/components.css')}}">
<div id="app">
  <section class="section">
    <div class="container my-5">
      <div class="row">
        <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
          <div class="login-brand">
            <img src="{{asset('img/core-img/favicon.ico')}}" alt="logo" width="100" class="shadow-light rounded-circle">
          </div>

          <div class="card card-primary">
            <div class="card-header">
              <h4>Đăng ký</h4>
            </div>

            <div class="card-body">
              <form method="POST" action="{{route('register')}}">
                @csrf
                <div class="form-group">
                  <label for="name">Tên đăng nhập</label>
                  <input id="name" type="text" class="form-control" name="name">
                  <b class="text-danger"> @error('name') {{ $message }} @enderror </b>
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input id="email" type="email" class="form-control" name="email">
                  <b class="text-danger"> @error('email') {{ $message }} @enderror </b>
                </div>

                <div class="row">
                  <div class="col-md-6 form-group">
                    <label for="diachi">Địa chỉ</label>
                    <input name="diachi" value="{{old('dia_chi')}}" type="text" class="form-control">
                    <b class="text-danger"> @error('diachi') {{ $message }} @enderror </b>
                  </div>
                  <div class="col-md-6 form-group">
                    <label for="dienthoai">Điện thoại</label>
                    <input name="dienthoai" value="{{old('dien_thoai')}}" type="text" class="form-control">
                    <b class="text-danger"> @error('dienthoai') {{ $message }} @enderror </b>
                  </div>
                </div>

                <div class="form-group">
                  <label for="password" class="d-block">Mật khẩu</label>
                  <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="mk1">
                  <b class="text-danger"> @error('mk1') {{ $message }} @enderror </b>
                </div>
                <div class="form-group">
                  <label for="password2" class="d-block">Xác nhận mật khẩu</label>
                  <input id="password2" type="password" class="form-control" name="mk2">
                  <b class="text-danger"> @error('mk2') {{ $message }} @enderror </b>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-lg btn-block">
                    Đăng ký
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="mt-5 text-muted text-center">
            Đã có tài khoản? <a href="{{route('loginForm')}}">Đăng nhập ngay</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>


@endsection