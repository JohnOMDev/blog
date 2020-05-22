@extends('layouts.master')

@section('title', 'All Post')

@section('content')		
<div class="jumbotron">
			<h1 class="display-3">About Lextrong</h1>
			<p class="lead">Lextrong was founded by a nationally recognized creative agency that deals with small and multi-national companies.  We created this website to catter for those that are thirsty for good offer and return customers. This website encompasses requests message  for Web design, Software development, Search engine marketing and cost with Search engine optimization, Wordpess development and Content writting. We want to make sure your gig gets the resources it needs at an affordable quick turnaround. 
</p>
You can sign up for our low-cost personal training today and you will start to make Guaranteed 10sales per week <br/><br/>
			<p><a class="btn btn-lg btn-success" href="{{url('#')}}" role="button">Sign up today</a></p>
		</div>

		<div class="row marketing">
			@foreach($posts as $post)
			<div class="col-lg-6">
				<h4>{{$post->title}} 
					@auth
				<a href="{{url('posts/edit/'.$post->id)}}" class="btn btn-sm btn-info">Edit</a>
				<a href="{{url('posts/delete/'.$post->id)}}" class="btn btn-sm btn-info">Delete</a>
				@endauth
				</h4>
				<h5>
					@if($post->category)
						{{$post->category->name}}
					@endif

				</h5>
					<p>{{$post->body}}</p>
				</div>
					@endforeach
				</div>
@stop