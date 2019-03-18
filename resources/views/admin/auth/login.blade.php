@extends('admin.layout.auth')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Admin LogIn</div>
					<div class="panel-body">
						<form action="{{url('admin/login')}}" method="post">
							{{ csrf_field() }}
							<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
								<label for="email" class="col-md-4 control-label text-white">E-Mail Address</label>

								<div class="col-md-6" style="margin:inherit">
									<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

									@if ($errors->has('email'))
										<span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
									@endif
								</div>
							</div>

							<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
								<label for="password" class="col-md-4 control-label text-white">Password</label>

								<div class="col-md-6" style="margin:inherit">
									<input id="password" type="password" class="form-control" name="password">

									@if ($errors->has('password'))
										<span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
									@endif
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									<button type="submit" class="btn btn-primary">
										LogIn
									</button>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									<a href="{{url('admin/register')}}">Not Register?</a>
									<a href="{{url('/')}}">Back to home</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
