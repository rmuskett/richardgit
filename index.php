<?php

include_once('header.php');


?>

<body>

<div id='wrapper'>	

<div id='mainDiv' class='gradient'>

<div id='mainContent'>

		<h1>Welcome to The GiT Distributed Workflow Demo</h1>

		<br /><br />

		<p>	This is a small, workflow specific demo of the GiT version control 
			system. It is based on a typical distributed workflow, using 
			GitHub and a single on server GiT controlled repository for 
			the LIVE production environment.</p>

		<p>	These pages describe the archituture of this GiT based, workflow 
			and how it is used. The workflow and much of the content is based 
			on the ProGit pages on GitHub authored by SCOTT CHACON.</p>

		<p>	There is a basic assumption here that you have several developers
			working on the project of different experience and abilities and
			therefore review and approval is required before anything is 
			pushed into the LIVE environment. A project co-ordinator or
			lead developer has control of the 'push to LIVE' process.</p>

		<p>	Using a GiT working repository on your development laptop, this 
			demo shows how to keep the on server repositories in sync with
			your local system when there are several people working on the 
			project. Branching enables the development of enhancements and
			new features, then testing and sharing of the changes before they 
			are merged into the master branch and pushed to the LIVE 
			environment.</p>

			<h3>The Difficult Bit</h3>

		<p>	GiT and most other version control systems are devilishy difficult
			to  understand when you initially come across them. For a developer
			working alone the effort seems to outweigh the benefits unless the
			project is particuarly complex. Version control really comes into
			its own when you have a group of developers working on a single
			project.</p>
				
		<p>	The first thing to get your head around in the concept of local
			version control on your development machine and the totally 
			separate concept of a central or master repository on a remote
			machine. The local repository (your local copy) needs to be kept
			in sync with the master copy on the remote repository. To do
			that with a group of developers, everyone must be able to get
			the master copy from the remote, edit it and then post it back 
			again for others to sync with.</p>

		<p>	We will come back to the initial project setup later, for now we
			will assume the project is up and running and a remote master already
			exists together with a LIVE production environment.</p>	
				
		<br /><br />

		<img src="images/workflow.png">

		<br /><br />

		In bullet point form it works like this.

		<br /><br />

			<ul class='basicList'>
 			<li>Every developer has a GitHub account.</li>
			<li>The co-ordinators account acts as a master account</li>
			<li>Each dev needs to install GiT on their development machine (local)</li>
			<li>Each dev needs to set up a GitHub account</li>
			<li>Each dev Clones down the remote master to their machine</li>
			<li>Each dev works on changes on their dev machine</li>
			<li>Each dev pushes up their changes to their remote (their GitHub account) when ready</li>
			<li>Each dev tells the co-ordinator they have changes for review as needed (This is a pull request on GitHub)</li>
			<li>The co-ord pulls the dev changes into their local repository, in a branch</li>
			<li>The co-ord review the changes and tests on their local machine (nothing done permanently yet)</li>
			<li>If the co-ord is happy, he merges the changes from the dev into his local master branch</li>
			<li>The co-ord then pushes his local master branch up to the remote master on GitHub (that is his GitHub account)</li>
			<li>The co-ord can then pull the remote master (on GitHub) to the LIVE server and the update is then LIVE on the server</li>
			</ul>
			<br /><br />

			<ul class='basicList'>
 			<li>Devs can then pull down the updated remote master to update their local repositories.</li>
			<li>Devs can continue to develop fixes and enhancements as needed (mostly done in branches locally)</li>
			<li>Devs then continue the cycle, pushing changes to their remote and creating a pull request to the co-ord.</li>
			</ul>

			<br /><br />

			<p>Note: GiT will not allow the system to get out of sync, so if a 
			Dev has done work on an older version of master it does not 
			matter, the system will tell the dev to merge the latest 
			version of master first before pushing up to their remote 
			repository, they won’t lose any work or anything. This sync 
			function is very slick and what it's all about, it keeps 
			everyone up to date and the master repositories in-line, 
			the co-ord has control of both the remote master and LIVE 
			which mirror each other, so he can review and test any 
			code changes before they are made LIVE.</p>
			
			<p>Branching is a brilliant feature, you can develop changes in 
			a branch and test them, just like using your local master. 
			If they work, you merge them to your local master, if they 
			don’t you just rollback or throw them away and try again, 
			so changes to master only come about when the co-ord is 
			satisfied with the changes. You can branch as many times 
			as you like and have as many open as you like. However, 
			I suggest both Remote Master and LIVE only have a master 
			branch, that way we know both of these are ‘clean’. Devs 
			can have what they like and so can the co-ord on his 
			local machine.</p>

 			<br /><br />

		<h3>Using GiT</h3>

		<p>	First GiT has to be installed on your development machine.
			This is nothing to do with using GitHub or any other remote
			repository, it is to version control files on your local machine.
			GiT is pretty easy to install via distro repositories or direct via
			a tar file which you can then compile. Which ever way you do it, 
			first we have to get GiT running on your machine. The best guide
			I know is the ProGit manual. You'll find a link to the install
			process in the SideBar, so go ahead and install GiT on your machine.</p>

		<p>	Once you have Git running locally, you are now in a position to
			pull down - or Clone - the master from the remote repository. This
			will give you your very own version of the project on your machine.
			You can edit this to your hearts content, and when ready push it back
			to you own repository on GitHub to be reviewed by the project 
			co-ordinator.</p>

		<p>	The project co-ordinator can pull down your work into their
			local repository (in a branch) and if okay they can then merge
			with the master on the remote and also push the revisions into
			the LIVE environment.</p>

		<p>	Everyone else can also pull your changes
			down from the remote master so they too have fully updated
			repositories. All that really happen is their files are amended
			with the differences, they don't get a duplicate in their working
			directory or anything like that. It is all very efficient 
			and clever. </p>


		<p>	The project co-ordinator can control what happens to the
			master remote repository and the LIVE environment. Rather
			that copying or FTP'ing files about they can simply push
			Changes to either and that updates the system. They can
			do this for both the remote master and from there the LIVE
			Production system. It really is quite clever hey.</p>


		<p>	So these are the very basics of controlling a project using
			Git and GitHub, we will now go on into some of the detail
			of the workflow providing references to the use of GiT and
			GitHub as we go. Onwards and Upwards.</p>

	</div>   <!-- end of mainContent -->

	<div id='sideBar'>

		<h3>More Info</h3>

		<p>	In the sideBar you'll find hints, notes and 
			and further instructions to help explain any difficult
			points and things that need highlighting.</p>

		<p>	You will be able to test and work with this site as 
			a sandbox, indeed that is what it is for.</p>
				
		<p>	For the reasons above the pages have been kept
			very simple, they are just plain html pages, which
			can easily be edited, so we can play with the pages,
			GiT and GitHub.</p> 
			
	<?php include_once('menu.php'); ?>

	</div> <!-- end of sideBar -->


<div id='footGap'></div>

<?php
include_once('footer.php');
?>

