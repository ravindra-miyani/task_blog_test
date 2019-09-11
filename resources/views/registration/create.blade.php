@extends('layout.main')

@section('content')

<div class="col-sm-8">
	<h1>Sign up </h1>
	<form method="POST" action="{{ route('register_create')}}">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="name">Name </label>
			<input type="text" name="name" id="name" class="form-control" required="" value="{{ old('name') }}">
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="text" name="email" id="email" class="form-control" required="" value="{{ old('email') }}">
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" name="password" id="password" class="form-control" required="">
		</div>
		<div class="form-group">
			<label for="password_confirmation">Confirm Password</label>
			<input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
		</div>
		<div class="checkbox">
  			<label><input type="checkbox" value="1" name="agreed" id="agreed"> I agree to comment on group</label>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Sign up</button>
		</div>
	</form>
@include('layout.error')
</div>


@endsection
