<!DOCTYPE html>
<html>
<head>
	<title>@yield('title') || Lextrong Group</title>
	<link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
</head>
<body>
<div class="container">
	<header class="header clearfix">
		<nav>
			<ul class="nav nav-pills float-right">
				<li class="nav-item">
					<a href="#" class="nav-link active">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a href="{{url('posts')}}" class="nav-link">Posts</a>
				</li>
				<li class="nav-item">
					<a href="{{url('posts/create')}}" class="nav-link">Create New Post</a>
				</li>
			
				<li class="nav-item">
					<a href="{{url('categories')}}" class="nav-link">Categories</a>
				</li>
					<li class="nav-item">
					<a href="{{url('categories/create')}}" class="nav-link">Create New Category</a>
				</li>
				@auth()
				<li>
					Welcome, {{auth()->user()->name}}

				</li>
				<li class="nav-item">
					<a href="{{url('logout')}}" >Logout</a>
				</li>
				@endauth
				@guest
				<li>
						<a href="{{url('register')}}" class="nav-link">Register</a>
					</li>
					<li>
						<a href="{{url('login')}}" class="nav-link">Login</a>
					</li>
				@endguest
			</ul>
		</nav>
		<h3 class="text-muted">FIVERR-BLOG</h3>
	</header>
	<div class="clearfix"></div>
	<br/><br/>
	<main role="main">
	@yield('content')
	</main>
<div class="clearfix"></div>
<br/><br/><br/>
</div>
</body>
<footer>
  <div class="row">
    <div class="col-md-4">
      <h3>About Us</h3>
      <span>We believe in an end to end approach whenever we take on a client’s request. From strategy to implementation and measurement, we look at the big picture while holding firm to the importance of the details. We look at the best fit scenario for each campaign which may mean a cross platform approach to service provision so as to ensure your needs are met and when possible exceeded.</span>
    </div>
    <div class="col-md-4">
    <form>
    <h3>Subscribe</h3>
    <div class="form-group">
      <label for="Name">Name</label>
            <input type="text" name="name" id="name" class="form-control">
    </div>
      <div class="form-group">
      <label for="email">Email</label>
      <input type="text" name="email" id="email" class="form-control">  
      </div>
      <div class="form-group">
        <button type="sumbit" class="btn btn-primary">Subscribe</button>
      </div>
      <div align="center">
        <span>
        <a href="http://facebook.com/jollyanaofficial"><i class="fa fa-facebook fa-2x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="http://twitter.com/fabjulia_blog"><i class="fa fa-twitter fa-2x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="http://pinterest.com/juliana"><i class="fa fa-pinterest fa-2x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="http://instagram.com/fabjuliaofficial"><i class="fa fa-instagram fa-2x"></i></a>
      </span>
      </div>
    </form>
    </div>
    <div class="col-md-4">
      <h3>Address</h3>
      Balami Estate Opp Uni Abuja Mini Campus,<br>
      P.O.BOX 233,<br>
      GWagwalada, Abuja.
    </div>
  </div>
  <div class="float-left">
      &copy; 2017 Lextrong. All right reserved.
    </div>
    <div class="float-right">
      Built by <a href="http://lextronggroup.com" target="_blank" > Lextrong </a>
    </div>
</footer>
</html>