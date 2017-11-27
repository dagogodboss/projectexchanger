@extends('layouts.auth')

@section('content')

		<div class=" container-fluid margin-top-1 container-fixed-lg">
			<div class="row justify-content-center">
				<div class="col-lg-4">
					<div class="card card-default">
						<div class="card-header ">
							<div class="card-title"><h4><big><b>{{ app_name() }}</b></big></h4></div>
							<div class="tools">
								<a class="collapse" href="javascript:;"></a>
								<a class="config" data-toggle="modal" href="#grid-config"></a>
								<a class="reload" href="javascript:;"></a>
								<a class="remove" href="javascript:;"></a>
							</div>
						</div>
						<div class="card-block">
							<h5>Phone
								<span class="bold">Verification</span>
							</h5>
								<p>
									A Short code was sent to your phone number <code>{{ LogUser()->phone_number }}</code>. Please enter the code in the field provided below. If you did not receive the code. Click here to resend the code. You can only try the verification code three times after your account will be Flag as Spam. 
								</p>
							<br>
							<form action="{{ url('check-phoneToken') }}" method="post" role="form">
								{{ csrf_field() }}
							<div class="input-group transparent">
								<span class="input-group-addon">
									<i class="fa fa-code"></i>
								</span>
									<input type="text" placeholder="Short Code: ******" name="phone_token" class="form-control" required>
									<div class="row">
										@if ($errors->has('phone_token'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('phone_token') }}</strong>
		                                    </span>
	                                	@endif
									</div>
							</div>
							<br><br>
							<button type="submit" class="btn btn-cons btn-info">Validate</button>
								
							</form>
						
						</div>
					</div>

				</div>
			</div>
		</div>
@endsection