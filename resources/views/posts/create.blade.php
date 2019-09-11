@extends('layout.main')
@section('content')
<div class="col-sm-8 blog main">
	<h1>Create a Group Post</h1>
	{!! Form::open(['method' => 'POST', 'route' => ['group_posts_store']]) !!}
		{{ csrf_field() }}
		<div class="form-group">
			{!! Form::label('title','Group Post Title *', ['class' => 'control-label']) !!}
			{!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => 'Group post title']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('body','Content *', ['class' => 'control-label']) !!}
			{!! Form::text('body', old('body'), ['class' => 'form-control', 'placeholder' => 'Group post title']) !!}
		</div>
		{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!}
	@include('layout.error')
</div>
@endsection
