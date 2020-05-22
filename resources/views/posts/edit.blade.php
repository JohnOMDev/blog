@extends('layouts.master')

@section('title', 'Edit Post- '.$post->title)

@section('content')
		<form method="post" action="{{ route('posts.update',['id'=>$post->id])}}">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="title">Title</label>
				<input type="title" class="form-control" id="exampleInputtitle" value="{{$post->title}}" aria-describedby="titleHelp" placeholder="Enter title" name="title">
				<small id="titleHelp" class="form-text text-muted" >Post title.</small>
			</div>

			<div class="form-group">
				<label for="body">Body</label>
				<div class="form-group">
				<label for="category_id">Category</label>
				<select class="form-control" id="category_id" name="category_id" required="">
					@foreach($categories as $category)
					<option value="{{$category->id}}" @if($post->category_id === $category->id) selected @endif>{{$category->name}}</option>
					@endforeach
				</select>
				<small id="titleHelp" class="form-text text-muted">Category.</small>
			</div>
	<!-- 			<input type="body" class="form-control" id="exampleInputbody" aria-describedby="bodyHelp" placeholder="Enter body" name="body">
				<small id="bodyHelp" class="form-text text-muted">{{$post->title}}</small> -->
				<textarea type="body" class="form-control" id="exampleInputbody" aria-describedby="bodyHelp" placeholder="Enter body" name="body">{{$post->body}}</textarea>
				<small id="titleHelp" class="form-text text-muted" >Post</small>
				<button class="btn btn-primary">Update Post</button>
			</div>
		</form>
		@stop