<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">My Blog Site</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="{{ route('blogs.index')  }}">Blogs</a></li>
					<li><a href="{{ route('blogs.create')  }}">Create</a></li>
				</ul>
				
				<ul class="nav navbar-nav navbar-right">
				
				@if(Auth::check())
					<li>Welcome {{ Auth::user()->name }}</li>
					<li><a href="{{ route('logout') }}">Log out</a></li>
				@else
					<li><a href="{{ route('register') }}">Sign up</a></li>
					<li><a href="{{ route('login') }}">Login</a></li>
				@endif
				</ul>
			</div>
	
		</div>
	</nav>