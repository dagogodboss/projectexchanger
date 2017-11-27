@extends('layouts.auth')

@section('content')
        <div class="register-container full-height sm-p-t-30">
            <div class="d-flex justify-content-center flex-column full-height ">
                <big style=" color: #170CEC;text-transform: lowercase;font-size: 22px;">
                    <b>
                    {{app_name() }}
                    </b>
                </big>
        <h3>{{ app_name() }} Nigerian finest exchange platform for cyptocurrency </h3>
            <p>
                <a href="#" style="color: #fff !important; font-weight: bold;" class="btn btn-primary text-muted white">Facebook</a> or 
                <a href="#" style="color: #fff !important; font-weight: bold;" class="btn btn-danger text-muted white">Google</a>
            </p>
        <form id="form-register" class="p-t-15" role="form"  method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} form-group-default">
                    <label  for="email">Email Address</label>
                        <input id="email" type="email" placeholder="Valid Email to receive verification Link" class="form-control" name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
           
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} form-group-default">
                    <label for="password">Password</label>
                    <input id="password" type="password" placeholder="Minimum of 6 Charactors" class="form-control" name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group form-group-default">
                        <label for="password-confirm">Confirm Password</label>
                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Should match your password" required>
                        </div>
                    </div>
                </div>
                {!! Captcha::display() !!}
                @if ($errors->has('g-recaptcha-response'))
                    <span class="help-block">
                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                    </span>
                @endif
            </div>
        <div class="row m-t-10">
            <div class="col-lg-6">
                <p>
                <div class="checkbox check-success">
                    <input  id="checkbox2" type="checkbox" name="agree" {{ old('agree') ? 'checked' : '' }} required>
                    <label for="checkbox2"><small>I Agree To 
                        <a href="#" class="text-info">
                            <em>
                                Terms and Condition
                            </em>
                        </a>
                        </small>
                    </label>
                </div>
                </p>
            </div>
            <div class="col-lg-6 text-right">
                <a href="{{ route('login') }}" class="text-info small">Have an Account? Login</a>
            </div>
        </div>
            <button class="btn btn-primary btn-cons m-t-10" type="submit">Create a new account</button>
        </form>
    </div>
</div>




@endsection

@push('after-scripts')
        
@endpush
