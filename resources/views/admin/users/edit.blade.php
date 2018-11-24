@extends('layouts.admin')


@section('content')

	<div class="row">
		<h1>Edit Users</h1>

		{!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files'=>true]) !!}
			<div class="col-sm-3">
				<img src="{!! $user->photo ? $user->photo->file : 'http://placehold.it/400x400' !!}" alt="" class="img-responsive img-rounded">
			</div>
			<div class="col-sm-9">
				<div class="form-group">
					{!! Form::label('name', 'Name:') !!}
					{!! Form::text('name', null,['class' => 'form-control']) !!}
				</div>		
				<div class="form-group">
					{!! Form::label('email', 'Email:') !!}
					{!! Form::email('email', null,['class' => 'form-control']) !!}
				</div>		
				<div class="form-group">
					{!! Form::label('role_id', 'Role:') !!}
					{!! Form::select('role_id',[''=>'Choose Option'] + $roles, null,['class' => 'form-control']) !!}
				</div>	

				<div class="form-group">
					{!! Form::label('is_active', 'Status:') !!}
					{!! Form::select('is_active', [1=>'Active', 0=>'Not Active'], null,['class' => 'form-control']) !!}
				</div>	
				<div class="form-group">
					{!! Form::label('photo_id', 'Photo:') !!}
					{!! Form::file('photo_id', null,['class' => 'btn btn-default']) !!}
				</div>	
				<div class="form-group">
					{!! Form::label('password', 'Password:') !!}
					{!! Form::password('password',['class' => 'form-control']) !!}
				</div>	
				<div class="form-group">
					{!! Form::submit('Create User', ['class' => 'btn btn-primary']) !!}
				</div>
			</div>

		{!! Form::close() !!}
	</div>
	<div class="row">
	@include('includes.form_error')
	</div>	

@stop