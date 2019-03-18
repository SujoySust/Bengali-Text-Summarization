<div class="header">
		<div class="container">
			<div class="header-nav">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					    <h3 class="mt-15"><a class="navbar-brand" href="{{url('/')}}">Text Summarization</a></h3>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="navbarNavDropdown">
						<ul class="nav navbar-nav">
							<li><a class="hvr-overline-from-center button2 " href="{{url('/')}}">Home</a></li>
							
							<li class="dropdown">
								<a class="hvr-overline-from-center button2 ">Summarization</a>
								<div class="dropdown-content">
									<a href="{{url('summary/abstract/bengali')}}">Abstractive Bengali</a>
									<a href="{{url('summary/extractive/bengali')}}">Extractive Bengali</a>
									<a href="{{url('summary/abstract/english')}}">Abstractive English</a>
									<a href="{{url('summary/extractive/english')}}">Extractive English</a>
								</div>
							
							</li>
							<li><a class="hvr-overline-from-center button2" href="{{url('study')}}">Study</a></li>
							<li><a class="hvr-overline-from-center button2" href="{{url('thesis')}}">Thesis Works</a></li>
							<li><a class="hvr-overline-from-center button2" href="{{url('resource')}}">Resources</a></li>
							<li><a class="hvr-overline-from-center button2" href="{{url('about')}}">About Us</a></li>
							<li><a class="hvr-overline-from-center button2" href="{{url('contract')}}">Contact</a></li>
							<li><a class="hvr-overline-from-center button2" href="{{url('student/login')}}">Student Login</a></li>
						</ul>
						<div class="search-box">
							<div id="sb-search" class="sb-search">
								<form>
									<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
									<input class="sb-search-submit" type="submit" value="">
									<span class="sb-icon-search"> </span>
								</form>
							</div>
						</div>
					</div><!-- /navbar-collapse -->
					
					<!-- search-scripts -->
					<script src="{{asset('fontEnd/js/classie.js')}}"></script>
					<script src="{{asset('fontEnd/js/uisearch.js')}}"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
					<!-- //search-scripts -->
				</nav>
			</div>
		</div>
</div>