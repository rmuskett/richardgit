<?php

include_once('header.php');


?>

<body>

<div id='wrapper'>	

<div id='mainDiv' class='gradient'>

<div id='mainContent'>

		<h1>Pushing to Your Remote Repository</h1>

		<br /><br />

		<p>So, you have created a branch, done some super work 
		building a new feature, you have tested it and merged it
		back into your local master and your ready to show the
		rest of us. So how do you get the LIVE system updated?</p>

		<p>Well the first step in this process is to push your work
		up into your own remote repository so we can all get 
		access to it and pull it down into a local branch of our
		own if needed.</p>

		<p>Pushing to a remote repository is pretty straight forwards, 
		particuarly on GitHub. You could of course use a free public
		account or a private account on GitHub, again we are assuming
		you are using a private repository for anything work related.</p>

		<p>Firstly you need to make sure you have your remotes configured.
		Again very easy to do with the command <span class='codex'>
		myself:~$ git remote</span> which will list all your remote
		repositories you have set up. </p>

		<p>Setting up a remote is very easy with GitHub, simply use the
		command <span class='codex'>myself:~$ git remote add [shortname] [url]:</span>
		The short name is anything you want to use to refer to this repository and the
		URL is given in the GitHub account, which you can just copy and paste into
		this command. This will give you access to that repository, which you can
		now push work too.</p>

		<p>Now we have a remote setup, we can simply use 
		<span class='codex'>myself:~$ git push [remoteName] master</span>
		to push the branch you are currently checked out in to the remote
		you have named and its master branch.</p>

		<p>This is actually quite a lot easier to do than to write down.
		If you have got to this point then the basic operations we are
		discussing should be fairly familiar. This basic concept of 
		pushing and pulling from a remote is fundamental to the use of
		GiT in a collabrotive environment.</p>

		<p>Now that you have your work updated in your remote repository
		you just need to tell the co-ordinator and the rest of the
		development group it is there and ready for review. You can do this
		with a simple email or using the GiTHub pull request. This is no more
		than an automated way to send that email using the GitHub interface.
		</p>
		
		<p>The co-ordinator can review the code changes on GitHub and or
		pull down your work into a branch on their local system for
		further review and testing. Once the co-ord is satisfied they
		can push your work into the Master repository and the 
		LIVE system.</p>

		<p>And that is all there is too it. This little process gets repeated
		and work gets done, with the master repository and LIVE system
		getting updates as they are ready. You MUST make sure you
		pull down the Master repository on a regular basis to make sure
		you keep you local reasonably updated, otherwise you are likely
		to get merge conflicts. These can be easily resolved, but are
		better avoided in the first place where possible.</p>

		<p>Next we will cover how the LIVE system is maintained by the
		project co-ordinator, more for interest and future reference
		at this time.</p>

		<br /><br /><br /><br /><br /><br /><br /><br /><br />
		<br /><br /><br /><br /><br /><br /><br /><br /><br />


	</div>   <!-- end of mainContent -->

	<div id='sideBar'>		

		<h3>Pushing to Remote</h3>

		<p>	Below you will find a few of the key commands needed to 
			use your remote. </p>

		<span class='codex'>myself:~$ git remote</span><br />
				
		<p>	This will list all your remote repositories.</p>

		<span class='codex'>myself:~$ git remote add [shortname] [url]:</span>
				
		<p>	To add a remote to your local system.</p>

		<span class='codex'>myself:~$ git push [remoteName] master</span><br />
				
		<p>	To push work to the remote named remoteName master branch.</p>



	<?php include_once('menu.php'); ?>		
			
	</div> <!-- end of sideBar -->


<div id='footGap'></div>

<?php
include_once('footer.php');
?>

