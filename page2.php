<?php

include_once('header.php');


?>

<body>

<div id='wrapper'>	

<div id='mainDiv' class='gradient'>

<div id='mainContent'>

		<h1>Working in Your Local Repository</h1>

		<br /><br />

		<p>now we have a basic understanding of the overall GiT workflow, 
		we can take each element in turn and work through the basic 
		operations. If you think of this more as a circular process 
		rather than a linear one, then you will realise there are several 
		places we can jump into the loop. The key elements around that 
		loop are:</p>

		<ul class='basicList'>
		<li>working in your local repository</li>
		<li>pushing you working up to your remote repository</li>
		<li>the review and approval process</li>
		<li>updating the remote master</li>
		<li>pulling the latest remote master to you local repository</li>
		</ul>

		<br />

		<p>There are two other processes we need to cover, which don't 
		quite fit into the loop concept. The first is getting you local 
		repository setup in the first place and the second is pushing 
		work up from the Remote Master to the LIVE production 
		environment.</p>

		<p>We will start with element one in the list, bearing in mind this 
		is my description of the process and is a little specific to the 
		workflow we are using here.</p>

		<img src="images/GiT-basic-model.png">

		<br /><br />

		<p>Once you have 'cloned' the Remote Master to a repository on your 
		local machine, you'll have a fully operational and working copy of 
		the application or website. We'll refer to this as your Local 
		Repository. Within your Local Repository all the files will be 
		in a Working Directory. In any normal code editor you'll be able 
		to see, open and edit these files.</p>

		<p>These files can be in one of four states unmodified, modified, 
		stages or committed. When the Remote Master is Cloned to your 
		Local Repository all the files will be added in an unmodified 
		state. This is known as a 'clean' working directory, everything 
		is as it was when you first pulled down the files.</p>

		<p>You can check this with a simple git command - 
		myself $: git status. This is a really really useful command as 
		it will should you the current status of your working directory 
		at any point in time.</p>

		<p>If you modify a file, by just editing the file and saving it, 
		and then run - myself $: git status. You'll see something 
		like this:</p>

		On branch master<br />
		#<br />
		# Changes not staged for commit:<br />
		#   (use "git add <file>..." to update what will be committed)<br />
		#   (use "git checkout -- <file>..." to discard changes in working directory)<br />
		#<br />
		#	modified:   css/main.css<br />
		#	modified:   footer.php<br />
		#	modified:   index.php<br />

		<br />

		<p>What this is telling you is you're on the branch called master. you 
		have three files which have been modified, but these have not yet 
		been set to staged.</p>

		<p>The staging area is a file status that prepares  one or more 
		files for a commit and a commit is a fixed snapshot of the entire 
		file system of your branch, which in this case will be the status 
		of your working directory.</p>

		<p>I did say this was a bit complex to understand at first, just stick 
		with it for a bit and all will become clear I hope.</p>

		<p>So next we have to add our modified files to the staging area. 
		We do this with the command - myself $: git add </p>

		<p>Like so for the three files above myself $: git add css/main.css 
		footer.php index.php</p>

		<p>Note main.css is in a sub-directory which needs to be specified 
		in the path.</p>

	</div>   <!-- end of mainContent -->

	<div id='sideBar'>		

		<h3>Working Locally</h3>

		<p>	In the sideBar you'll find hints, notes and 
			and further instructions to explain any difficult
			points and things that need highlighting.</p>

		<p>	This site is built using the instructions and
			workflow defined here. You will be able to test
			and work with this site as a sandbox.</p>
				
		<p>	For the reason above the pages have been kept
			very simple, they are just plain html pages, which
			can easily be edited, this will enable people with
			little coding knowledge to actually play with the pages
			and GiT.</p> 


			<br /><br />
			<strong>ProGiT Manual Pages</strong>
			<br /><br />
			<a href="http://git-scm.com/book/en/Getting-Started-Installing-Git">Installing GiT on your Local Machine</a>
			<br /><br />
			<strong>These Pages</strong>
			<br /><br />
			<a href="index.php">1 - Intro and Basics </a>
			<br /><br />
			<a href="page2.php">2 - Your Local Repository </a>
			<br /><br />
			<a href="page3.php">3 - Uploading to GitHub </a>
			<br /><br />
			<a href="page4.php">4 - GitHub to LIVE </a>
			<br /><br />
			<a href="page5.php">5 - Cloning from GitHub  </a>
			<br /><br />





	</div> <!-- end of sideBar -->


<div id='footGap'></div>

<?php
include_once('footer.php');
?>

