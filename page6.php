<?php

include_once('header.php');


?>

<body>

<div id='wrapper'>	

<div id='mainDiv' class='gradient'>

<div id='mainContent'>

		<h1>Cloning Down From GitHub</h1>

		<br /><br />

		<p>This is the last step in this GiT workflow summary, but actually
		the first thing you actually need to do in an operational system.
		I've left it until last and this is generally a one off process,
		rather than any kind of regular activity.</p>

		<p>The cloning process is essentially pulling down the initial
		copy of the website or application onto your local machine. You
		must first have GiT installed on your local machine.</p>

		<p>The first step is to navigate locally to the place you want
		the GiT repository cloned too, normally this will be somewhere
		in the /var/www directory, unless you have changed this in your
		Apache setup.</p>

		<p>The cloning process will build a copy of the remote repository
		on your local machine including the .gitignore files and the
		.git directory and contents.</p>

		<p>The command will look something like this.
		<br /><br />
		<span class='codex'>myself:~$ git://github.com/WayneLN/GiTLearn.git /var/www/GiTLearn-local</span></p>
		<br />
		This will clone down the GiTLearn repository on GitHub, to a directory
		called GiTLearn-local in /var/www/</p>

		<p>You don't have to name your local repository the same as the remote
		and it is best to keep it short, as your'll find yourself typing it
		a lot. It is also fairly helpful to keep it near the top of the WWW
		directory, so it is not too buried down in the file structure. This
		just makes navigating to it easier.</p>

		<p>Once you have the repository cloned, you can setup your remotes
		to push and pull to and from. You can adjust the .gitignore files
		etc so you have a functional app running locally with any MySQL
		DBs and other local files.</p>

		<p>On the initial clone down, your working directory will be 'Clean'
		as soon as you start modifying files the GiT version control
		process will kick in. That's pretty much all there is too it, once
		you have cloned the remote you can commence work on it. You
		will find a complete complete explanation of the cloning process
		using the links in the sidebar.</p>

		<h1>What Next</h1>

		<p>This brings us to the end of this very short summary
		of GiT, GitHub and a distributed GiT workflow. There is
		much more to learn to use GiT proficiently, this really is
		a very basic starting point.</p>

		<p>Next I'll add a page or two of links and references
		to get you started with the coding we use. They are very much
		my choice, I'm sure there are many other excellent references
		out there too.</p>

	
		<br /><br /><br /><br /><br /><br /><br /><br /><br />
		<br /><br /><br /><br /><br /><br /><br /><br /><br />
		<br /><br /><br /><br /><br /><br /><br /><br /><br />

	</div>   <!-- end of mainContent -->

	<div id='sideBar'>		

		<h3>Cloning From GitHub</h3>

		<p>	Well that's it for GiT, at least for now.</p>

		<p>	Next I'll put up a page of useful links to coding with
			PHP, HTML, CSS and JS etc. These are get you started sites
			and other resources to kick off the learning process. Any
			search will turn up lots of others, to some extent you need
			to make your own choices and some will suit your working and
			learning style better than others.</p>


	<?php include_once('menu.php'); ?>
			
	</div> <!-- end of sideBar -->


<div id='footGap'></div>

<?php
include_once('footer.php');
?>

