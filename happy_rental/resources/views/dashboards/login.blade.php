@extends('layout.master_login')

@section('tittle')
Login
@endsection

@section('main')
<div id="wrapper">
    <div class="vertical-align-wrap">
        <div class="vertical-align-middle">
            <div class="auth-box ">
                <div class="left">
                    <div class="content">
                        <div class="header">
                            <div class="logo text-center"><img src="{{ asset('dashboard/assets/img/logo-dark.png') }}" alt="Klorofil Logo"></div>
                            <p class="lead">Login to your account</p>
                        </div>
                        <form action="{{ route('login.post') }}" enctype="multipart/form-data" method="POST" class="form-auth-small">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="signin-email" class="control-label sr-only">Email</label>
                                <input type="email" name="email" class="form-control" id="signin-email"
                                    placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="signin-password" class="control-label sr-only">Password</label>
                                <input type="password" name="password" class="form-control" id="signin-password"
                                    placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                            <div class="bottom">
                                <span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Forgot
                                        password?</a></span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="right">
                    <div class="overlay"></div>
                    <div class="content text">
                        <h1 class="heading">Happy Rental</h1>
                        <p>by Ilham Hendro Prasetyo</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
@endsection
