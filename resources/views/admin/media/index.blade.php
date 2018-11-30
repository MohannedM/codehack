@extends('layouts.admin')


@section('content')

	<h1>Media</h1>
@if($photos)
	<table class="table">
		<thead>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Created</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
		
		@foreach($photos as $photo)

			<tr>
				<td>{{$photo->id}}</td>
				<td><img height="50" src="{{$photo->file}}" alt=""></td>
				<td>{{$photo->created_at ? $photo->created_at : 'no date'}}</td>
				<td>
					{!! Form::open(['method'=>'DELETE', 'action'=>['AdminMediasController@destroy', $photo->id]]) !!}
						
						{!! Form::submit('Delete Photo', ['class'=>'btn btn-danger']) !!}

					{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
		
@endif


@stop