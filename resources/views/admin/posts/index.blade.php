@extends('layouts.admin')

@section('content')


<h1>Posts</h1>
<table class="table">
 	<thead>
 		<th>Id</th>
 		<th>Photo</th>
 		<th>Owner</th>
 		<th>Category</th>
 		<th>Title</th>
 		<th>Body</th>
 		<th>Post link</th>
 		<th>Comments</th>
 		<th>Created At</th>
 		<th>Updated At</th>
 	</thead>
 	<tbody>
@if($posts)
	@foreach($posts as $post)	
 		<tr>
 			<td>{{$post->id}}</td>
 			<td><img height="50" src="{{ $post->photo ? $post->photo->file : 'http://placehold.it/50x50' }}"></td>
 			<td><a href="{{ route('admin.posts.edit', $post->id) }}">{{$post->user->name}}</a></td>
 			<td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>	
 			<td>{{$post->title}}</td>
 			<td>{{str_limit($post->body, 25)}}</td>
 			<td><a href="{{route('home.post', $post->id)}}">View Post</a></td>
 			<td><a href="{{route('admin.comments.show', $post->id)}}">View Comments</a></td>
 			<td>{{$post->created_at->diffForHumans()}}</td>
 			<td>{{$post->updated_at->diffForHumans()}}</td>
 		</tr>
	@endforeach
@endif
 	</tbody>
 </table> 

@stop