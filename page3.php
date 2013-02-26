<?php

include_once('header.php');


?>

<body>

<div id='wrapper'>	

<div id='mainDiv' class='gradient'>

<div id='mainContent'>

		<h1>Branching and Branch Merges</h1>

		<br /><br />

		<p>Branching is a difficult concept to explain, but very powerful
		and easy to use once you've grasped the basics. Essentially
		it lets you divert the commit path, leaving intact the master
		branch, which you can return too at any time. The point of 
		divergance is recorded and you can flip back at will. The most 
		dramatic effect can be seen by deleting a file in a branch which
		will remove it from the working directory, you can see this in your
		code editor. If you now flip back to the master branch the file
		will magically re-appear in your working directory. Flip between
		the branches as watch the file appear and disappear.</p>

		<p>Of course the file is not really being deleted, GiT is simply
		hiding the file which you deleted in the branch. This change effect
		is applied to any changes, GiT knows the status of all the files in
		both branches. This even applies to testing the files. If the branch is
		active (checked out) then  then testing on the working directory
		will respond to the branch you are in.</p> 

		<p>You can open as many branches as you want, they will all act
		independently of each other, until you MERGE them. Ultimately
		you will want to merge them into the master branch and push up
		to your remote. </p>

		<p>Now to try and explain this graphically. So let's have two branches
		Master and Testing.</p>
		
		<img src="images/branching.png">

		<br /><br />

		<p>Above we have three commits, at the point of commit f30ab, we
		have created a new branch named testing. All we have done so far is
		created a new pointer, we have made another commit so nothing has
		diverged yet.</p>

		<img src="images/head.png">

		<br /><br />

		<p>HEAD is the pointer, this is where GiT is pointing too. To
		swap to another branch you 'checkout' to that branch this moves HEAD
		to 'testing' in this case.</p>

		<img src="images/head2.png">

		<br /><br />

		<p>Now when we do more editing and then make another commit, HEAD moves
		on in the testing branch, but not the pointer to master remains
		in place, so when you swap back to master (checkout master) the
		working directory will revert to that status. master will reflect
		the working directory's status before any changes you made in commit
		2cb9e. Both master and testing will stay separated, until you merge
		testing with master or discard it</p>

		<img src="images/head3.png">

		<br /><br />

		<p>There is lots more to branching and how this technique can be used.
		here's a link to the ProGiT chapter whcih covers this in much more depth,
		<a href="http://git-scm.com/book/en/Git-Branching-What-a-Branch-Is">Branching and Merging</a> 
		but I hope this is enough to get you started with the concept. The
		images above are adapted from ProGiT</p>


	</div>   <!-- end of mainContent -->

	<div id='sideBar'>		

		<h3>Branching</h3>

		<p>	Below you will find a few of the key commands needed to 
			use branching effectively. Branching is best used locally,
			the intention is not to push branches up to your remote
			repositories, or the Master or LIVE instances. </p>

		<span class='codex'>myself:~$ git branch</span><br />
				
		<p>	This will list all the branches you have in the current
		repository.</p>

		<span class='codex'>myself:~$ git branch NewBranch </span><br />
				
		<p>	This will create a new branch called NewBranch, you can
			use pretty much any name you like, typically branches
			are named after features or bugs you are working on.</p>

		<p>	You can open as many branches as you want, normally one
			for each bug or feature you are working on is a typical
			practice.</p>

		<span class='codex'>myself:~$ git checkout NewBranch </span><br />
				
		<p>	To start working in the new branch you create you use the
			checkout command, this will mve your pointer to any branch you
			current have. You working directory will reflect the file status
			of this branch.</p>

		<span class='codex'>myself:~$ git merge NewBranch </span><br />
				
		<p>	To merge a branch, that is to combine it with say your master
			branch and update all the files in master to the latest 
			status, you merge. To do this you must first move to 
			(Checkout) the branch you want to merge with and then 
			merge the other branch, in this case NewBranch into it.</p>

	<?php include_once('menu.php'); ?>
			
	</div> <!-- end of sideBar -->


<div id='footGap'></div>

<?php
include_once('footer.php');
?>

