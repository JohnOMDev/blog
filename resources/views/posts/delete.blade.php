@extends('layouts.master')

@section('title', 'Edit Post- '.$post->title)

@section('content')
		<form method="post" action="{{ route('posts.destroy',['id'=>$post->id])}}">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="title">Title</label>
				<div class="form-control">{{$post->title}}</div>
				<small id="titleHelp" class="form-text text-muted" >Post title.</small>
			</div>
			<div class="form-group">
				<label for="body">Body</label>
	<!-- 			<input type="body" class="form-control" id="exampleInputbody" aria-describedby="bodyHelp" placeholder="Enter body" name="body">
				<small id="bodyHelp" class="form-text text-muted">{{$post->title}}</small> -->
				 <div class="form-control">{{$post->body}}</div>
				<small id="titleHelp" class="form-text text-muted" >Post Body</small>
				<button class="btn btn-primary">Delete Post</button>
			</div>
		</form>
		@stop