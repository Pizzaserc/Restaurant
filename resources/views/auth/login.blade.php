@extends('layouts.home')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-md-4 col-10 box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 m-0">
                                <div class="card-header border-0">
                                    <div class="card-title text-center">
                                        <div class="p-1">
                                            <img src="{{asset('admin')}}/logo5.png" alt="LOGO" />


                                        </div>
                                    </div>

                                </div>

                                <!-- begin alet section-->
                                <!-- end alet section-->

                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form-horizontal form-simple" action="{{ route('login') }}" method="post" novalidate>
                                           @csrf

                                            <fieldset class="form-group position-relative has-icon-left mb-0">

                                                <input type="email" name="email"
                                                       class="form-control form-control-lg input-lg"
                                                       value="admin@gmail.com" id="email" value="admin@gmail.com"
                                                       @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus
                                                ><br>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                                <div class="form-control-position" style="top:-20px;font-size:1px;right:-7%">
                                                </div>

                                                <span class="text-danger"> </span>

                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left">

                                                <input   value="12345678" type="password" name="password" required
                                                       class="form-control form-control-lg input-lg" id="user-password"
                                                       placeholder="at least 5 charecters" minlength="5"
                                                       maxlength="20"

                                                       @error('password') is-invalid @enderror"  required autocomplete="current-password" ><br>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                                <div class="form-control-position">
                                                </div>
                                                <span class="text-danger"> </span>
                                            </fieldset>

                                            <!--fieldset class="form-group position-relative has-icon-left">

                                                <select type="password" name="p"
                                                        class="form-control form-control-lg input-lg"
                                                >
                                                    <option>iiiiiiiiiiii</option>
                                                </select>

                                            </fieldset-->


                                            <button type="submit" class="btn btn-info btn-lg btn-block"><i
                                                    class="ft-unlock"></i>
                                                log in
                                            </button>
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <!-- BEGIN VENDOR JS-->
     <script src="admin/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
     <script src="admin/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
    <script src="admin/vendors/js/forms/validation/jqBootstrapValidation.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="admin/js/core/app-menu.js" type="text/javascript"></script>
    <script src="admin/js/core/app.js" type="text/javascript"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
<script src="admin/js/scripts/forms/form-login-register.js" type="text/javascript"></script>

    <!-- END PAGE LEVEL JS-->





    <!--
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-6 offset-md-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
        </label>
    </div>
          </div>
</div>

<div class="form-group row mb-0">
<div class="col-md-8 offset-md-4">
    <button type="submit" class="btn btn-primary">
{{ __('Login') }}
        </button>

@if (Route::has('password.request'))
        <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
            </a>
@endif
        </div>
    </div>
</form>
</div>
</div>
</div>
</div>
</div>

-->

@endsection
