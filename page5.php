<?php

include_once('header.php');


?>

<body>

<div id='wrapper'>	

<div id='mainDiv' class='gradient'>

<div id='mainContent'>

		<h1>Pushing upto the LIVE Repository</h1>

		<br /><br />

		<p>Managing the LIVE system is the job of the project co-ordinator.
		They are responsible in this workflow for the master repository
		and the LIVE system.</p>

		<p>LIVE is of course hosted on the production server. That
		in principal can be any server, on any hosting plan, provided
		there is SSH access for the co-ord and any other sysadmin
		that needs access to the server.</p>

		<p>The project co-ord maintains his remote repository on
		GitHub as the Master, everyone else can pull down from
		this repository, but only the  co-ord can push to it.
		The LIVE production server mirrors this repository. The
		production server must also be running GiT and the LIVE
		directory must be setup as a GiT repository.</p> 

		<p>Using GiT you should not push to a repository with a working
		directory and in this workflow LIVE has a working directory, so
		the workflow needs to pull up rather than push to LIVE. To do
		this the co-ord needs to log into the LIVE working directory on the
		server and issue a pull command to the master branch of his 
		repsoitory, which is of course the project's master.</p> 

		<p>This is simply a <span class='codex'>myself:~$ git pull 
		origin master</span> command. This will pull any changes to the
		LIVE repository, making the updates functional on the public
		website, it really is as simple at that.</p> 

		<p>Now there are a couple of technicalities we need to also
		consider. Firstly we don't want to overwrite files that are
		unique to the LIVE environment, like database connection scripts
		and alike. For this GiT has a process to exclude certain files
		maintaining their revision status as is depending on their location.
		This is achieved with a .gitignore file the contents of which is 
		a list of files that GiT will ingore, even though they are located
		in the working directory. This means files like DB connection scripts
		will remain unique on both the developers local repository and the
		LIVE system, these files will not be overwritten as future development
		takes place, unless there is a specific action to do so.</p> 

		<p>It is useful to build the .gitignore file before any initial
		commits take place, this prevents any files that should be included
		from ending up in the modified, not staged area. You can work files
		out of this, but it is easier to exclude them in the first instance.
		The .gitignore file can include whole directories to be excluded as
		well as individual files. It can also cope with file types, using
		pattern matching so for instance you can easily exclude all text files
		like this *.txt</p> 

		<p>This is pretty much all there is to maintaining the LIVE system
		using this workflow. It is not fully automated as the intention
		here is to give the project co-ord a good deal of control over
		what and when revisions get moved up to LIVE, it is of course 
		possible to automate that, but some control would be lost 
		in that process. The links in the sidebar provide references
		to more detailed information, but I hope this gives the basic
		concept for maintaining the LIVE system via GiT.</p> 

		<br /><br /><br /><br /><br /><br /><br /><br /><br />
		<br /><br /><br /><br /><br /><br /><br /><br /><br />
		<br /><br /><br /><br /><br /><br /><br /><br /><br />

	</div>   <!-- end of mainContent -->

	<div id='sideBar'>		

		<h3>Pushing to LIVE</h3>

		<p>	This is a pretty simple process, although in
			this workflow is not fully automated, giving
			the project co-ordinator a good deal of control
			over what and when things get pulled into
			LIVE. </p>

		<p>	It can be achieved with one simple command. </p>

		<span class='codex'>myself:~$ git pull 
		origin master</span><br /><br />
				
		<p>	This will pull the master repository on GitHub,
			into the LIVE repository on the server, updating
			LIVE in the process.</p>


	<?php include_once('menu.php'); ?>
			
	</div> <!-- end of sideBar -->


<div id='footGap'></div>

<?php
include_once('footer.php');
?>

