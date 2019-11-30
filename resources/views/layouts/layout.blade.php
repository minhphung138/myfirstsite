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
    			<li><a href="/">projects</a></li>
        		<li><a href="/contact">contact</a></li>
        		<li><a href="/about">about</a></li>
    		</ul>
    	</nav>
    	<div>
    		<p>The big screen shot will be place here <br> I will tell you a litle bit more about myself</p>
    	</div>
    </header>
    <section class="about"> 
    	<h1>About me</h1>
    	<p>hello</p>
    </section>

    <section class="techinical-skill">
    	<p>Java</p>
    	
    </section>

    <section class="template">

    	<div class="row">
	    	<div class="column">
	    		<div class="card">
	    			<h2>Resume</h2>
		    		<p>java</p>
	    		</div>
	    	</div>
	    	<div class="column">
	    		<div class="card">
	    			<h2>Projects</h2>
		    		<p>pay</p>
	    		</div>
	    	</div>
	    	<div class="column">
	    		<div class="card">
		    		<h2>Want to Learn</h2>
		    		<p>JavaScript</p>
		    	</div>
	    	</div>
    	</div>
    </section>

    <footer class ="note">
    	<p>This is power by Minh<br>7435 Balfour Way, Sacramento, CA</p>
    </footer>
</body>
</html>