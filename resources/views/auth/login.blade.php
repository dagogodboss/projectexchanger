@extends('layouts.auth')

@section('content')
        <div class="register-container full-height sm-p-t-30">
            <div class="d-flex justify-content-center flex-column full-height ">
                <big style=" color: #170CEC;text-transform: lowercase;font-size: 22px;">
                    <b>
                    {{app_name() }}
                    </b>
                </big>
        <h3>{{ app_name() }} is Nigerian finest exchange platform for cyptocurrency </h3>
            <p>
                <a href="#" style="color: #fff !important; font-weight: bold;" class="btn btn-primary text-muted white">Facebook</a> or 
                <a href="#" style="color: #fff !important; font-weight: bold;" class="btn btn-danger text-muted white">Google</a>
            </p>
        <form id="form-register" class="p-t-15" role="form"  method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }} form-group-default">
                        <label for="username" class="col-md-4 control-label">Username/Email</label>
                        <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus placeholder="Enter Username or Email">
                        @if ($errors->has('username'))
                            <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} form-group-default">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control" Placeholder="Your correct password" name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    </div>
                </div>
                <div class="checkbox check-success">
                    <input  id="checkbox2" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="checkbox2">Remember Me</label>
                </div>
            </div>
        <div class="row m-t-10">
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                            Forgot Your Password?
                    </a>
                    <a class="btn btn-link pull-right" href="{{ route('register') }}">
                        Create Account
                     </a>
        </div>
            <button class="btn btn-primary btn-cons m-t-10" type="submit">Login</button>
        </form>
    </div>
</div>
@endsection
