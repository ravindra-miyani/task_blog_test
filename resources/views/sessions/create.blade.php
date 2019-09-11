@extends('layout.main')

@section('content')

<div class="col-sm-8">
	<h1>Login</h1>	
	<form method="POST" action="{{ route('login')}}">
		{{ csrf_field() }}
		
		<div class="form-group">
			<label for="email">Email</label>
			<input type="text" name="email" id="email" class="form-control" required="" value="{{ old('email') }}">
		</div>
		<div class="form-group">
			<label for="password">Password:</label>
			<input type="password" name="password" id="password" class="form-control" required="">
		</div>
		
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Login</button>
		</div>
	</form>

@include('layout.error')
</div>


@endsection

