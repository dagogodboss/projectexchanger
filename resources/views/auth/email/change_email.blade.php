@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Change Email</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('email.reset') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('oldemail') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Old E-Mail Address</label>

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
                            <label for="email" class="col-md-4 control-label">New E-Mail Address</label>

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
        </div>
    </div>
</div>
@endsection
