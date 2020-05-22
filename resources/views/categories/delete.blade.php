@extends('layouts.master')

@section('title---', 'Delete Category')

@section('content')
		<form method="post" action="{{ route('categories.destroy',['id'=>$category->id])}}">
			 {{ csrf_field() }}
			<div class="form-group">
				<label for="title">Title</label>
				<div class="form-control">{{$category->name}}</div>
				<small id="titleHelp" class="form-text text-muted">Category name</small>
			</div>
				<button class="btn btn-primary" type="submit">Delete Category</button>
			</div>
		</form>
		@stop