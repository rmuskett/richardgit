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
		<span class='codex'>myself:~$ git status</span>. This is a really 
		really useful command as it will should you the current status of 
		your working directory at any point in time.</p>

		<p>If you modify a file, by just editing the file and saving it, 
		and then run - <span class='codex'>myself:~$ git status</span>. You'll 
		see something like this:</p>

		<p class='codex'>
		On branch master<br />
		#<br />
		# Changes not staged for commit:<br />
		#   (use "git add <file>..." to update what will be committed)<br />
		#   (use "git checkout -- <file>..." to discard changes in working directory)<br />
		#<br />
		#	modified:   css/main.css<br />
		#	modified:   footer.php<br />
		#	modified:   index.php<br />
		</p>
		

		<p>What this is telling you is you're on the branch called master. 
		You have three files which have been modified, but these have not yet 
		been set to staged.</p>

		<p>The staging area is a file status that prepares  one or more 
		files for a commit and a commit is a fixed snapshot of the entire 
		file system of your branch, which in this case will be the status 
		of your working directory.</p>

		<p>I did say this was a bit complex to understand at first, just stick 
		with it for a bit and all will become clear I hope.</p>

		<p>So next we have to add our modified files to the staging area. 
		We do this with the command - <span class='codex'>myself:~$ git 
		add</span></p>

		<p>Like so for the three files above - <span class='codex'>myself:~$ 
		git add css/main.css footer.php index.php</span></p>

		<p>Note main.css is in a sub-directory which needs to be specified 
		in the path.</p>

		<p>Okay, what we are doing here is taking the current modification
		state of our working directory ready to build a snapshot of it. We
		only need to worry about the files we've actually modified since our
		last snapshot, or in GiT termonology a Commit. The next Commit will
		include all the changed file that we put in the staging area. Note
		we don't have to put every modified file into the commit, we can select
		the ones we want by staging them, however, if we have files that we have 
		modified but not staged, they will stay that way and GiT will tell us.
		</p>

		<p>The Commit history is important because we can roll-back to a 
		previous commit status if we need too. Commits are heavily used in the
		branching system which we will cover next. </p>

		<p>Okay this is a good time to take a look at the ProGit manual, 
		<a href="http://git-scm.com/book/en/Git-Basics-Recording-Changes-to-the-Repository">GiT Basics and HowTo</a> 
		so you get a feel for the first few commands. Remember the
		git status command is the best and easiest way of actually seeing where
		you are i.e. what status all your files are in.</p>

	</div>   <!-- end of mainContent -->

	<div id='sideBar'>		

		<h3>Working Locally</h3>

		<p>	You work in the terminal to use and control GiT.
			The first task is to point you login to the directory
			you want to work in. GiT must be initilised there first, 
			see page six for detail, but here we are assuming you
			have done this.</p>

		<p>	At your command prompt the key word for a GiT command is
			git. Let's assume your command prompt is something like this:
			<span class='codex'>myself:~$</span> the myself bit will be whatever your username and
			computer name is when you installed the OS.</p>
				
		<p>	A GiT command comes after the prompt something like this
			<span class='codex'>myself:~$ git status</span></p> 

	<?php include_once('menu.php'); ?>
			
			
	</div> <!-- end of sideBar -->


<div id='footGap'></div>

<?php
include_once('footer.php');
?>

