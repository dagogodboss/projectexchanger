@extends('layouts.auth')

@section('content')

<style type="text/css">
    .form-horizontal .form-group {
        border-bottom: 1px solid #eaecee;
        padding-top: 0px;
        padding-bottom: 4px;
        margin-bottom: 0;
    }        
</style>
    <div class="container-fluid">
        <div class="row justify-content-center margin-top-2">
            <div class="col-md-6 col-sm-12 col-xl-6 col-md-offset-4 col-xl-offset-4">
            <big style=" color: #170CEC;text-transform: lowercase;font-size: 22px;text-align: center;">
                    <b>
                    {{app_name() }}
                    </b>
                </big>
            <h3 style="text-align:center;">
                Please fill the form wizard below with your correct personal and account details.
            </h3>
        </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
        <div class="col-md-6 col-sm-12 col-xl-6 col-md-offset-4 col-xl-offset-4">
            <div class="card card-transparent ">
    <form class="form-horizontal" method="POST" action="{{ route('set_account') }}">
    <ul class="nav nav-tabs nav-tabs-linetriangle" data-init-reponsive-tabs="dropdownfx">
        <li class="nav-item">
            <a href="#" class="active" data-toggle="tab" data-target="#slide1"><span><big>Personal Information</big></span></a>
        </li>
        <li class="nav-item">
            <a href="#" data-toggle="tab" data-target="#slide2"><span><big>Bank Account Details</big></span></a>
        </li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane slide-left active" id="slide1">
             {{ csrf_field() }}
            <div class="row column-seperation">
                <div class="col-md-12 ">
                   <div class="row justify-content-center"> 
                   <div class="col-md-12">
                        <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}  form-group-default">
                            <label for="surname">Surname</label>
                                <input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}" required autofocus>
                                @if ($errors->has('surname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                @endif
                        </div>
                   </div>   
                    </div>
            <div class="row">
                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}  form-group-default">
                <label for="username">Username</label>
                    <input id="username" value="{{ old('username') }}" type="text" class="form-control" name="username" required>

                    @if ($errors->has('username'))
                        <span class="help-block">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
            </div>
            </div>
            <div class="row">
                
            <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}  form-group-default">
                <label for="firstname">First Name</label>
                    <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required >

                    @if ($errors->has('firstname'))
                        <span class="help-block">
                            <strong>{{ $errors->first('firstname') }}</strong>
                        </span>
                    @endif
            </div>
            </div>

            <div class="row">
                
    
            <div class="form-group{{ $errors->has('middlename') ? ' has-error' : '' }}  form-group-default">
                <label for="middlename">Middle Name</label>
                    <input id="middlename" value="{{ old('middlename') }}" type="text" class="form-control" name="middlename" required>

                    @if ($errors->has('middlename'))
                        <span class="help-block">
                            <strong>{{ $errors->first('middlename') }}</strong>
                        </span>
                    @endif
            </div>
            </div>
            <div class="row">
                

            <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}  form-group-default">
                <label for="phone_number"> Phone Number</label>
                    <input value="{{ old('phone_number') }}" id="phone_number" type="text" class="form-control" name="phone_number" required>

                    @if ($errors->has('phone_number'))
                        <span class="help-block">
                            <strong>{{ $errors->first('phone_number') }}</strong>
                        </span>
                    @endif
            </div>
            </div>
            <div class="row">
            <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}  form-group-default">
                <label for="birthday">Date Of Birth</label>
                <input type="text"  value="{{ old('birthday') }}" id="datepicker-component2" class="form-control" name="birthday" required>
                @if ($errors->has('birthday'))
                    <span class="help-block">
                        <strong>{{ $errors->first('birthday') }}</strong>
                    </span>
                @endif
            </div>
            </div>
                </div>
            </div>
            <br>
        <button data-toggle="tab" data-target="#slide2" type="button" class="btn btn-success">Next Page</button>
        </div>
        <div class="tab-pane slide-right" id="slide2">
            <div class="row">
                <div class="col-lg-12">
                <div class="form-group{{ $errors->has('bank_name') ? ' has-error' : '' }}">
                
                <select data-placeholder="Select Your Bank"  value="{{ old('bank_name') }}" class="full-width" data-init-plugin="select2" name="bank_name" required>
                    <optgroup label="Nigeria Bank">
                        <option value="Access Bank">Access Bank</option>
                        <option value="First Bank">First Bank</option>
                        <option  value="First City Monument Bank Bank">First City Monument Bank Bank</option>
                        <option value="Fidelity Bank">Fidelity Bank</option>
                        <option value="Ecobank">Ecobank</option>
                        <option value="Enterprise Bank">Enterprise Bank</option>
                        <option value="Diamond Bank">Diamond Bank</option>
                        <option value="Guaranty Trust Bank">Guaranty Trust Bank</option>
                        <option value="Heritage Bank">Heritage Bank</option>
                        <option value="Citi Bank">Citi Bank</option>
                        <option value="Skye Bank">Skye Bank</option>
                        <option value="MainStreet Bank">MainStreet Bank</option>
                        <option value="keyStone Bank">keyStone Bank</option>
                        <option value="Stanbic IBTC Bank" >Stanbic IBTC Bank</option>
                        <option value="Standard Chartered Bank" >Standard Chartered Bank</option>
                        <option value="Sterling Bank">Sterling Bank</option>
                        <option value="Sun Bank" >Sun Bank</option>
                        <option value="Union Bank">Union Bank</option>
                        <option value="Unity Bank">Unity Bank</option>
                        <option value="United Bank Of Africa">United Bank Of Africa</option>
                        <option value="Wema Bank">Wema Bank</option>
                        <option value="Zenith Bank">Zenith Bank</option>
                    </optgroup>
                </select>
                    @if ($errors->has('bank_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('bank_name') }}</strong>
                        </span>
                    @endif
                
            </div>

            <div class="form-group{{ $errors->has('account_name') ? ' has-error' : '' }}  form-group-default">
                <label for="account_name">Account Name</label>

                <div class="col-md-6">
                    <input id="account_name" type="text" class="form-control"  value="{{ old('account_name') }}" name="account_name" required>

                    @if ($errors->has('account_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('account_name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('account_number') ? ' has-error' : '' }}  form-group-default">
                <label for="account_number"> Account Number</label>

                <div class="col-md-6">
                    <input value="{{ old('account_number') }}" id="account_number" type="text" class="form-control" name="account_number" required>

                    @if ($errors->has('account_number'))
                        <span class="help-block">
                            <strong>{{ $errors->first('account_number') }}</strong>
                        </span>
                    @endif
                </div>
            </div>



            <div class="form-group{{ $errors->has('account_pin') ? ' has-error' : '' }}  form-group-default">
                <label for="account_pin"> Account Pin</label>

                <div class="col-md-6">
                    <input id="account_pin" value="{{ old('account_pin') }}" type="text" class="form-control" name="account_pin" required>

                    @if ($errors->has('account_pin'))
                        <span class="help-block">
                            <strong>{{ $errors->first('account_pin') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-success btn-cons">
                        Save Details
                    </button>
                </div>
            </div>
                </div>
            </div>
        </div>
        </div>
    </form>
    </div>
        </div>
    </div>
    </div>
@endsection
