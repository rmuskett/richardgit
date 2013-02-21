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


	<?php include_once('menu.php'); ?>
			
	</div> <!-- end of sideBar -->


<div id='footGap'></div>

<?php
include_once('footer.php');
?>

