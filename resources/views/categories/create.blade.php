@extends('layouts.master')

@section('title', 'Create New Category')

@section('content')
		<form method="post" action="{{ route('categories.store')}}">
			 {{ csrf_field() }}
			<div class="form-group">
				<label for="title">Name</label>
				<input type="title" class="form-control" id="exampleInputtitle" aria-describedby="titleHelp" placeholder="Enter title" name="name">
				<small id="titleHelp" class="form-text text-muted">Category name</small>
			</div>
				<button class="btn btn-primary" type="submit">Save Category</button>
			</div>
		</form>
		@stop