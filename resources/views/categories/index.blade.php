@extends('layouts.master')

@section('title', 'All Category')

@section('content')		

		@foreach($categories as $category)

		<h4>{{$category->name}}
		@auth
		<a href="{{url('categories/edit/'.$category->id)}}" class="btn btn-sm btn-info">Edit</a>
				<a href="{{url('categories/delete/'.$category->id)}}" class="btn btn-sm btn-info">Delete</a>
		@endauth
				</h4>

		@endforeach
	@stop
