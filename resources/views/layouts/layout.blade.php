<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
   <link rel="stylesheet" type="text/css" href="{{url('/css/myStyle.css')}}">

</head>
<body>
	@yield('content')
    <header>
    	<nav>
    		<ul>
    			<li><a href="/">home</a></li>
    			<li><a href="/">profolios</a></li>
        		<li><a href="/contact">contact</a></li>
        		<li><a href="/about">about</a></li>
    		</ul>
    	</nav>
    	<div class="headline">
    		<p>Hello, I'm Minh <br> Software Developer</p>
    	</div>
    </header>
    <section class="about"> 
    	<div class="about-me">
	    	<h1>About me</h1>
	    	<p>Ersatz can be traced back in English to the 1870s, but it really came into prominence during World War I. Borrowed from German, where Ersatz is a noun meaning "substitute," the word was frequently applied as an adjective in English to modify terms like coffee (made from acorns) and flour (made from potatoes)—ersatz products resulting from the privations of war. By the time World War II came around, bringing with it a resurgence of the word along with more substitute products, ersatz was wholly entrenched in the language. Today, ersatz can be app  in English to modify terms like coffee (made from acorns) and flour (made from potatoes)—ersatz products resulting from the privations of war. By the time World War II came around, bringing with it a resurgence of the word along with more substitute products, ersatz was wholly entrenched in the language. Today, ersatz can be app




	    	lied to almost anything that seems like an artificial imitation.</p>
    	</div>

    	<div class="my-cards">
			<div class="row">
				<div class="column c1" onclick="location.href = '/about'">
					<div class="card">
						<h3>Resume</h3>
						<p>Some text</p>
						<p>Some text</p>
					</div>
				</div>
				<div class="column c2" onclick="location.href = '/contact'">
					<div class="card">
						<h3>Profolio</h3>
						<p>Some text</p>
						<p>Some text</p>
					</div>
				</div>
				<div class="column c3" onclick="location.href = '/contact'">
					<div class="card">
						<h3>Contact Me</h3>
						<p>Som Some text Some text</p>
						<p>Some text</p>
					</div>
				</div>
			</div>
    	</div>
    </section>

    <footer class ="note">
    	<p>This is power by Minh<br>7435 Balfour Way, Sacramento, CA</p>
    </footer>
</body>
</html>