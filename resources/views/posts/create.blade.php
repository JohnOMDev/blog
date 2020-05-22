@extends('layouts.master')

@section('title', 'Create New Post')

@section('content')
		<form method="post" action="{{ route('posts.store')}}">
			{{ csrf_field() }}
			<div class="form-group">
				<label for="title">Title</label>
				<input type="title" class="form-control" id="exampleInputtitle" aria-describedby="titleHelp" placeholder="Enter title" name="title">
				<small id="titleHelp" class="form-text text-muted">Post title.</small>
			</div>

			<div class="form-group">
				<label for="category_id">Category</label>
				<select class="form-control" id="category_id" name="category_id" required="">
					@foreach($categories as $category)
					<option value="{{$category->id}}">{{$category->name}}</option>
					@endforeach
				</select>
				<small id="titleHelp" class="form-text text-muted">Category.</small>
			</div>

			<div class="form-group">
				<label for="body">Body</label>
				<textarea type="body" class="form-control" id="exampleInputbody" aria-describedby="bodyHelp" placeholder="Enter body" name="body"></textarea>
				<small id="bodyHelp" class="form-text text-muted">Post Body.</small>

				<button class="btn btn-primary">Save Post</button>
			</div>
		</form>
		@stop