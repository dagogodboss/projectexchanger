@extends('layouts.auth')

@section('content')
        <div class="register-container full-height sm-p-t-30">
            <div class="d-flex justify-content-center flex-column full-height ">
                <big style=" color: #170CEC;text-transform: lowercase;font-size: 22px;">
                    <b>
                    {{app_name() }}
                    </b>
                </big>
        <h3>Change Your Email Address using the form below</h3>
               
                <form class="form-horizontal" method="POST" action="{{ route('email.reset') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('oldemail') ? ' has-error' : '' }} ">
                            <label for="email" class="control-label">Old E-Mail Address</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="oldemail" value="{{ old('oldemail') }}" required>

                                @if ($errors->has('oldemail'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('oldemail') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label">New E-Mail Address</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <input type="hidden" name="uuid" value="{{ hash('sha256',$user->id.config('app.salt')) }}">
                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Change Email Send Validation Link
                                </button>
                            </div>
                        </div>
                    </form>

            </div>
        </div>

@endsection
