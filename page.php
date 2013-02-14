<?php include_once('header.php'); ?>

	
	<div id="content-top" class="top-alt"></div>
	<div id="content" class="clearfix content-alt">
		<div id="content-area">
		
		<div class="entry clearfix post">
		<h1 class="title"> GiT & GitHub Version Control</h1>
				
			<p>	This is a small, workflow specific demo of the GiT version control 
				system running on a private server in a virtual hosted environment. 
				It is based on a typical distributed workflow, using GitHub and a 
				single on server GiT controlled repository for the LIVE production 
				environment.</p>

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

			<br /><br />

			<h4>The Basics</h4>

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

			<h4>Using GiT - Summary</h4>

			<p>	First GiT has to be installed on your development machine.
				This is nothing to do with using GitHub or any other remote
				repository, GiT is a development of the Linux Project and used 
				to manage version control of the Kernel amoungst many other things.
				GiT is pretty easy to install via distro repositories or direct via
				a tar file which you can then compile. Which ever way you do it, 
				first we have to get GiT running on your machine, so the best guide
				I know of is here. Use the link in the SideBar to go to GiT install 
				pages of the Pro Git manual on GitHub.</p>

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

		</div> <!-- end entry -->
                
	</div> <!-- end #content-area -->
		
			<div> <!-- This is the sideBar Div -->
				
				<div id="sidebar-inner" class="clear">
				
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
						and GiT. 
						<br /><br />
						<strong>Pro GiT Manual Pages</strong>
						<br /><br />
						<a href="#">Installing GiT on your Local Machine</a>
						<br /><br />


					</p>



				</div>
				
				
				
				
			</div> <!-- This ends the sideBar Div -->
		
	</div> <!-- end #content -->
	
	
	
	<div id="content-bottom" class="bottom-alt"></div>
	
<?php include_once('footer.php'); ?>