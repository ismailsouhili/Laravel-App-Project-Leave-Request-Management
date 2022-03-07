@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Set up Google Authenticator</div>

                <div class="panel-body" style="text-align: center;">
                    <p> 1. Scan this QR code with your Google Authenticator App. Alternatively, you can use the code: <code>{{ $secret }}</code></p>
                    <div>
                        <img src="{{ $QR_Image }}"> 
                    </div>
                    <p> 2. Enter the pin from Google Authenticator app:</p>
					
					<div class="form-group" >
						<input id="one_time_password" type="password" class="form-control col-md-4"  name="secret" required autofocus>
					</div>

                    <div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<button type="submit" class="btn btn-success">Complete Registration </button>
						</div>
					</div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection